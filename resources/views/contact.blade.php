@extends("layouts.frontend")

@section("content")
    <!-- ***** Header Area Start ***** -->
	@include("partials.page-header")
	<!-- ***** Header Area End ***** -->


	<section class="page">
		<!-- ***** Page Top Start ***** -->
		@include("partials.hero",["title"=>"Contact"])
		<!-- ***** Page Top End ***** -->

		<!-- ***** Page Content Start ***** -->
		<div class="page-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="contact">
							<div class="map-wrapper embed-responsive embed-responsive-4by3">
								<!-- ***** Google Maps Start ***** -->
								<iframe class="responsive-iframe"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63433.912745312664!2d3.394178349556444!3d6.442873646060048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf4523dd42677%3A0x849e078b14d85d7d!2sLekki%20Phase%20I%2C%20Lagos%20106104%2C%20Lagos!5e0!3m2!1sen!2sng!4v1727768352600!5m2!1sen!2sng" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								<!-- ***** Google Maps End ***** -->
							</div>
							<div class="contact-info">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-12">
										<div class="item">
											<i class="fa fa-location-arrow"></i>
											<div class="txt">
												<span>455 West Orchard Street<br>Kings Mountain, NC 28086</span>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12">
										<div class="item">
											<i class="fa fa-phone"></i>
											<div class="txt">
												<span>(272) 211-7370<br>(524) 386-5730</span>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12">
										<div class="item">
											<i class="fa fa-envelope"></i>
											<div class="txt">
												<span><a href="mailto:info@yourbrand.com">info@yourbrand.com</a></span>
											</div>
										</div>
										<div class="item">
											<i class="fa fa-envelope"></i>
											<div class="txt">
												<span><a href="mailto:support@yourbrand.com">support@yourbrand.com</a></span>
											</div>
										</div>
									</div>
								</div>
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
									<li><a href="#"><i class="fa fa-github-square"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="contact-bottom">
							<div class="row">
								<!-- ***** Contact Text Start ***** -->
								<div class="col-lg-4 col-md-6 col-sm-12">
									<h5 class="margin-bottom-30">Get in touch</h5>
									<div class="contact-text">
										<p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam tempus magna vel turpis pharetra dictum. </p>
										<p>Sed blandit tempus purus, sed sodales leo rutrum vel. Nam vulputate ipsum ac est congue, eget commodo magna lobortis.</p>
									</div>
								</div>
								<!-- ***** Contact Text End ***** -->

								<!-- ***** Contact Form Start ***** -->
								<div class="col-lg-8 col-md-6 col-sm-12">
									<div class="contact-form">
										<div class="row">
											<div class="col-lg-6 col-md-12 col-sm-12">
												<input type="text" placeholder="Name, surname">
											</div>
											<div class="col-lg-6 col-md-12 col-sm-12">
												<input type="text" placeholder="E-Mail">
											</div>
											<div class="col-lg-12">
												<textarea placeholder="Your message"></textarea>
											</div>
											<div class="col-lg-12">
												<button class="btn-primary-line">SEND</button>
											</div>
										</div>
									</div>
								</div>
								<!-- ***** Contact Form End ***** -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ***** Page Content End ***** -->

	</section>

@endsection