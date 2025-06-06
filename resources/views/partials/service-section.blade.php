<!-- Start Services 
    ============================================= -->
    <div class="services-style-two-area default-padding_2 bottom-less bg-cover bg-gray" style="background-image: url({{asset("assets/img/shape/27.png")}});">
        <div class="container">
            <div class="row">
				 @foreach ($services as $service)
                <!-- Single Item -->
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="services-style-two active wow fadeInUp">
                        <div class="thumb">
                            <img src="{{ asset($service->banner) }}" alt="Thumb">
                            <div class="title">
                                <a href="{{ route("our.service",$service->slug)}}">
                                    <div class="icon">
                                        <img src="{{asset("assets/img/icon/7.png")}}" alt="{{ $service->title }}">
                                    </div>
                                    <h4>{{ $service->title }}</h4>
                                </a>
                            </div>
                        </div>
                        <div class="info">
                             {!! \Illuminate\Support\Str::limit($service->excerpt, 100, '...') !!}
                            <div class="button">
                                <a href="{{ route("our.service",$service->slug)}}">Read More</a>
                                <div class="devider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
				@endforeach

            </div>
        </div>
    </div>
    <!-- End Services -->