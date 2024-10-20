@extends("layouts.frontend")
@section("title")
Service :: {{$service->title}}
@endsection
@section("content")

@include("partials.header")
 <!--==============================
    Breadcumb
============================== -->
@include("partials.page-crumb",["title1"=>$service->title,"title2"=>"Our Service"])
 <!--==============================
    Service Area
    ==============================-->
    <section class=" space-top space-extra-bottom">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-8">
                    <div class="mb-3 pb-3"><img src="{{ asset('storage/'.$service->image) }}" alt="{{ $service->title }}"></div>
                    <h2 class="h4">{{ $service->title }}</h2>
                    <p style="text-align: justify">{!! $service->content  !!}</p>
           
                </div>
                <div class="col-lg-4">
                    <aside class="service-sidebar">

                        <div class="widget widget_categories">
                            <h3 class="widget_title">All Services</h3>
                            <ul>
                                @foreach ($services as $side_service)
                                   <li>
                                    <a href="{{ route("our.service",$side_service->slug) }}">{{ $side_service->title }}</a>
                                </li>   
                                @endforeach
                              
                               
                            </ul>
                        </div>
                       
                    </aside>
                </div>
            </div>
        </div>
    </section>
    @endsection