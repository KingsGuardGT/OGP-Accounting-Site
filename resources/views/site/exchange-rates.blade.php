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
