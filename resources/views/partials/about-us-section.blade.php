
<section class=" space" data-bg-src="{{ asset("assets/img/bg/ab-bg-2-1.jpg") }}" id="aboutv2">
	<div class="container">
		<div class="row gx-60">
			<div class=" col-xl-6 mb-50 mb-xl-0  wow fadeInUp" data-wow-delay="0.2s">
				<div class="img-box3">
					<div class="img-1"><img src="{{ asset("assets/img/about/about-us.jpg") }}" alt="About image"></div>
					
				</div>
			</div>
			<div class=" col-xl-6 align-self-center text-center text-xl-start">
				<span class="sec-subtitle"><i class="fas fa-bring-forward"></i>ABOUT US</span>
				<h2 class="sec-title3 h1">About Tek-klinik</h2>
				<p class="mb-4 pb-2 pe-xl-5" style="text-align:justify">
                    {{ \Illuminate\Support\Str::limit($setting->about, 500, '...') }}
                </p>
				
				<a href="{{ route("about") }}" class="vs-btn">Read More<i class="far fa-arrow-right"></i></a>
			</div>
		</div>
	</div>
</section>