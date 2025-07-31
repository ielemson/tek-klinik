{{-- <footer class="bg-dark text-light bg-cover" style="background-image: url({{asset("assets/img/shape/banner-8.jpg")}});">
        <div class="footer-shape">
            <div class="item">
                <img src="{{asset("assets/img/shape/7.png")}}" alt="Shape">
            </div>
            <div class="item">
                <img src="{{asset("assets/img/shape/9.png")}}" alt="Shape">
            </div>
        </div>
        <div class="container">
            <div class="f-items relative pt-70 pb-120 pt-xs-0 pb-xs-50">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-item pr-50 pr-xs-15">
                        <div class="f-item about">
                            <img class="logo" src="{{asset("images/settings/$setting->website_logo_white")}}" alt="Logo">
                            <p>
                                Excellence decisively nay man twins impression maximum contrasted remarkably is perfect.
                            </p>
                            <div class="opening-hours">
                                <h5>Opening Hours</h5>
                                <ul>
                                    <li> 
                                        <div class="working-day">Monday – Sunday:</div>
                                        <div class="marker"></div>
                                        <div class="working-hour">2pm – 2pm</div>
                                    </li>
                                    <li>
                                        <div class="working-day">Sunday:</div>
                                        <div class="marker"></div>
                                        <div class="working-hour">Off Day</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-item">
                        <div class="f-item link">
                            <h4 class="widget-title">Our Company</h4>
                            <ul>
                                <li>
                                    <a href="{{route("about")}}">Compnay Profile</a>
                                </li>
                                <li>
                                    <a href="#">Help Center</a>
                                </li>
                                <li>
                                    <a href="#">Career</a>
                                </li>
                                <li>
                                    <a href="#">Plans & Pricing</a>
                                </li>
                                <li>
                                    <a href="{{route("contact")}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                     @if (count($services)>0)
                    <div class="col-lg-2 col-md-6 footer-item">
                        <div class="f-item link">
                            <h4 class="widget-title">Our Services</h4>
                            <ul>
                                   @foreach ($services as $service)
                                <li>
                                    <a href="">{{$service->title}}</a>
                                </li>
                                 @endforeach
                               
                            </ul>
                        </div>
                    </div>
                    @endif
                    <div class="col-lg-4 col-md-6 footer-item">
                        <h4 class="widget-title">Newsletter</h4>
                        <p>
                            Join our subscribers list to get the latest <br> news and special offers.
                        </p>
                        <div class="f-item newsletter">
                            <form action="#">
                                <input type="email" placeholder="Your Email" class="form-control" name="email">
                                <button type="submit">
                                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 17L17 1H7.8" stroke="#232323" stroke-width="2"></path>
                                    </svg>
                                </button>  
                            </form>
                        </div>
                        <ul class="footer-social">
                            <li>
                                <a href="{{$setting->facebook}}">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$setting->twitter}}">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$setting->instagram}}">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$setting->linkedin}}">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2025. All Rights Reserved by <a href="#">validthemes</a></p>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer> --}}


     <footer class="bg-dark footer-style-two text-light bg-cover" style="background-image: url(assets/img/shape/banner-8.jpg);">
        <div class="container">
            <div class="f-items relative pt-70 pb-120 pt-xs-0 pb-xs-50">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-item pr-50 pr-xs-15">
                        <div class="f-item about">
                            <img class="logo" src="{{asset("images/settings/$setting->website_logo_white")}}" alt="Logo">
                            <p>
                              {!!  \Illuminate\Support\Str::limit($setting->about, 300, '...')  !!}
                            </p>
                            <ul class="footer-social">
                                <li>
                                    <a href="{{$setting->facebook}}">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$setting->twitter}}">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$setting->instagram}}">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$setting->linkedin}}">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-item">
                        <div class="f-item link">
                            <h4 class="widget-title">Our Company</h4>
                            <ul>
                                <li>
                                    <a href="{{route("about")}}">Company Profile</a>
                                </li>
                                <li>
                                    <a href="{{route("contact")}}">Help Center</a>
                                </li>
                                
                                </li>
                                <li>
                                    <a href="{{route("contact")}}">Contact</a>
                                </li>
                                <li>
                                    <a href="{{route("book.meeting")}}">Book A Meeting</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-item">
                        <div class="f-item link">
                            <h4 class="widget-title">Our Services</h4>
                            @if (count($services) > 0)
                                <ul>
                               @foreach ($services as $service)
                                    <li>
                                    <a href="{{ route("our.service",$service->slug)}}">{{$service->title}}</a>
                                </li>
                               @endforeach
                            </ul>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-item">
                        <div class="f-item contact">
                            <h4 class="widget-title">Get in touch</h4>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>
                                       {{$setting->address}}
                                    </p>
                                </li>
                                <li>
                                    <i class="fas fa-phone-alt"></i>
                                    <p>
                                        {{$setting->phone}}
                                    </p>
                                </li>
                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <p>
                                        {{$setting->email}}
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright {{Date("Y")}}. All Rights Reserved by <a href="#">Tek-Klinik</a></p>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->

    </footer>