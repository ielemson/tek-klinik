@extends('layouts.frontend')
@section('title')
Book a meeting with us today
@endsection
@section('content')
    @php
        $setting = \App\Models\Setting::find(1);
    @endphp
    @include('partials.header')
    <!--==============================
    Breadcumb
    ============================== -->
    @include('partials.page_banner', ['title' => ' Book Meeting', 'title1' => 'Contact Us'])


    <!-- Start Contact Us
    ============================================= -->
    <div class="contact-style-one-area overflow-hidden default-padding">

        <div class="contact-shape">
            <img src="{{ asset('assets/img/shape/37.png') }}" alt="Image Not Found">
        </div>

        <div class="container">
            <div class="row align-center">

                <div class="contact-stye-one col-lg-5 mb-md-50 mb-xs-20">

                    <div class="contact-style-one-info">
                        <h2 class="split-text">We’d Love to Hear From You</h2>
                        <p class="wow fadeInUp" data-wow-delay="100ms">
                            Whether you have a question about our services, need assistance, or want to partner with us, our
                            team is ready to help. Reach out through any of the contact options below, and we’ll respond
                            promptly.
                        </p>
                        <ul>
                            <li class="wow fadeInUp">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Hotline</h5>
                                    <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Our Location</h5>
                                    <p>
                                        {{ $setting->address }}
                                    </p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="500ms">
                                <div class="icon">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Official Email</h5>
                                    <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="contact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15">
                    <div class="contact-form-style-one">
                        <h5 class="sub-title">Schedule a Meeting</h5>
                        <h2 class="title">With Tek-klinik</h2>
                        <div class="mb-3">

                            <!-- Booking Form -->
                            <form method="POST" class="contact-form contact-form" id="bookingForm" data-parsley-validate>
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <label for="meetingDate" class="form-label">Select Date</label>
                                        <input id="meetingDate" type="text" class="form-control" name="meetingDate"
                                            placeholder="Click to select a date" required data-parsley-trigger="change" />
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="meetingTime" class="form-label">Select Time</label>
                                        <input id="meetingTime" type="text" class="form-control" name="meetingTime"
                                            placeholder="Click to select a time" required data-parsley-trigger="change" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstName" name="fname" required
                                            data-parsley-trigger="change">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="surname" class="form-label">Surname</label>
                                        <input type="text" class="form-control" id="surname" name="sname" required
                                            data-parsley-trigger="change">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        data-parsley-trigger="change">
                                </div>

                               <div class="row">
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

                                <div class="mb-3 mt-4">
                                    <label for="techIssue" class="form-label">Issues You Would Like To Discuss</label>
                                    <textarea class="form-control" id="techIssue" name="message_body" rows="3" required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary" id="bookButton">Book Meeting</button>
                                    &nbsp;
                                        <div class="spinner-border text-info text-sm" role="status">
                                            <span class="sr-only">Loading...</span>
									</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection



    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
        
          <!-- Tempus Dominus v6 CSS -->
            <link href="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.2.7/dist/css/tempus-dominus.min.css"
                rel="stylesheet">

            <!-- Icons (optional) -->
            <!-- Font Awesome 6 Free -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
                integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <style>
            .parsley-required {
                list-style-type: none;
                color: rgb(133, 8, 8);
                font-weight: 800;
                font-size: 0.8rem;
                margin-top: 4px
            }
        </style>
    @endpush

    @push('scripts')
        <!-- Include Parsley JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script> --}}
        <!-- Tempus Dominus -->
        <script src="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.2.7/dist/js/tempus-dominus.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#btn-refresh').click(function() {
                    $.ajax({
                        type: 'GET',
                        url: 'reload-captcha',
                        success: function(data) {
                            $(".captcha span").html(data.captcha);
                        }
                    });
                });
                $('.spinner-border').hide(); // Hide spinner

            });

            $('#bookingForm').on('submit', function(event) {
                event.preventDefault();

                if ($(this).parsley().isValid()) {
                    $('.spinner-border').show(); // Show spinner
                     document.getElementById("bookButton").disabled = true;

                    $.ajax({
                        url: '{{ route('schedule_meeting') }}',
                        method: 'POST',
                        data: $(this).serialize(),
                        success: function(response) {
                          // console.log(response)
                            swal("Success!", response.message);
                            $('#bookingForm')[0].reset();
                            $('#btn-refresh').click(); // Refresh captcha image
                            $('.spinner-border').hide(); // Hide spinner
                            document.getElementById("bookButton").disabled = false;
                        },
                        error: function(response) {
                            var errors = response.responseJSON.errors;
                            var errorMessage = "";
                            $.each(errors, function(key, value) {
                                errorMessage += value[0] + "\n";
                            });
                            swal("Error!", errorMessage, "error");
                            $('.spinner-border').hide(); // Hide spinner
                             document.getElementById("bookButton").disabled = false;
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

            document.addEventListener('DOMContentLoaded', function() {
                const today = new Date();

                // Date Picker: disable weekends and past dates
                new tempusDominus.TempusDominus(document.getElementById('meetingDate'), {
                    restrictions: {
                        minDate: today,
                        daysOfWeekDisabled: [0, 6] // Disable Sundays and Saturdays
                    },
                    display: {
                        components: {
                            calendar: true,
                            date: true,
                            month: true,
                            year: true,
                            clock: false
                        }
                    }
                });

                // Time Picker: only time selection
                new tempusDominus.TempusDominus(document.getElementById('meetingTime'), {
                    display: {
                        components: {
                            calendar: false,
                            hours: true,
                            minutes: true,
                            seconds: false,
                            useTwentyfourHour: false
                        }
                    }
                });
            });
        </script>
    @endpush
