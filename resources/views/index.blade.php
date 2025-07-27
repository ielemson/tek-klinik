@extends("layouts.frontend")
@section("title")
	Reliable, Cost-Effective Cybersecurity & IT Support Services
@endsection
@php
    $setting = \App\Models\Setting::find(1);
@endphp

@section("content")

  <!-- Header 
    ============================================= -->
    @include("partials.header")
    <!-- End Header -->

    <!-- Start Banner Area 
    ============================================= -->
    {{-- @if (count($sliders) > 0) --}}
    @include("partials.home_banner")
    {{-- @endif --}}
    <!-- End Main -->

    <!-- Start About 
    ============================================= -->
   @include("partials.our_features")
   @include("partials.about-us-section")
    <!-- End About -->

  <!-- Start Why Choose Us
    ============================================= -->
  @include("partials.why_choose_us")
    <!-- End Why Choose Us -->

    {{-- @if (count($services)>0) --}}
    @include("partials.service-section")
    {{-- @endif --}}

    {{-- @include("partials.home_contact_us") --}}
    @include("partials.vision-and-mission")
    
@endsection