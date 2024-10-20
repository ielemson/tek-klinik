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
{{-- <section class="z-index-common  space-top" data-sec-pos="bottom" data-pos-amount="30px" data-pos-for="#aboutv2">
	<div class="container  wow fadeInUp" data-wow-delay="0.2s">
		<div class="row justify-content-center">
			<div class="col-md-8 col-lg-6 col-xxl-3 text-center text-xxl-start">
				<div class="title-area">
					<span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Why Choose Us</span>
					<h2 class="sec-title3 h1">Why People Choose Our Services</h2>
				</div>
			</div>
			<div class="col-xxl-9">
				<div class="row vs-carousel feature-slide2 text-center text-xxl-start" data-slide-show="3"
					data-md-slide-show="2">
					<div class="col-xl-4">
						<div class="feature-style2">
							<div class="feature-icon"><img src="assets/img/icon/fe-2-2.png" alt="Features"></div>
							<h3 class="feature-title h5"><a class="text-inherit" href="service-details.html">IT
									Solution</a></h3>
							<p class="feature-text">Seize magnetic before visa alignment network wireless whereas
								frictionless</p>
							<a href="service-details.html" class="link-btn">Read Details<i
									class="far fa-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="feature-style2">
							<div class="feature-icon"><img src="assets/img/icon/fe-2-1.png" alt="Features"></div>
							<h3 class="feature-title h5"><a class="text-inherit" href="service-details.html">IT
									Consultant</a></h3>
							<p class="feature-text">Seize magnetic before visa alignment network wireless whereas
								frictionless</p>
							<a href="service-details.html" class="link-btn">Read Details<i
									class="far fa-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="feature-style2">
							<div class="feature-icon"><img src="assets/img/icon/fe-2-3.png" alt="Features"></div>
							<h3 class="feature-title h5"><a class="text-inherit" href="service-details.html">Cyber
									Security</a></h3>
							<p class="feature-text">Seize magnetic before visa alignment network wireless whereas
								frictionless</p>
							<a href="service-details.html" class="link-btn">Read Details<i
									class="far fa-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="feature-style2">
							<div class="feature-icon"><img src="assets/img/icon/fe-2-4.png" alt="Features"></div>
							<h3 class="feature-title h5"><a class="text-inherit" href="service-details.html">App
									Development</a></h3>
							<p class="feature-text">Seize magnetic before visa alignment network wireless whereas
								frictionless</p>
							<a href="service-details.html" class="link-btn">Read Details<i
									class="far fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}
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
    <section class="z-index-common space" data-bg-src="{{ asset("assets/img/bg/cta-bg-1-2.png") }}">
        <div class="container">
            <div class="row text-center text-lg-start align-items-center justify-content-between">
                <div class="col-lg-auto">
                    <span class="sec-subtitle text-white">We are here to answer your questions 24/7</span>
                    <h2 class="h1 sec-title cta-title1">Need A Consultation?</h2>
                </div>
                <div class="col-lg-auto">
                    <a href="{{ route("contact") }}" class="vs-btn">Get in touch<i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
<!--==============================
Service Area
==============================-->
@if (count($services)>0)
<section class=" space-top space-extra-bottom bg-smoke" data-bg-src="assets/img/bg/sr-bg-2-1.jpg">
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
						<div class="service-shape" data-bg-src="assets/img/shape/sr-bg-shape-2-1.png"></div>
						<h3 class="service-title h5"><a href="service-details.html">Digital Marketing</a></h3>
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