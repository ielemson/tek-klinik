@extends("layouts.frontend")
@section("title")
	Home
@endsection
@section("content")
@php
    $setting = \App\Models\Setting::find(1);
@endphp
@include("partials.header")
<!--==============================
Hero Area
==============================-->
@include("partials.hero")
<!--==============================
Features Area
==============================-->

<!--==============================
About Us
==============================-->
@include("partials.about-us-section")
<!--==============================
About Features
==============================-->
{{-- @include("partials.service-section") --}}
  <!--==============================
    CTA Area
    ==============================-->
    <section class="z-index-common space wow fadeInUp" data-wow-delay="0.2s" data-bg-src="{{ asset("assets/img/bg/cta-bg-1-2.png") }}">
        <div class="container">
            <div class="row text-center text-lg-start align-items-center justify-content-between">
                <div class="col-lg-auto">
					<h2 class="h1 sec-title cta-title1">Need a Consultation?</h2>
				
                    <span class="sec-subtitle text-white">We are Available 24/7 to Answer Your Questions</span>
                    
                </div>
                <div class="col-lg-auto">
                    <a href="{{ route("contact") }}" class="vs-btn">Get Started<i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
<!--==============================
Service Area
==============================-->

@include("partials.why-choose-us")

@if (count($services)>0)
<section class=" space-top space-extra-bottom bg-smoke" data-bg-src="{{ asset("assets/img/bg/sr-bg-2-1.jpg") }}">
	<div class="container  wow fadeInUp" data-wow-delay="0.2s">
		<div class="row justify-content-center text-center">
			<div class="col-xl-6">
				<div class="title-area">
					<span class="sec-subtitle">WHAT WE’RE OFFERING</span>
					<h2 class="sec-title3 h1">Available Services</h2>
				</div>
			</div>
		</div>
		<div class="row">
			@php
				$num = 1;
			@endphp
			@foreach ($services as $service)
			<div class="col-lg-6">
				<div class="service-style2">
					<div class="service-img">
						<span class="service-number">0{{ $num++ }}</span>
						<img src="{{ asset('storage/'.$service->image) }}" alt="image">
					</div>
					<div class="service-content">
						<div class="service-shape" data-bg-src="{{ asset("assets/img/shape/sr-bg-shape-2-1.png") }}"></div>
						<h3 class="service-title h5"><a href="{{ route("our.service",$service->slug) }}">{{ $service->title }}</a></h3>
						<p class="service-text" style="text-align: justify">
							{{ \Illuminate\Support\Str::limit($service->content, 100, '...') }}  
						</p>
						<a href="{{ route("our.service",$service->slug) }}" class="link-btn">Read Details<i
								class="far fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endif

@include("partials.mission-vision-section")
@endsection