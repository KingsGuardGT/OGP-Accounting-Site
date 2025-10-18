@extends('layouts.app.master')
@section('title', 'Coming Soon BG Image')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
 <!-- Loader ends-->
 <!-- page-wrapper Start-->
   <!-- Page Body Start-->
   <div class="container-fluid p-0 m-0">
     <div class="comingsoon comingsoon-bgimg">
       <div class="comingsoon-inner text-center"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="">
         <h5>WE ARE COMING SOON</h5>
         <div class="countdown" id="clockdiv">
           <ul>
             <li><span class="time digits" id="days"></span><span class="title">days</span></li>
             <li><span class="time digits" id="hours"></span><span class="title">Hours</span></li>
             <li><span class="time digits" id="minutes"></span><span class="title">Minutes</span></li>
             <li><span class="time digits" id="seconds"></span><span class="title">Seconds</span></li>
           </ul>
         </div>
       </div>
     </div>
   </div>
 </div>

 
@endsection

@section('script')
<script src="{{ asset('assets/js/countdown.js')}}"></script>
<script srs="{{ asset('assets/js/theme-customizer/customizer.js')}}"></script>

@endsection