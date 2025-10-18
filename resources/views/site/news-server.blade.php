@extends('layouts.simple.master')
@section('title','News')

@section('breadcrumb-title')
<h2>Company<span> News</span></h2>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Company</li>
<li class="breadcrumb-item active">News</li>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Latest News</h5>
          <small class="text-muted">Loaded once per user session</small>
        </div>
        <div class="card-body">
          @php $meta = $_meta ?? ['cached'=>false]; @endphp
          @if($meta['cached'] ?? false)
            <div class="alert alert-light py-2">Showing cached results for this session. <a href="{{ route('site.news', ['refresh' => 1]) }}">Refresh</a></div>
          @endif
          @if(empty($accounting) && empty($forex) && empty($crypto))
            <div class="alert alert-warning d-flex justify-content-between align-items-center">
              <span>We couldn't load news right now. Please try again shortly.</span>
              <a class="btn btn-sm btn-outline-primary" href="{{ route('site.news', ['refresh' => 1]) }}">Try again</a>
            </div>
          @endif
          <ul class="nav nav-tabs" id="newsTabs" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="tab-accounting" data-toggle="tab" data-target="#pane-accounting" type="button" role="tab">Accounting</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="tab-forex" data-toggle="tab" data-target="#pane-forex" type="button" role="tab">Foreign Exchange</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="tab-crypto" data-toggle="tab" data-target="#pane-crypto" type="button" role="tab">Crypto</button>
            </li>
          </ul>
          <div class="tab-content pt-3">
            <div class="tab-pane fade show active" id="pane-accounting" role="tabpanel">
              <div class="row">
                @forelse(($accounting ?? []) as $a)
                  <div class="col-md-6 col-xl-4">
                    <div class="card h-100">
                      @if(!empty($a['urlToImage']))
                        <img class="card-img-top" src="{{ $a['urlToImage'] }}" alt=""/>
                      @endif
                      <div class="card-body">
                        <h6 class="card-title">{{ $a['title'] ?? '' }}</h6>
                        <p class="card-text">{{ $a['description'] ?? '' }}</p>
                        <div class="small text-muted mb-2">
                          @if(!empty($a['source']))<span>{{ $a['source'] }}</span>@endif
                          @if(!empty($a['pubDate']))<span class="ml-2">{{ \Carbon\Carbon::parse($a['pubDate'])->diffForHumans() }}</span>@endif
                        </div>
                        @if(!empty($a['url']))
                          <a href="{{ $a['url'] }}" target="_blank" class="btn btn-air-secondary">Read more</a>
                        @endif
                      </div>
                    </div>
                  </div>
                @empty
                  <div class="col-12"><div class="alert alert-light">No results.</div></div>
                @endforelse
              </div>
              @if(($meta['next_accounting'] ?? null))
                <div class="text-center mt-3">
                  <a class="btn btn-outline-primary" href="{{ route('site.news', array_filter(['next_accounting' => $meta['next_accounting'] ?? null])) }}">Load more</a>
                </div>
              @endif
            </div>
            <div class="tab-pane fade" id="pane-forex" role="tabpanel">
              <div class="row">
                @forelse(($forex ?? []) as $a)
                  <div class="col-md-6 col-xl-4">
                    <div class="card h-100">
                      @if(!empty($a['urlToImage']))
                        <img class="card-img-top" src="{{ $a['urlToImage'] }}" alt=""/>
                      @endif
                      <div class="card-body">
                        <h6 class="card-title">{{ $a['title'] ?? '' }}</h6>
                        <p class="card-text">{{ $a['description'] ?? '' }}</p>
                        <div class="small text-muted mb-2">
                          @if(!empty($a['source']))<span>{{ $a['source'] }}</span>@endif
                          @if(!empty($a['pubDate']))<span class="ml-2">{{ \Carbon\Carbon::parse($a['pubDate'])->diffForHumans() }}</span>@endif
                        </div>
                        @if(!empty($a['url']))
                          <a href="{{ $a['url'] }}" target="_blank" class="btn btn-air-secondary">Read more</a>
                        @endif
                      </div>
                    </div>
                  </div>
                @empty
                  <div class="col-12"><div class="alert alert-light">No results.</div></div>
                @endforelse
              </div>
              @if(($meta['next_forex'] ?? null))
                <div class="text-center mt-3">
                  <a class="btn btn-outline-primary" href="{{ route('site.news', array_filter(['next_forex' => $meta['next_forex'] ?? null])) }}">Load more</a>
                </div>
              @endif
            </div>
            <div class="tab-pane fade" id="pane-crypto" role="tabpanel">
              <div class="row">
                @forelse(($crypto ?? []) as $a)
                  <div class="col-md-6 col-xl-4">
                    <div class="card h-100">
                      @if(!empty($a['urlToImage']))
                        <img class="card-img-top" src="{{ $a['urlToImage'] }}" alt=""/>
                      @endif
                      <div class="card-body">
                        <h6 class="card-title">{{ $a['title'] ?? '' }}</h6>
                        <p class="card-text">{{ $a['description'] ?? '' }}</p>
                        <div class="small text-muted mb-2">
                          @if(!empty($a['source']))<span>{{ $a['source'] }}</span>@endif
                          @if(!empty($a['pubDate']))<span class="ml-2">{{ \Carbon\Carbon::parse($a['pubDate'])->diffForHumans() }}</span>@endif
                        </div>
                        @if(!empty($a['url']))
                          <a href="{{ $a['url'] }}" target="_blank" class="btn btn-air-secondary">Read more</a>
                        @endif
                      </div>
                    </div>
                  </div>
                @empty
                  <div class="col-12"><div class="alert alert-light">No results.</div></div>
                @endforelse
              </div>
              @if(($meta['next_crypto'] ?? null))
                <div class="text-center mt-3">
                  <a class="btn btn-outline-primary" href="{{ route('site.news', array_filter(['next_crypto' => $meta['next_crypto'] ?? null])) }}">Load more</a>
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
