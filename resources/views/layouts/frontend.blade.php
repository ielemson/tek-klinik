
<!doctype html>
<html class="no-js" lang="en">
@php
    $setting = \App\Models\Setting::find(1);
@endphp
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta property="og:site_name" content="{{ $setting->website_title }}">
    <meta property="og:title" content="{{ $setting->website_title }}">
    <title>@yield('title') :: {{ $setting->website_title }} </title>
    <meta property="og:type" content="tek-klinik">
    <meta property="og:url" content="https://tek-klinik.com/">
    <meta name="author" content="tek-klinik">
    <meta name="robots" content="INDEX,FOLLOW">
       <!-- CSRF Token -->
	   <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{ asset("images/settings/$setting->website_favicon") }}">
    <link rel="icon" type="image/png" href="{{ asset("images/settings/$setting->website_favicon") }}">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset("images/settings/$setting->website_favicon") }}">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600;700&family=Fira+Sans:wght@400;500&display=swap"
        rel="stylesheet">
    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset("assets/css/fontawesome.min.css") }}">
    <!-- Layerslider -->
    <link rel="stylesheet" href="{{ asset("assets/css/layerslider.min.css") }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset("assets/css/magnific-popup.min.css") }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset("assets/css/slick.min.css") }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
        @yield("styles")
</head>

<body>
<!--==============================
     Preloader
==============================-->
    <div class="preloader">
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>
 @yield("content")
    <!--==============================
			Footer Area
	==============================-->
  @include("partials.footer")

    <!-- Scroll To Top -->
    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>

    <!--********************************
			Code End  Here 
	******************************** -->

    <!--==============================
        All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{ asset("assets/js/vendor/jquery-3.6.0.min.js") }}"></script>
    <!-- Slick Slider -->
    <!-- <script src="assets/js/app.min.js"></script> -->
    <script src="{{ asset("assets/js/slick.min.js") }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
    <!-- WOW.js Animation -->
    <script src="{{ asset("assets/js/wow.min.js") }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset("assets/js/jquery.magnific-popup.min.js") }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset("assets/js/imagesloaded.pkgd.min.js") }}"></script>
    <script src="{{ asset("assets/js/isotope.pkgd.min.js") }}"></script>
    <!-- Main Js File -->
    <script src="{{ asset("assets/js/main.js") }}"></script>
    @yield("scripts")
</body>

</html>