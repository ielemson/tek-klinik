@extends('layouts.frontend')
@section('title')
    Page No Found
@endsection
@section('content')
    @php
        $setting = \App\Models\Setting::find(1);
    @endphp
    @include('partials.header')

    @include('partials.page_banner', ['title' => 'Error Page', 'title1' => '404'])
   

      <!-- Start 404 
    ============================================= -->
    <div class="error-page-area default-padding text-center bg-cover">
        <!-- Shape -->
        <div class="shape-left" style="background: url(assets/img/shape/44-left.png);"></div>
        <div class="shape-right" style="background: url(assets/img/shape/44-right.png);"></div>
        <!-- End Shape -->
        <div class="container">
            <div class="error-box">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1>404</h1>
                        <h2>Sorry Page Was Not Found!</h2>
                        <p>
                            Household shameless incommode at no objection behaviour. Especially do at he possession insensible sympathize boisterous it. Songs he on an widen me event truth.
                        </p>
                        <a class="btn mt-20 btn-md btn-theme" href="{{url("/")}}">Back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End 404 -->

@endsection
