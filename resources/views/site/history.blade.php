@extends('layouts.simple.master')
@section('title','Our History')

@section('breadcrumb-title')
<h2>Company<span> History</span></h2>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Company</li>
<li class="breadcrumb-item active">History</li>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-body">
          <div class="timeline">
            <div class="timeline-item"><h6>2014</h6><p>Ogung Ganda Persada founded with a focus on reliable bookkeeping for SMEs.</p></div>
            <div class="timeline-item"><h6>2017</h6><p>Expanded into tax advisory and payroll services.</p></div>
            <div class="timeline-item"><h6>2020</h6><p>Introduced cloud-first reporting and monthly CFO insights.</p></div>
            <div class="timeline-item"><h6>2023</h6><p>Launched analytics dashboards for real-time finance visibility.</p></div>
          </div>
          <div class="mt-3">
            <a href="{{ route('site.clients') }}" class="btn btn-pill btn-air-secondary">See our clients</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
