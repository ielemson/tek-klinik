@extends("layouts.frontend")
@section("title")
	Home
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
    @if (count($sliders) > 0)
    @include("partials.home_banner")
    @endif
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
 @if (count($services)>0)
    <!-- Start Servics Style One 
    ============================================= -->
    <div class="services-style-one-area default-padding bg-gray bg-cover" style="background-image: url(assets/img/shape/banner.jpg);">
        <div class="center-shape" style="background-image: url({{asset("assets/img/shape/5.png")}});"></div>
        <div class="service-style-one-items">
            <div class="container">

                <div class="row align-center">
                     <!-- Single Item -->
                     <div class="col-lg-8 mb-30 mb-xs-50 mb-md-50">
                        <h4 class="sub-title">Our Services</h4>
                        <h2 class="title split-text">Customized IT Services That Work for You</h2>
                        <a class="btn btn-theme btn-md radius animation wow fadeInUp" href="{{route("our.services")}}">View all services</a>
                    </div>
                    <!-- Single Item -->
                </div>

                <div class="row align-center">
                    @foreach ($services as $service)
                     <div class="col-xl-4 col-md-6 mb-30">
                    <div class="services-style-two active wow fadeInUp">
                        <div class="thumb">
                            <img src="{{ asset($service->banner) }}">
                            <div class="title">
                                <a href="{{ route("our.service",$service->slug)}}">
                                    <div class="icon">
                                        <img src="{{("assets/img/icon/7.png")}}" alt="Image Not Found">
                                    </div>
                                    <h4>{{ $service->title }}</h4>
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <p>
                            {!! \Illuminate\Support\Str::limit($service->content, 100, '...') !!}
                            </p>
                            <div class="button">
                                <a href="{{ route("our.service",$service->slug) }}">Read More</a>
                                <div class="devider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>

            </div>
        </div>
        
    </div>
    <!-- End Services Style One -->
    @endif

    {{-- @include("partials.home_contact_us") --}}
    @include("partials.vision-and-mission")
    
@endsection