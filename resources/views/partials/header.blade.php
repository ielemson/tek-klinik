{{-- <header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ url("/") }}" class="logo">
                        <img src="assets/images/logo-blue.png" alt="Turing"/>
                    </a>
                    <!-- ***** Logo End ***** -->

                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ url("/") }}">Home</a></li>
                        <li class="">
                            <a href="{{ route("about") }}">About Us</a>
                            
                        </li>
                        <li class="">
                            <a href="javascript:;">Our Services</a>
                           
                        </li>
                        <li><a href="{{ route("contact") }}">Contact Us</a></li>
                    </ul>
                    <a class="menu-trigger">
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->

                    <!-- ***** Header Buttons Start ***** -->
                    <ul class="header-buttons">
                        <li><a class="btn-nav-line" href="javascript:;">Apps</a></li>
                        <li><a class="btn-nav-primary" href="{{ route("contact") }}">Support</a></li>
                    </ul>
                    <!-- ***** Header Buttons End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header> --}}
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
			<a href="index.html"><img src="assets/img/logo.png" alt="TechBiz" class="logo"></a>
		</div>
		<div class="vs-mobile-menu">
			<ul>
				<li class="">
					<a href="{{ url("/") }}">Home</a>
					
				</li>
				<li>
					<a href="about.html">About Us</a>
				</li>
				<li class="menu-item-has-children">
					<a href="blog.html">Blog</a>
					<ul class="sub-menu">
						<li><a href="blog.html">Blog List</a></li>
						<li><a href="blog-grid.html">Blog Grid</a></li>
						<li><a href="blog-details.html">Blog Details</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children">
					<a href="#none">Pages</a>
					<ul class="sub-menu">
						<li><a href="price-plan.html">Pricing Plans</a></li>
						<li><a href="project.html">Projects</a></li>
						<li><a href="project-details.html">Projects Details</a></li>
						<li><a href="service.html">Service</a></li>
						<li><a href="service-details.html">Service Details</a></li>
						<li><a href="team.html">Team</a></li>
						<li><a href="team-details.html">Team Details</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children">
					<a href="#none"><span class="has-new-lable">Elements<span
								class="new-label">new</span></span></a>
					<ul class="sub-menu">
						<li><a href="element-typography.html">Typography</a></li>
						<li><a href="element-buttons.html">Buttons</a></li>
						<li><a href="element-columns.html">Columns</a></li>
						<li><a href="element-messagebox.html">Message Box</a></li>
						<li><a href="element-separators.html">Separators</a></li>
						<li><a href="element-services.html">Services Card</a></li>
						<li><a href="element-testimonials.html">Testimonials</a></li>
						<li><a href="element-projectbox.html">Project Box</a></li>
						<li><a href="element-priceplan.html">Price Plan</a></li>
						<li><a href="element-counters.html">Counters</a></li>
						<li><a href="element-accordions.html">Accordions</a></li>
						<li><a href="element-team.html">Team</a></li>
						<li><a href="element-process.html">Process</a></li>
						<li><a href="element-blogcard.html">Blog Card</a></li>
						<li><a href="element-ctas.html">Call To Actions</a></li>
						<li><a href="element-map.html">Google Map</a></li>
					</ul>
				</li>
				<li>
					<a href="contact.html">Contact Us</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!--==============================
Sidemenu
============================== -->
<div class="sidemenu-wrapper d-none d-lg-block  ">
	<div class="sidemenu-content">
		<button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
		<div class="widget  ">
			<div class="vs-widget-about">
				<div class="footer-logo">
					<a href="index.html"><img src="assets/img/logo.png" alt="TechBiz" class="logo"></a>
				</div>
				<p class="footer-text">Intrinsicly evisculate emerging cutting edge scenarios redefine future-proof
					e-markets demand line</p>
				<div class="footer-social">
					<a href=" {{ $setting->facebook }} "><i class="fab fa-facebook-f"></i></a>
					<a href=" {{ $setting->twitter }} "><i class="fab fa-twitter"></i></a>
					<a href=" {{ $setting->instagram }} "><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</div>
	
		<div class="widget  ">
			<h3 class="widget_title">Office Maps</h3>
			<div class="footer-map">
				<iframe title="office location map"
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d163720.11965853968!2d8.496481908353967!3d50.121347879150306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bd096f477096c5%3A0x422435029b0c600!2sFrankfurt%2C%20Germany!5e0!3m2!1sen!2sbd!4v1651732317319!5m2!1sen!2sbd"
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
							<li><i class="far fa-phone-alt"></i><a href="tel:{{ $setting->phone }} "> {{ $setting->phone }} 8</a></li>
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
								<a href="{{ url("/") }}"><img src="assets/img/logo-white.png" alt="TechBiz"
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
									<li class="menu-item-has-children">
										<a href="service.html">Our Services</a>
										<ul class="sub-menu">
											<li><a href="service.html">Service</a></li>
											<li><a href="service-details.html">Service Details</a></li>
										</ul>
									</li>
								
									<li>
										<a href="{{ route("contact") }}">Contact Us</a>
									</li>
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