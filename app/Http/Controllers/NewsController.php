<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $session = $request->session();
        // Optional refresh to clear one-time cache (useful if key was added later)
        $hasPaging = $request->filled('next_accounting') || $request->filled('next_forex') || $request->filled('next_crypto');
        if ($request->boolean('refresh')) {
            $session->forget('news.once');
        } elseif (!$hasPaging && ($cached = $session->get('news.once'))) {
            return view('site.news-server', array_merge($cached, ['_meta' => array_merge(($cached['_meta'] ?? []), ['cached' => true]) ]));
        }

        // Fast shared cache to avoid repeated slow fetches across users (30 minutes)
        if (!$request->boolean('refresh') && !$hasPaging) {
            $shared = Cache::get('news.latest');
            if (is_array($shared) && !empty(($shared['accounting'] ?? [])) + !empty(($shared['forex'] ?? [])) + !empty(($shared['crypto'] ?? []))) {
                return view('site.news-server', array_merge($shared, ['_meta' => ['cached' => true]]));
            }
        }

        // Switch to newsdata.io provider
        $apiKey = config('services.newsdata.key');
        $base = rtrim(config('services.newsdata.base', 'https://newsdata.io/api/1'), '/');
        $topics = [
            'accounting' => 'accounting OR bookkeeping OR auditors',
            'forex'      => 'forex OR "foreign exchange" OR "currency market"',
        ];
        $results = [];
        $nextTokens = [
            'accounting' => null,
            'forex' => null,
            'crypto' => null,
        ];

        if ($apiKey) {
            // Prefer Laravel HTTP client with short timeouts to prevent long blocking
            $this->fetchLatestTopics($base, $topics, $apiKey, $results, $nextTokens, [
                'next_accounting' => $request->query('next_accounting'),
                'next_forex' => $request->query('next_forex'),
            ]);
            // Crypto via dedicated endpoint (available on free plan)
            [$cryptoArticles, $cryptoNext] = $this->fetchCryptoTopic($base, $apiKey, $request->query('next_crypto'));
            $results['crypto'] = $cryptoArticles;
            $nextTokens['crypto'] = $cryptoNext;
        } else {
            $results = ['accounting' => [], 'forex' => [], 'crypto' => []];
            \Log::warning('NEWSDATA_API_KEY is not set; news will be empty');
        }

        $payload = [
            'accounting' => array_slice($results['accounting'] ?? [], 0, 10),
            'forex' => array_slice($results['forex'] ?? [], 0, 10),
            'crypto' => array_slice($results['crypto'] ?? [], 0, 10),
            '_meta' => [
                'cached' => false,
                'next_accounting' => $nextTokens['accounting'] ?? null,
                'next_forex' => $nextTokens['forex'] ?? null,
                'next_crypto' => $nextTokens['crypto'] ?? null,
            ],
        ];
        // Only cache if initial page (no paging params), we have an API key and at least one topic returned results
        $hasAny = (count($payload['accounting']) + count($payload['forex']) + count($payload['crypto'])) > 0;
        if ($apiKey && !$hasPaging && $hasAny) {
            $session->put('news.once', $payload);
            // Also store shared cache for 30 minutes
            Cache::put('news.latest', $payload, now()->addMinutes(30));
        }

        return view('site.news-server', $payload);
    }

    /**
     * Fetch accounting and forex topics via the Latest endpoint with proper parameters and pagination tokens.
     * Returns normalized fields and captures nextPage tokens per topic.
     */
    private function fetchLatestTopics(string $base, array $topics, string $apiKey, array &$results, array &$nextTokens, array $incomingNext): void
    {
        $proxy = env('HTTPS_PROXY') ?: env('HTTP_PROXY');
        $deadline = microtime(true) + 8.0; // hard cap total work to ~8 seconds
        foreach ($topics as $key => $query) {
            if (microtime(true) > $deadline) {
                \Log::info('News fetch budget exceeded, skipping remaining topics', ['skipped' => $key]);
                $results[$key] = $results[$key] ?? [];
                continue;
            }
            $params = [
                'apikey' => $apiKey,
                'q' => $query,
                'language' => 'en',
                'removeduplicate' => 1,
                'image' => 1,
                // Free plan: size 1..10; Paid up to 50
                'size' => 10,
            ];
            $nextParam = $incomingNext['next_'.$key] ?? null;
            if (!empty($nextParam)) {
                $params['page'] = $nextParam; // token from previous nextPage
            }
            // Single fast attempt via Laravel HTTP client with short timeouts
            $articles = [];
            try {
                if (class_exists('Illuminate\\Support\\Facades\\Http')) {
                    $http = Http::withOptions([
                        'verify' => false, // temporary workaround for SSL issue; see notes to configure CA bundle
                        'timeout' => 3,
                        'connect_timeout' => 2,
                    ]);
                    if ($proxy) {
                        $http = $http->withOptions(['proxy' => $proxy]);
                    }
                    $response = $http->get($base . '/latest', $params);
                    if ($response->successful()) {
                        $data = $response->json();
                        $items = is_array($data['results'] ?? null) ? $data['results'] : [];
                        $nextTokens[$key] = $data['nextPage'] ?? null;
                        foreach ($items as $a) {
                            $articles[] = [
                                'title' => $a['title'] ?? null,
                                'description' => $a['description'] ?? null,
                                'url' => $a['link'] ?? null,
                                'urlToImage' => $a['image_url'] ?? null,
                                'source' => $a['source_id'] ?? ($a['source_name'] ?? null),
                                'pubDate' => $a['pubDate'] ?? null,
                            ];
                        }
                    }
                }
            } catch (\Throwable $e) {
                \Log::warning('Newsdata fetch via Laravel HTTP (fast) failed', ['topic' => $key, 'error' => $e->getMessage()]);
            }
            $results[$key] = $articles;
        }
    }

    /**
     * Fetch crypto news via the Crypto endpoint with pagination token support.
     */
    private function fetchCryptoTopic(string $base, string $apiKey, ?string $nextToken = null): array
    {
        $proxy = env('HTTPS_PROXY') ?: env('HTTP_PROXY');
        $params = [
            'apikey' => $apiKey,
            // Filter by popular coins; fallback is generic if plan/filters differ
            'coin' => 'btc,eth',
            'language' => 'en',
            'removeduplicate' => 1,
            'image' => 1,
            'size' => 10,
        ];
        if (!empty($nextToken)) {
            $params['page'] = $nextToken; // token from previous nextPage
        }
        $articles = [];
        $next = null;
        try {
            if (class_exists('Illuminate\\Support\\Facades\\Http')) {
                $http = Http::withOptions([
                    'verify' => false,
                    'timeout' => 3,
                    'connect_timeout' => 2,
                ]);
                if ($proxy) {
                    $http = $http->withOptions(['proxy' => $proxy]);
                }
                $response = $http->get($base . '/crypto', $params);
                if ($response->successful()) {
                    $data = $response->json();
                    $items = is_array($data['results'] ?? null) ? $data['results'] : [];
                    $next = $data['nextPage'] ?? null;
                    foreach ($items as $a) {
                        $articles[] = [
                            'title' => $a['title'] ?? null,
                            'description' => $a['description'] ?? null,
                            'url' => $a['link'] ?? null,
                            'urlToImage' => $a['image_url'] ?? null,
                            'source' => $a['source_id'] ?? ($a['source_name'] ?? null),
                            'pubDate' => $a['pubDate'] ?? null,
                        ];
                    }
                }
            }
        } catch (\Throwable $e) {
            \Log::warning('Newsdata crypto fetch failed', ['error' => $e->getMessage()]);
        }
        return [$articles, $next];
    }

    private function tryFetchWithStream(string $url, string $apiKey, bool $verify, ?string $cafile = null): ?array
    {
        try {
            $ssl = [
                'verify_peer' => $verify,
                'verify_peer_name' => $verify,
            ];
            if ($cafile) {
                $ssl['cafile'] = $cafile;
            }
            $ctx = stream_context_create([
                'http' => [
                    'method' => 'GET',
                    'header' => 'X-Api-Key: ' . $apiKey . "\r\n",
                    'timeout' => 10,
                ],
                'ssl' => $ssl,
            ]);
            $raw = @file_get_contents($url, false, $ctx);
            if ($raw === false) {
                return null;
            }
            $data = json_decode($raw, true);
            $articles = [];
            foreach (($data['articles'] ?? []) as $a) {
                $articles[] = [
                    'title' => $a['title'] ?? null,
                    'description' => $a['description'] ?? null,
                    'url' => $a['url'] ?? null,
                    'urlToImage' => $a['urlToImage'] ?? null,
                ];
            }
            return $articles;
        } catch (\Throwable $e) {
            \Log::warning('News fetch via streams failed', ['verify' => $verify, 'error' => $e->getMessage()]);
            return null;
        }
    }
}
