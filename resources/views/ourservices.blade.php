@extends("layouts.frontend")
@section("title")
Service :: Our Services
@endsection
@section("content")

@include("partials.header")
 <!--==============================
    Breadcumb
============================== -->
@include("partials.page_banner",["title"=>"Our Services", "title1"=>"Services"])


  <!-- Start Services 
    ============================================= -->
    <div class="services-style-two-area default-padding bottom-less bg-cover bg-gray" style="background-image: url(assets/img/shape/27.png);">
        <div class="container">
            <div class="row">

                <!-- Single Item -->
                @foreach ($services as $service)
                         <div class="col-xl-4 col-md-6 mb-30">
                    <div class="services-style-two active wow fadeInUp">
                        <div class="thumb">
                            <img src="{{ asset($service->banner) }}" alt="Thumb">
                            <div class="title">
                                <a href="{{ route("our.service",$service->slug)}}">
                                    <div class="icon">
                                        <img src="{{asset("assets/img/icon/7.png")}}" alt="Image Not Found">
                                    </div>
                                    <h4>{{$service->title}}</h4>
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <p>
                                 {!! \Illuminate\Support\Str::limit($service->content, 100, '...') !!}
                            </p>
                            <div class="button">
                                <a href="{{ route("our.service",$service->slug)}}">Read More</a>
                                <div class="devider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Services -->

@endsection