@extends("layouts.frontend")
@section("title")
	About Us
@endsection
@section("content")
@php
    $setting = \App\Models\Setting::find(1);
@endphp
@include("partials.header")
 <!--==============================
    Breadcumb
============================== -->
@include("partials.page-crumb",["title1"=>"About Us","title2"=>"About Us"])

  <!--==============================
    About Us
    ==============================-->
    <section data-bg-src="">
        <div class="container container-style1">
            <div class="row flex-row-reverse align-items-center gx-70">
                <div class="col-lg-6 col-xl">
                    <img src="{{ asset("assets/img/about/connect.jpg") }}" alt="about image">
                </div>
                <div class="col-lg-6 col-xl-auto  wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-box2">
                        <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>About Tek-Klinik</span>
                        <h2 class="sec-title3 h1">About Us</h2>
                        <p style="text-align: justify">{{ $setting->about }}</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection