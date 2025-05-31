@php
    $setting = \App\Models\Setting::find(1);
@endphp

@extends("layouts.frontend")
@section("title")
Service :: {{$service->title}}
@endsection
@section("content")

@include("partials.header")
 <!--==============================
    Breadcumb
============================== -->
@include("partials.page_banner",["title"=>$service->title, "title1"=>"Our Service"])


 <!--==============================
    Service Area
    ==============================-->
   
     <!-- Star Services Details Area
    ============================================= -->
    <div class="services-details-area overflow-hidden default-padding">
        <div class="container">
            <div class="services-details-items">
                <div class="row">
                    
                    <div class="col-xl-8 col-lg-7 order-lg-last pl-50 pl-md-15 pl-xs-15">
                        <div class="thumb">
                            <img src="{{ asset('storage/'.$service->banner) }}" alt="Thumb">
                        </div>
                        <h2>{{$service->title}}</h2>
                        <p>
                        {!! $service->content  !!}
                        </p>
                        
                   
                    </div>

                    <div class="col-xl-4 col-lg-5 mt-md-120 mt-xs-50 services-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget services-list-widget">
                            <h4 class="widget-title">Techincal Services</h4>
                            <div class="content">
                                <ul>
                                     @foreach ($services as $side_service) 
                                     <li><a href="{{ route("our.service",$side_service->slug) }}">{{ $side_service->title }}</a></li>
                                     @endforeach
                                   
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                        <div class="single-widget bg-dark quick-contact-widget text-light" style="background-image: url(assets/img/shape/15.png);">
                            <div class="content">
                                <h3>Need Help?</h3>
                                <p>
                                call our corporate office or fill out the form, and a team member will assist you promptly.
                                </p>
                                <h2>{{$setting->phone}}</h2>
                                <h4><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></h4>
                                <a class="btn mt-30 circle btn-sm btn-gradient" href="{{route("contact")}}">Contact Us</a>
                            </div>
                        </div>
                   
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Services Details Area -->
    @endsection