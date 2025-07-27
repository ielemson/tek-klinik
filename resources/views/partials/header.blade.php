   
@php
$header_setting = \App\Models\Setting::find(1);
@endphp
 
   <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area top-bar-style-one bg-dark text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-6 col-lg-8 offset-xl-3 pl-30 pl-md-15 pl-xs-15">
                    <ul class="item-flex">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>    {!!  \Illuminate\Support\Str::limit($header_setting->address, 33, '...')  !!}
                        </li>
                        <li>
                            <a href="tel:+{{$header_setting->phone}}"><i class="fas fa-phone-alt"></i>{{$header_setting->phone}}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-4 text-end">
                    <div class="social">
                        <ul>
                            <li>
                                <a href="{{$header_setting->facebook}}">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$header_setting->twitter}}">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$header_setting->instagram}}">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$header_setting->linkedin}}">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav navbar-style-one navbar-sticky navbar-default validnavs white navbar-fixed no-background">

            <div class="container">
                <div class="row align-center">

                    <!-- Start Header Navigation -->
                    <div class="col-xl-2 col-lg-3 col-md-2 col-sm-1 col-1">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="{{route("welcome")}}">
                                <img src="{{asset("images/settings/$header_setting->website_logo_dark")}}" class="logo" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="col-xl-6 offset-xl-1 col-lg-6 col-md-4 col-sm-4 col-4">
                        <div class="collapse navbar-collapse" id="navbar-menu">

                            <img src="{{asset("images/settings/$header_setting->website_logo_dark")}}" alt="Logo">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-times"></i>
                            </button>
                            
                            <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                                {{-- <li class="megamenu-fw megamenu-style-one">
                                    <a href="{{route("welcome")}}" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                                </li> --}}
                                <li class="dropdown megamenu-fw megamenu-style-three">
                                    <a href="{{route("about")}}" class="">About Us</a>
                                    
                                </li>
                                 @if (count($services)>0)
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Our Services</a>
                                    <ul class="dropdown-menu">
                                        @foreach ($services as $service)
                                        <li><a href="{{ route("our.service",$service->slug) }}">{{$service->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endif
                                
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >{{__("Digital Marketing")}}</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Digital Marketing Services</a></li>
                                        <li><a href="#">Web Design and Development</a></li>
                                        <li><a href="#">Digital Packages</a></li>
                                        <li><a href="#">Free Website Audit</a></li>
                                        <li><a href="#">Free Digital Consult</a></li>
                                    </ul>
                                </li>
                              
                                <li><a href="{{route("careers")}}">Careers</a></li>
                                <li><a href="{{route("contact")}}">contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.navbar-collapse -->

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-7 col-7">
                        <div class="attr-right">
                            <!-- Start Atribute Navigation -->
                            <div class="attr-nav">
                                <ul>
                                    <li class="button">
                                        <a href="{{route("book.meeting")}}">Book A Meeting</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Atribute Navigation -->
        
                        </div>
                    </div>

                </div>         
                <!-- Main Nav -->

                <!-- Overlay screen for menu -->
                <div class="overlay-screen"></div>
                <!-- End Overlay screen for menu -->
            </div>   
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->