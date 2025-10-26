@extends('layouts.main')

@section('title','History - OGP Accounting')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card p-3">
            <img src="{{ asset('assets/images/founder.jpg') }}" alt="Founder" class="img-fluid mb-3" onerror="this.onerror=null;this.src='{{ asset('assets/images/attachment-1.jpg') }}'" />
            <h4>Merintan Berliana Simbolon</h4>
            <p class="text-muted">Founder, OGP Accounting</p>
            <p>
                Merintan Berliana Simbolon is an experienced accountant and trainer with many years in finance,
                accounting and credit control. She has served as Head of Finance, Credit Control Manager,
                Senior Accountant and Auditor for multinational and local companies. She also provides
                training in accounting, collections and finance topics.
            </p>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card p-3 mb-3">
            <h3>Company History (Demo)</h3>
            <p>
                OGP Accounting began as a small consultancy focused on collections and accounting best practices.
                Over the years the company expanded services to include bookkeeping, tax advisory and
                training programs for corporate clients in the region. This demo page shows sample content
                pulled from the founder's profile and is intended to illustrate how the real history page
                will look once content is finalized.
            </p>
            <h5>Highlights</h5>
            <ul>
                <li>Established by Merintan Berliana Simbolon, an experienced finance professional.</li>
                <li>Delivered training to multinational clients across Southeast Asia.</li>
                <li>Expanded to offer accounting, tax and advisory services.</li>
            </ul>
        </div>

        <div class="card p-3">
            <h4>Resume (Selected items)</h4>
            <p><strong>Education</strong>: Magister Accounting (S2), Universitas Pancasila; SE.Ak Universitas Sumatera Utara</p>
            <p><strong>Experience</strong>:</p>
            <ul>
                <li>Director — PT. Ogung Ganda Persada (Accounting & Tax Services)</li>
                <li>Head of Finance / Financial Controller — 2012-2014</li>
                <li>Management Accountant / Finance Manager — 2010-2012</li>
                <li>Credit Control Manager — 2002-2010</li>
            </ul>
            <p class="text-muted small">This demo content came from the provided CV and image attachments and can be edited later.</p>
        </div>
    </div>
</div>

@endsection
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
