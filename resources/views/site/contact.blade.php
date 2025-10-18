@extends('layouts.simple.master')
@section('title','Contact Us')

@section('breadcrumb-title')
<h2>Contact<span> Us</span></h2>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Company</li>
<li class="breadcrumb-item active">Contact</li>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-6">
      <div class="card">
        <div class="card-header"><h5>Send us a message</h5></div>
        <div class="card-body">
          @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
          @endif
          <form method="POST" action="{{ route('contact.submit') }}">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" class="form-control" required value="{{ old('name') }}">
              @error('name')<small class="text-danger">{{ $message }}</small>@enderror
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" class="form-control" required value="{{ old('email') }}">
              @error('email')<small class="text-danger">{{ $message }}</small>@enderror
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="5" class="form-control" required>{{ old('message') }}</textarea>
              @error('message')<small class="text-danger">{{ $message }}</small>@enderror
            </div>
            <button class="btn btn-primary btn-pill btn-air-primary" type="submit">Send</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card">
        <div class="card-header"><h5>Contact Details</h5></div>
        <div class="card-body">
          <p class="mb-2"><i class="pe-7s-map"></i> Jakarta, Indonesia</p>
          <p class="mb-2"><i class="pe-7s-call"></i> +62 812-3456-7890</p>
          <p class="mb-0"><i class="pe-7s-mail"></i> support@ogung-ganda-persada.com</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
