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
@include("partials.page_banner",["title"=>"Contact Us", "title1"=>"Contact Us"])


    <!-- Start Contact Us 
    ============================================= -->
    <div class="contact-style-one-area overflow-hidden default-padding">

        <div class="contact-shape">
            <img src="assets/img/shape/37.png" alt="Image Not Found">
        </div>
       
        <div class="container">
            <div class="row align-center">

                <div class="contact-stye-one col-lg-5 mb-md-50 mb-xs-20">

                    <div class="contact-style-one-info">
                        <h2 class="split-text">We’d Love to Hear From You</h2>
                        <p class="wow fadeInUp" data-wow-delay="100ms">
                          Interested in how our IT consulting services can improve your operations and drive efficiency? Fill out the form, and one of our experts will get back to you shortly.
                        </p>
                        <ul>
                            <li class="wow fadeInUp">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Hotline</h5>
                                    <a href="tel:{{$setting->phone}}">{{$setting->phone}}</a>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Our Location</h5>
                                    <p>
                                   {{$setting->address}}
                                    </p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="500ms">
                                <div class="icon">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Official Email</h5>
                                    <a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="contact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15">
                    <div class="contact-form-style-one">
                        <h5 class="sub-title">Get in Touch</h5>
                        {{-- <h2 class="title"></h2> --}}
                        <form  method="POST" class="contact-form contact-form" id="contactForm" data-parsley-validate>
								@csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Full Name*" type="text" required data-parsley-trigger="change">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email" required data-parsley-trigger="change">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone*" type="text" required data-parsley-trigger="change">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                    <input type="text" class="form-control" name="organization" id="organization" placeholder="Your organization*" required data-parsley-trigger="change">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                    {{-- <input type="text" class="form-control" name="organization" id="organization" placeholder="Company Name" required data-parsley-trigger="change"> --}}
                                    <select name="services" id="" class="form-control">
                                        <option value="">What services can we help you with? (Check all that apply)* </option>
                                        @foreach ($services as $service)
                                            <option value="{{$service->title}}">{{$service->title}}</option>
                                        @endforeach
                                    </select>
                                    <span class="alert-error"></span>
                                    </div>
                                </div>
                                {{-- captcha Starts --}}
                                  <div class="col-lg-6">
                                    <div class="form-group captcha">
                                         <span>{!! captcha_img() !!}</span>
                                            <button type="button" class="btn btn-theme btn-xs mt-2" id="btn-refresh">Refresh</button>
                                       
                                    </div>
                                </div>
                                  <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                           <input type="text" class="form-control" id="captcha" name="captcha" placeholder="Enter captcha" required data-parsley-required-message="Captcha is required">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                {{-- captcha Ends --}}
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="contactButton">
                                        <i class="fa fa-paper-plane"></i> Submit
                                    </button>
                                      &nbsp;
                                        <div class="spinner-border text-info text-sm" role="status">
                                            <span class="sr-only">Loading...</span>
									</div>
                                </div>
                            </div>
                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- @include("partials.home_contact_us") --}}
    <!-- End Contact -->

    <!-- Start Map 
    ============================================= -->
    <div class="maps-area bg-gray overflow-hidden">
        <div class="google-maps">
            <iframe src="{{$setting->google_map}}"></iframe>
        </div>
    </div>
    <!-- End Map -->

@push("styles")
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
@endpush

@push("scripts")
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
                    document.getElementById("contactButton").disabled = true;

                    $.ajax({
                        url: '{{ route('contact.send') }}',
                        method: 'POST',
                        data: $(this).serialize(),
                        success: function(response) {
                            swal("Success!", response.message, "success");
                            $('#contactForm')[0].reset();
                            $('#btn-refresh').click(); // Refresh captcha image
                            $('.spinner-border').hide(); // Hide spinner
                            document.getElementById("contactButton").disabled = false;
                        },
                        error: function(response) {
                            var errors = response.responseJSON.errors;
                            var errorMessage = "";
                            $.each(errors, function(key, value) {
                                errorMessage += value[0] + "\n";
                            });
                            swal("Error!", errorMessage, "error");
                            $('.spinner-border').hide(); // Hide spinner
                             document.getElementById("contactButton").disabled = false;
                        }
                    });
                }
                //  else {
                //     $(this).parsley().on('field:error', function() {
                //         var errors = this.getErrorsMessages();
                //         swal("Validation Error", errors.join("\n"), "error");
                //     });
                // }
            });
</script>
@endpush
@endsection