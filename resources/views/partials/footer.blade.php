<footer class="footer-wrapper footer-layout2" data-bg-src="{{ asset("assets/img/bg/footer-bg-2-1.jpg") }}">
    <div class="footer-top">
        <div class="container">
            <div class="row align-items-center justify-content-between gy-30">
                <div class="col-sm-auto">
                    <div class="footer-top-logo">
                        <a href="index.html"><img src="{{ asset("images/settings/$setting->website_logo_dark") }}" alt="TechBiz" class="logo"></a>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="footer-social">
                        <span class="social-title">Follow Us On:</span>
                        <a href=" {{ $setting->facebook }} "><i class="fab fa-facebook-f"></i></a>
                        <a href=" {{ $setting->twitter }} "><i class="fab fa-twitter"></i></a>
                        <a href=" {{ $setting->instagram }} "><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between gx-80">
                <div class="col-md-6 col-lg-4 col-xl-auto col-xxl order-2 order-lg-1">
                    <div class="widget widget_nav_menu  footer-widget">
                        <h3 class="widget_title">Quick Links</h3>
                        <div class="menu-all-pages-container footer-links">
                            <ul class="menu">
                                <li><a href="{{ route("about") }}">About Us</a></li>
                                <li><a href="{{ route("about") }}">Our Mission</a></li>
                                <li><a href="{{ route("about") }}">Our Vision</a></li>
                                <li><a href="{{ route("contact") }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-auto order-1 order-lg-2">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">About Company</h3>
                        <div class="vs-widget-about">
                            <p class="footer-text">
                                {{ \Illuminate\Support\Str::limit($setting->about, 150, '...') }}
                            </p>
                           
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> {{ Date("Y") }} <a class="text-white"
                    href="index.html">{{ __("Tek-Klinik")}}</a>. All rights reserved by <a class="text-white"
                    href="{{ route("welcome") }}">Tek-Klinik</a>.</p>
        </div>
    </div>
</footer>