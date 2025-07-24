 <div class="about-style-one-area default-padding">    
        <div class="container">
            <div class="row align-center">
                <div class="about-style-one col-xl-5 col-lg-6">
                    <div class="about-thumb">
                        <img class="wow fadeInRight" src="assets/img/about/1.jpg" alt="Image Not Found" style="visibility: visible; animation-name: fadeInRight;">
                        <div class="about-card wow fadeInUp" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-license"></i>
                                    </div>
                                    <div class="fun-fact">
                                        
                                        <span class="medium">Certified IT Solution Provider</span>
                                    </div>
                                </li>
                               
                            </ul>
                        </div>
                        {{-- <div class="thumb-shape-bottom wow fadeInDown" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInDown;">
                            <img src="assets/img/illustration/4.png" alt="Image Not Found">
                        </div> --}}
                    </div>
                </div>
                <div class="about-style-one col-xl-6 col-lg-5  offset-xl-1 offset-lg-1">
                    <h4 class="sub-title">About Our Tek-Klinik</h4>
                    <h2 class="title split-text mb-25" style=""><div class="line" style="display: block; text-align: start; position: relative;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">Discover</div> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">Innovative</div> </div><div class="line" style="display: block; text-align: start; position: relative;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">Solutions</div> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">&amp;</div> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">Technology</div></div></h2>
                    <div class="wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                        <p>
                           {!!  \Illuminate\Support\Str::limit($setting->about, 500, '...')  !!}
                        </p>
                        <div class="btn mt-25 btn-sm btn-theme animation">
                                <a href="{{route("about")}}">Read More</a>
                                <div class="devider"></div>
                        </div> 
                        <div class="accordion mt-30" id="faqAccordion">
                            <div class="accordion-single">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                       Our Focus
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <h4>Proactive and Client-Centric Technical Support </h4>
                                      <p style="text-align: justify">
                                            
                                             Our core mission is to deliver exceptional technical support that goes beyond simply resolving immediate issues. We focus on understanding your unique IT environment and challenges to provide proactive solutions that minimize downtime and maximize efficiency. Our client-centric approach means we prioritize clear communication, prompt response times, and tailored support that meets your specific needs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   @include("partials.cloud_solutions")