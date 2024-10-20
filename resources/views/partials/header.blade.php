@php
    $setting = \App\Models\Setting::find(1);
@endphp
   <!--==============================
    Mobile Menu
  ============================== -->
  <div class="vs-menu-wrapper">
	<div class="vs-menu-area text-center">
		<button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
		<div class="mobile-logo">
			<a href="{{ route("welcome") }}"><img src="{{ asset("images/settings/$setting->website_logo_dark") }}" alt="tek-klinik" class="logo"></a>
		</div>
		<div class="vs-mobile-menu">
			<ul>
				<li class="">
					<a href="{{ url("/") }}">Home</a>
					
				</li>
				<li>
					<a href="{{ route("about") }}">About Us</a>
				</li>
				
				<li>
					<a href="{{ route("contact") }}">Contact Us</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!--==============================
Sidemenu
============================== -->
<div class="sidemenu-wrapper d-none d-lg-block">
	<div class="sidemenu-content">
		<button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
		<div class="widget  ">
			<div class="vs-widget-about">
				{{-- <div class="footer-logo">
					<a href="index.html"><img src="{{ asset("images/settings/$setting->website_logo_white") }}" alt="tek-klinik" class="logo"></a>
				</div> --}}
				<p class="footer-text">
					{{ \Illuminate\Support\Str::limit($setting->about, 200, '...') }}
				</p>
				<div class="footer-social">
					<a href=" {{ $setting->facebook }} "><i class="fab fa-facebook-f"></i></a>
					<a href=" {{ $setting->twitter }} "><i class="fab fa-twitter"></i></a>
					<a href=" {{ $setting->instagram }} "><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</div>
	
		<div class="widget  ">
			<h3 class="widget_title">Our Addres</h3>
			<div class="footer-map">
				<iframe title="office location map"
					src="{{ $setting->google_map }}"
					width="200" height="180" style="border:0;" allowfullscreen="" loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</div>
<!--==============================
	Header Area
==============================-->
<header class="vs-header header-layout2">
	<div class="header-shape"></div>
	<div class="header-top">
		<div class="container">
			<div class="row align-items-center justify-content-between text-center text-lg-start">
				<div class="col-md-auto text-center text-md-start">
					<div class="header-links">
						<ul>
							<li><i class="far fa-phone-alt"></i><a href="tel:{{ $setting->phone }} "> {{ $setting->phone }} </a></li>
							<li class="d-none d-xxl-inline-block"><i class="far fa-map-marker-alt"></i>
								{{ $setting->address }} 
							</li>
							<li><i class="far fa-envelope"></i><a
									href="mailto: {{ $setting->email }} "> {{ $setting->email }} </a></li>
						</ul>
					</div>
				</div>
				<div class="col-auto d-none d-md-block">
					<div class="header-social">
						<span class="social-title">Follow Us On: </span>
						<a href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a>
						<a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a>
						<a href="{{ $setting->instagram }}"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Main Menu Area -->
	<div class="sticky-wrapper">
		<div class="sticky-active">
			<div class="container">
				<div class="menu-area">
					<div class="row align-items-center justify-content-between">
						<div class="col-auto">
							<div class="logo-style1">
								<a href="{{ url("/") }}"><img src="{{ asset("images/settings/$setting->website_logo_white") }}" alt="tek-klinik"
										class="logo"></a>
							</div>
						</div>
						<div class="col-auto">
							<nav class="main-menu menu-style1 d-none d-lg-block">
								<ul>
									<li class="">
										<a href="{{ url("/") }}"><span class="has-new-lable">Home</a>
										
									</li>
									<li>
										<a href="{{route("about")}}">About Us</a>
									</li>
										@if (count($services)> 0)
										<li class="menu-item-has-children">
											<a href="javascript:;">Service</a>
											<ul class="sub-menu">
											@foreach ($services as $service)
											<li><a href="{{ route("our.service",$service->slug) }}">{{ $service->title }}</a></li>
											@endforeach
											</ul>
										</li>
										@endif
									<li>
										<a href="{{ route("contact") }}">Contact Us</a>
									</li>
									@if(Auth::check())
				{{-- <p>Welcome, {{ Auth::user()->name }}!</p>
				<p>Login time: {{ Auth::user()->created_at->format('Y-m-d H:i:s') }}</p> --}}
				<li>
					<a href="{{ route("home") }}">Dashboard</a>
				</li>
				@else
				{{-- <p>You are not logged in.</p>
				<a href="{{ route('login') }}">Login</a> --}}
				@endif
								</ul>
							</nav>
							<button class="vs-menu-toggle d-inline-block d-lg-none"><i
									class="fal fa-bars"></i></button>
						</div>
						<div class="col-auto d-none d-lg-block">
							<div class="header-btns">
								<a href="#" class="vs-btn d-none d-xxl-inline-block">Contact Us<i
										class="far fa-arrow-right"></i></a>
								<button class="icon-btn style3 sideMenuToggler"><i class="far fa-bars"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>