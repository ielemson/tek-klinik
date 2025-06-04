<div class="banner-area banner-style-one shadow zoom-effect overflow-hidden text-light">
        <!-- Slider main container -->
        <div class="banner-fade">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <!-- Single Item -->
               @foreach ($sliders as $slider)
                    <div class="swiper-slide banner-style-one">
                    <div class="banner-thumb bg-cover shadow theme" style="background: url({{ asset($slider->image) }});"></div>
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-xl-8 offset-xl-4">
                                <div class="content">
                                    <h4>{{$slider->first_header}}</h4>
                                    <h2>{{$slider->second_header}}</h2>
                                    <div class="button mt-40">
                                        <a class="btn btn-theme btn-md radius animation" href="{{route("contact")}}">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shape -->
                    <div class="banner-shape-bg">
                        <img src="{{asset("assets/img/shape/1.png")}}" alt="Shape">
                    </div>
                    <!-- End Shape -->
                </div>
               @endforeach
                <!-- End Single Item -->

                <!-- Single Item -->
                {{-- <div class="swiper-slide banner-style-one">
                    <div class="banner-thumb bg-cover shadow theme" style="background: url(assets/img/banner/2.jpg);"></div>
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-xl-8 offset-xl-4">
                                <div class="content">
                                    <h4>Best Value Solutions</h4>
                                    <h2>Seamless Technology for IT business</h2>
                                    <div class="button mt-40">
                                        <a class="btn btn-theme btn-md radius animation" href="about-us.html">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shape -->
                    <div class="banner-shape-bg">
                        <img src="assets/img/shape/1.png" alt="Shape">
                    </div>
                    <!-- End Shape -->
                </div> --}}
                <!-- End Single Item -->

            </div>

            <!-- Navigation -->
            <div class="swiper-button-prev">
                <i class="fas fa-angle-left"></i>
            </div>
            <div class="swiper-button-next">
                <i class="fas fa-angle-right"></i>
            </div>

        </div>  
    </div>