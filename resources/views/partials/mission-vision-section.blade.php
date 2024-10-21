 <!--==============================
    FAQ Area
    ==============================-->
    @php
    $setting = \App\Models\Setting::find(1);
@endphp
 
    <section class="faq-wrap1 mb-4">
        <div class="faq-shape1" data-bg-src="{{ asset("assets/img/bg/faq-bg-1-1.jpg") }}"></div>
        <div class="faq-shape2" data-bg-src="{{ asset("assets/img/bg/faq-bg-1-2.jpg") }}"></div>
        <div class="container">
            <div class="row gx-60">
                <div class="col-lg-6 pb-20 pb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="img-box2">
                        <div class="img-1"><img src="{{ asset("assets/img/faq/our-mission-vision.jpg") }}" alt="FAQ image"></div>
                        {{-- <div class="img-2"><img src="{{ asset("assets/img/faq/faq-1-2.jpg") }}" alt="FAQ image"></div> --}}
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <span class="sec-subtitle text-white"><i class="fas fa-bring-forward"></i>
                    Why Tek-Klinik?
                    </span>
                    <h2 class="sec-title text-white mb-4 pb-2 h1"> Our vision & Mission</h2>
                    <div class="accordion accordion-style1" id="faqVersion1">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Our Vision
                                </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p style="text-align: justify"> 
                                    {!! $setting->our_vision !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Our Mission
                                </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p style="text-align: justify"> 
                                        {!! $setting->our_mission !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>