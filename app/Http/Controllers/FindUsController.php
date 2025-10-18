<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FindUsController extends Controller
{
    public function show(Request $request)
    {
        // Defaults to previously used coordinates
        $lat = -6.301981;
        $lng = 106.814568;
    $zoom = 18;
    $placeId = null;

        $query = 'Raldo Army';
        $ll = '@-6.302021656510675, 106.81449021594102,14z';
        $apiKey = config('services.serpapi.key');

        // Per-user one-time lookup lock using session
        $session = $request->session();
        if ($cached = $session->get('find_us.coords')) {
            $lat = $cached['lat'] ?? $lat;
            $lng = $cached['lng'] ?? $lng;
            $zoom = $cached['zoom'] ?? $zoom;
            $placeId = $cached['placeId'] ?? $placeId;
            return view('site.find-us', compact('lat', 'lng', 'zoom', 'placeId'));
        }
        $lookupDone = (bool) $session->get('find_us.lookup_done', false);

        if ($apiKey && !$lookupDone) {
            try {
                $params = [
                    'engine' => 'google_maps',
                    'type' => 'search',
                    'google_domain' => 'google.com',
                    'q' => $query,
                    'll' => $ll,
                    'hl' => 'en',
                    'api_key' => $apiKey,
                ];

                $resp = Http::get('https://serpapi.com/search.json', $params);
                if ($resp->ok()) {
                    $json = $resp->json();
                    // Try to pull first result's GPS coordinates
                    if (!empty($json['local_results'])) {
                        $first = $json['local_results'][0];
                        if (isset($first['gps_coordinates']['latitude'], $first['gps_coordinates']['longitude'])) {
                            $lat = $first['gps_coordinates']['latitude'];
                            $lng = $first['gps_coordinates']['longitude'];
                            $zoom = 17;
                        }
                        if (isset($first['place_id'])) {
                            $placeId = $first['place_id'];
                        }
                    } elseif (!empty($json['place_results']['gps_coordinates'])) {
                        $lat = $json['place_results']['gps_coordinates']['latitude'] ?? $lat;
                        $lng = $json['place_results']['gps_coordinates']['longitude'] ?? $lng;
                        $zoom = 17;
                        if (isset($json['place_results']['place_id'])) {
                            $placeId = $json['place_results']['place_id'];
                        }
                    }
                    // Cache the result in session for this user and mark lookup as done
                    $session->put('find_us.coords', [
                        'lat' => $lat,
                        'lng' => $lng,
                        'zoom' => $zoom,
                        'placeId' => $placeId,
                    ]);
                }
            } catch (\Throwable $e) {
                // Fail gracefully; keep defaults
            }
            // Regardless of success/failure, ensure only one attempt per user session
            $session->put('find_us.lookup_done', true);
        }

        return view('site.find-us', compact('lat', 'lng', 'zoom', 'placeId'));
    }
}
