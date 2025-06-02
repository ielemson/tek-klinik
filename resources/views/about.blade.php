@extends('layouts.frontend')
@section('title')
    About Us
@endsection
@section('content')
    @php
        $setting = \App\Models\Setting::find(1);
    @endphp
    @include('partials.header')

    @include('partials.page_banner', ['title' => 'About Us', 'title1' => 'About Us'])
    <!-- Start About
    ============================================= -->
    <div class="about-style-one-area default-padding">
     
        <div class="container">
            <div class="row align-center">
                <div class="about-style-one col-xl-5 col-lg-6">
                    <div class="about-thumb">
                        <img class="wow fadeInRight" src="{{ asset('assets/img/about/1.jpg') }}" alt="Image Not Found">
                        {{-- <div class="thumb-shape-bottom wow fadeInDown" data-wow-delay="300ms">
                            <img src="{{ asset('assets/img/illustration/4.png') }}" alt="Image Not Found">
                        </div> --}}
                    </div>
                </div>
                <div class="about-style-one col-xl-6 col-lg-5  offset-xl-1 offset-lg-1">
                    <h4 class="sub-title">About Tek-Klinik</h4>
                    <h2 class="title split-text mb-25">Your Trusted Technology Partner</h2>
                    <div class="wow fadeInUp" data-wow-delay="200ms">
                        <p>
                            {!! $setting->about !!}
                        </p>
                    </div>
                </div>  <div class="process-style-two-area default-padding_1  bg-dark text-light">
                <div class="shape">
                    {{-- <img src="assets/img/shape/46.png" alt="Image Not Found"> --}}
                </div>
                <div class="container">
                    <div class="left-heading">
                        <div class="row">
                            <div class="col-lg-4">
                                <h4 class="sub-title">Our Focus</h4>
                                <h2 class="">Proactive and Client-Centric Technical Support</h2>
                            </div>
                            <div class="col-lg-6 offset-lg-2">
                                <p style="text-align: justify" class="mt-4">
                                    Our core mission is to deliver exceptional technical support that goes beyond simply
                                    resolving immediate issues. We focus on understanding your unique IT environment and
                                    challenges to provide proactive solutions that minimize downtime and maximize
                                    efficiency. Our client-centric approach means we prioritize clear communication, prompt
                                    response times, and tailored support that meets your specific needs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @include("partials.faq")

            @include("partials.empowering")
            </div>
        </div>
    </div>
    <!-- End About -->
@endsection
