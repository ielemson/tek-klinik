
@php
    $setting = \App\Models\Setting::find(1);
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$setting->meta_description}}">
    <link rel="apple-touch-icon" href="{{ asset("images/settings/$setting->website_favicon") }}">
    <link rel="icon" type="image/png" href="{{ asset("images/settings/$setting->website_favicon") }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset("images/settings/$setting->website_favicon") }}">
     <meta name="author" content="tek-klinik">
    <meta name="robots" content="INDEX,FOLLOW">
       <!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ========== Page Title ========== -->
    <title>@yield('title')|{{ $setting->website_title }}</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset("images/settings/$setting->website_favicon") }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{asset("assets/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/font-awesome.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/themify-icons.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/elegant-icons.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/flaticon-set.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/magnific-popup.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/swiper-bundle.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/animate.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/validnavs.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/helper.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/unit-test.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/style.css")}}" rel="stylesheet">
    <link href="{{asset("style.css")}}" rel="stylesheet">
    @stack("styles")
    <!-- ========== End Stylesheet ========== -->

</head>

<body>

    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Start Preloader 
    ============================================= -->
    {{-- <div id="preloader">
        <div class="tranzi-loader-inner">
           <div class="tranzi-loader">
              <span class="tranzi-loader-item"></span>
              <span class="tranzi-loader-item"></span>
              <span class="tranzi-loader-item"></span>
              <span class="tranzi-loader-item"></span>
              <span class="tranzi-loader-item"></span>
              <span class="tranzi-loader-item"></span>
              <span class="tranzi-loader-item"></span>
              <span class="tranzi-loader-item"></span>
           </div>
        </div>
     </div> --}}
    <!-- preloader end -->

     @yield("content")

    <!-- Start Footer 
    ============================================= -->
    @include("partials.footer")
    <!-- End Footer -->
    
    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{asset("assets/js/jquery-3.7.1.min.js")}}"></script>
    <script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("assets/js/jquery.appear.js")}}"></script>
    <script src="{{asset("assets/js/jquery.easing.min.js")}}"></script>
    <script src="{{asset("assets/js/jquery.magnific-popup.min.js")}}"></script>
    <script src="{{asset("assets/js/swiper-bundle.min.js")}}"></script>
    <script src="{{asset("assets/js/wow.min.js")}}"></script>
    <script src="{{asset("assets/js/progress-bar.min.js")}}"></script>
    <script src="{{asset("assets/js/circle-progress.js")}}"></script>
    <script src="{{asset("assets/js/isotope.pkgd.min.js")}}"></script>
    <script src="{{asset("assets/js/imagesloaded.pkgd.min.js")}}"></script>
    <script src="{{asset("assets/js/count-to.js")}}"></script>
    <script src="{{asset("assets/js/YTPlayer.min.js")}}"></script>
    <script src="{{asset("assets/js/validnavs.js")}}"></script>
    <script src="{{asset("assets/js/gsap.js")}}"></script>
    <script src="{{asset("assets/js/ScrollTrigger.min.js")}}"></script>
    <script src="{{asset("assets/js/SplitText.min.js")}}"></script>
    <script src="{{asset("assets/js/main.js")}}"></script>
    @stack("scripts")

</body>
</html>