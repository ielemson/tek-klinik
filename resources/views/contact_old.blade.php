@extends("layouts.frontend")
@section("title")
	Contact Us
@endsection
@section("content")
@php
    $setting = \App\Models\Setting::find(1);
@endphp
@include("partials.header")
 <!--==============================
    Breadcumb
============================== -->
@include("partials.page-crumb",["title1"=>"Contact Us", "title2"=>"Contact Us"])
<section class=" space-top space-extra-bottom">
	<div class="container">
		<div class="tab-content" id="nav-contactTabContent">
			<div class="tab-pane fade show active" id="nav-GermanyAddress" role="tabpanel"
				aria-labelledby="nav-GermanyAddress-tab">
				<div class="row">
					<div class="col-lg-6 mb-30">
						<div class="contact-box">
							<h3 class="contact-box__title h4">Contact Us</h3>
							<p class="contact-box__text">
								Reliable support, anytime. Our web-enabled solutions ensure you get the help you need, quickly and efficiently.
							</p>
							<div class="contact-box__item">
								<div class="contact-box__icon"><i class="fal fa-phone-alt"></i></div>
								<div class="media-body">
									<h4 class="contact-box__label">Phone Number & Email</h4>
									<p class="contact-box__info"><a href="javascript:;">{{ $setting->phone }}</a><a
											href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></p>
								</div>
							</div>
							<div class="contact-box__item">
								<div class="contact-box__icon"><i class="far fa-map-marker-alt"></i></div>
								<div class="media-body">
									<h4 class="contact-box__label">Our Office Address</h4>
									<p class="contact-box__info">
										{{ $setting->address }}
									</p>
								</div>
							</div>
							<div class="contact-box__item">
								<div class="contact-box__icon"><i class="far fa-clock"></i></div>
								<div class="media-body">
									<h4 class="contact-box__label">Official Work Time</h4>
									<p class="contact-box__info">7:00am - 6:00pm ( Mon - Fri ) Sat, Sun & Holiday
										Closed</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-30">
						<div class="contact-box">
							<h3 class="contact-box__title h4">Leave a Message</h3>
							<p class="contact-box__text">We’re Ready To Help You</p>
							<form class="contact-box__form" method="POST" id="contactForm" data-parsley-validate>
								@csrf
								<div class="row gx-20">
									<div class="col-md-6 form-group">
										<input type="text" name="name" id="name" placeholder="Your Name" required data-parsley-trigger="change">
										<i class="fal fa-user"></i>
									</div>
									<div class="col-md-6 form-group">
										<input type="email" name="email" id="email" placeholder="Email Address" required data-parsley-trigger="change">
										<i class="fal fa-envelope"></i>
									</div>
									<div class="col-12 form-group">
										<input type="text" name="subject" id="subject" placeholder="Subject" required data-parsley-trigger="change">
									</div>

									<div class="col-12 form-group mb-2">
                                       
                                        <div class="captcha">
                                            <span>{!! captcha_img() !!}</span>
                                            <button type="button" class="btn btn-secondary" id="btn-refresh">Refresh</button>
                                        </div>

                                        <input type="text" class="form-control" id="captcha" name="captcha" required data-parsley-required-message="Captcha is required">
                                    </div>

									<div class="col-12 form-group">
										<textarea name="message_body" id="message_body"
											placeholder="Type Your Message" required data-parsley-trigger="change"></textarea>
									</div>


									<div class="col-12">
										<button class="vs-btn">Submit Message
										<i class="far fa-arrow-right"></i></button>
										&nbsp;
                                        <div class="spinner-border text-info text-sm" role="status">
                                            <span class="sr-only">Loading...</span>
										</div>
									</div>
								</div>
							</form>
							<p class="form-messages mb-0 mt-3"></p>
							   <!-- Success message -->
							   <div id="successMessage" style="display:none; color: green;">
								Your message has been sent successfully!
							</div>
					
							<!-- Error message -->
							<div id="errorMessage" style="display:none; color: red;">
								Something went wrong. Please try again.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="ratio ratio-21x9">
	<iframe
		src="{{ $setting->google_map }}"
		allowfullscreen=""></iframe>
</div>

@section("styles")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
<style>
	.parsley-required{
		list-style-type: none;
		color: rgb(133, 8, 8);
		font-weight: 800;
		font-size: 0.8rem;
		margin-top: 4px
	}
</style>
@endsection
@section("scripts")
  <!-- Include Parsley JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <script>
	  $(document).ready(function() {
            $('#btn-refresh').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
	$('.spinner-border').hide(); // Hide spinner
           
        });

	$('#contactForm').on('submit', function(event) {
                event.preventDefault();

                if ($(this).parsley().isValid()) {
                    $('.spinner-border').show(); // Show spinner

                    $.ajax({
                        url: '{{ route('contact.send') }}',
                        method: 'POST',
                        data: $(this).serialize(),
                        success: function(response) {
                            swal("Success!", response.message, "success");
                            $('#contactForm')[0].reset();
                            $('#btn-refresh').click(); // Refresh captcha image
                            $('.spinner-border').hide(); // Hide spinner
                        },
                        error: function(response) {
                            var errors = response.responseJSON.errors;
                            var errorMessage = "";
                            $.each(errors, function(key, value) {
                                errorMessage += value[0] + "\n";
                            });
                            swal("Error!", errorMessage, "error");
                            $('.spinner-border').hide(); // Hide spinner
                        }
                    });
                } else {
                    $(this).parsley().on('field:error', function() {
                        var errors = this.getErrorsMessages();
                        swal("Validation Error", errors.join("\n"), "error");
                    });
                }
            });
</script>
@endsection
@endsection