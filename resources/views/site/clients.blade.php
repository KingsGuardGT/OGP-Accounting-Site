@extends('layouts.simple.master')
@section('title','Our Clients')

@section('breadcrumb-title')
<h2>Our<span> Clients</span></h2>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Company</li>
<li class="breadcrumb-item active">Clients</li>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    @foreach([['Acme Retail','Retail'],['Nusantara Tech','Technology'],['Harapan Foods','FMCG'],['Bumi Logistics','Logistics']] as [$name,$seg])
    <div class="col-md-6 col-xl-3">
      <div class="card">
        <div class="card-body text-center">
          <img class="img-60 mb-3" src="{{route('/')}}/assets/images/user/1.jpg" alt="{{ $name }}">
          <h5 class="mb-1">{{ $name }}</h5>
          <small class="text-muted">{{ $seg }}</small>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
