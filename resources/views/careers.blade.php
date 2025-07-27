@extends('layouts.frontend')
@section('title')
    Careers join our growing team
@endsection
@section('content')
    @php
        $setting = \App\Models\Setting::find(1);
    @endphp
    @include('partials.header')

    @include('partials.page_banner', ['title' => 'Careers', 'title1' => 'Join our growing team'])
    <!-- Start About
    ============================================= -->
    <div class="about-style-one-area default-padding">
     
        <div class="container">
            <div class="row align-center">
                {{-- <div class="about-style-one col-xl-5 col-lg-6">
                    <div class="about-thumb">
                        <img class="wow fadeInRight" src="{{ asset('assets/img/about/1.jpg') }}" alt="Image Not Found">
                   
                    </div>
                </div> --}}
                {{-- <div class="about-style-one col-xl-6 col-lg-5  offset-xl-1 offset-lg-1">
                    <h4 class="sub-title">About Tek-Klinik</h4>
                    <h2 class="title split-text mb-25">Your Trusted Technology Partner</h2>
                    <div class="wow fadeInUp" data-wow-delay="200ms">
                        <p>
                            {!! $setting->about !!}
                        </p>
                    </div>
                </div> 
                  --}}
                <div class="process-style-two-area default-padding_1  bg-dark text-light">
                <div class="shape">
                    {{-- <img src="assets/img/shape/46.png" alt="Image Not Found"> --}}
                </div>
                <div class="container">
                    <div class="left-heading">
                        <div class="row">
                            <div class="col-lg-4">
                                <h4 class="sub-title">Current Opportunities</h4>
                                <h2 class="">Available Positions</h2>
                            </div>
                            <div class="col-lg-6 offset-lg-2">
                                <p style="text-align: justify" class="mt-4">
                                   We're always on the lookout for talented and driven individuals to join our team.
                                    Feel free to submit your resume/CV to <a href="mailto:info@tek-klinik.com">info@tek-klinik.com</a> for future consideration. While we may not have open positions at the moment, 
                                    any available roles will be posted here, and we’ll get in touch if your profile matches an upcoming opportunity.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{-- @include("partials.faq") --}}

            {{-- @include("partials.empowering") --}}
            </div>
        </div>
    </div>
    <!-- End About -->
@endsection
