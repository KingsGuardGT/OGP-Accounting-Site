@extends('layouts.main')

@section('title','Exchanges - OGP Accounting')

@section('content')
<div class="row">
    <div class="col-12 mb-3">
        <div class="card p-3">
            <div class="d-flex align-items-center">
                <img src="{{ asset('assets/images/founder.jpg') }}" alt="Founder" style="height:72px; width:auto; margin-right:1rem;" onerror="this.onerror=null;this.src='{{ asset('assets/images/attachment-1.jpg') }}'"/>
                <div>
                    <h3 class="mb-0">Exchange Rates — Demo Charts</h3>
                    <p class="text-muted mb-0">Sample exchange rate visuals and demo data driven charts.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card p-3">
            <h5>Line Chart — USD / Local (Demo)</h5>
            <canvas id="lineChart"></canvas>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card p-3">
            <h5>Bar Chart — Monthly (Demo)</h5>
            <canvas id="barChart"></canvas>
        </div>
    </div>

    <div class="col-12 mt-3">
        <div class="card p-3">
            <h5>Notes</h5>
            <p class="text-muted">This page is a demo using Chart.js and sample data. Replace datasets with live exchange-rate API data when ready.</p>
        </div>
    </div>
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const lineCtx = document.getElementById('lineChart').getContext('2d');
        new Chart(lineCtx, {
            type: 'line',
            data: {
                labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul'],
                datasets: [{
                    label: 'USD / Local',
                    borderColor: '#1f77b4',
                    backgroundColor: 'rgba(31,119,180,0.1)',
                    data: [14.2,14.5,14.4,14.7,14.9,14.8,15.1],
                    tension: 0.3
                }]
            }
        });

        const barCtx = document.getElementById('barChart').getContext('2d');
        new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul'],
                datasets: [{
                    label: 'Volume (Demo)',
                    backgroundColor: '#ff7f0e',
                    data: [120,150,170,140,180,190,220]
                }]
            }
        });
    </script>
@endpush

@endsection
@extends('layouts.simple.master')
@section('title','Exchange Rates')

@section('breadcrumb-title')
<h2>Exchange<span> Rates</span></h2>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Company</li>
<li class="breadcrumb-item active">Exchange Rates</li>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Live Rates</h5>
          <div>
            <span class="badge badge-light">Demo Data</span>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Pair</th>
                  <th>Rate</th>
                  <th>24h Change</th>
                </tr>
              </thead>
              <tbody id="rates-body"></tbody>
            </table>
          </div>
          <div class="mt-3">
            <button id="refreshRates" class="btn btn-pill btn-air-primary">Refresh Rates</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script>
  (function(){
    const API = 'https://v6.exchangerate-api.com/v6/b0a0c1713abfe7869a3119ff/latest/IDR';
    const pairs = [
      { base: 'USD', name: 'USD/IDR', icon: 'fa fa-usd' },
      { base: 'EUR', name: 'EUR/IDR', icon: 'fa fa-eur' },
      { base: 'JPY', name: 'JPY/IDR', icon: 'fa fa-jpy' },
      { base: 'GBP', name: 'GBP/IDR', icon: 'fa fa-gbp' },
    ];
    const tbody = document.getElementById('rates-body');
    const btn = document.getElementById('refreshRates');

    async function loadRates(){
      try {
        tbody.innerHTML = '<tr><td colspan="3">Loading...</td></tr>';
        const res = await fetch(API);
        const data = await res.json();
        if(!data || !data.conversion_rates){
          throw new Error('No rates available');
        }
        const r = data.conversion_rates; // base IDR: value is how many <CURRENCY> per 1 IDR
        // We want <CURRENCY>/IDR => compute as 1 / r[<CURRENCY>] when base is IDR.
        const rows = pairs.map(p => {
          const v = r[p.base];
          if(!v) return `<tr><td>${p.name}</td><td>-</td><td>-</td></tr>`;
          const rate = (1 / v);
          return `<tr><td><i class="${p.icon}"></i> ${p.name}</td><td>${rate.toLocaleString(undefined,{maximumFractionDigits:2})}</td><td><span class="badge badge-light">n/a</span></td></tr>`;
        }).join('');
        tbody.innerHTML = rows;
      } catch (e){
        tbody.innerHTML = `<tr><td colspan="3" class="text-danger">Failed to load rates</td></tr>`;
      }
    }

    document.addEventListener('DOMContentLoaded', loadRates);
    if(btn) btn.addEventListener('click', loadRates);
  })();
</script>
@endsection
