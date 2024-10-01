@extends("layouts.frontend")

@section("content")
    <!-- ***** Header Area Start ***** -->
	@include("partials.page-header")
	<!-- ***** Header Area End ***** -->


	<section class="page">
		<!-- ***** Page Top Start ***** -->
		@include("partials.hero",["title"=>"About"])
		<!-- ***** Page Top End ***** -->


		<!-- ***** Page Content Start ***** -->
		<div class="page-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="about">
							<div class="about-image">
								<img src="assets/images/photos/about/1.jpg" alt="">
							</div>
							<div class="about-text">
								<h2>Our Mission</h2>
								<p>Praesent posuere nec nisl quis hendrerit. Duis sit amet rutrum lorem. Ut maximus orci in metus blandit, et placerat dolor congue.</p>
								<p>Proin tempor ligula nec dolor facilisis mattis. Suspendisse potenti. Suspendisse efficitur turpis quis risus molestie cursus. Cras malesuada a massa et aliquet. Nunc vel urna eu neque consectetur imperdiet. Sed pretium neque ligula, ac vehicula massa aliquet eu.</p>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- ***** Parallax Start ***** -->
			<div class="parallax margin-bottom-100" id="parallax-text">
				<div class="parallax-content">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="info">
									<p>We design and develop <span>web apps</span> that delight your users and grow your business.</p>
									<a class="btn-white-line" href="#">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ***** Parallax End ***** -->

			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="about left margin-bottom-30">
							<div class="about-image">
								<img src="assets/images/photos/about/2.jpg" alt="">
							</div>
							<div class="about-text">
								<h2>Our Vision</h2>
								<p>Praesent posuere nec nisl quis hendrerit. Duis sit amet rutrum lorem. Ut maximus orci in metus blandit, et placerat dolor congue.</p>
								<p>Proin tempor ligula nec dolor facilisis mattis. Suspendisse potenti. Suspendisse efficitur turpis quis risus molestie cursus.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- ***** Page Content End ***** -->

	</section>

@endsection