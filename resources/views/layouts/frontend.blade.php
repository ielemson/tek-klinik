<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Turing - IT Solutions and Corporate template by tempload." />
	<meta name="keywords" content="turing, startup, saas, agency, development, html, template, tempload" />
	<meta name="author" content="tempload"/>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/images/favicon/favicon.png" />

	<!-- Bootstrap & Plugins CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="assets/css/blue.css" rel="stylesheet" type="text/css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118135390-1"></script>
	<style>
		.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
}
	</style>
</head>
<body>

	<!-- ***** Preloader Start ***** -->
	<div id="preloader">
		<div id="loader" class="spinner">
			<div id="shadow"></div>
			<div id="box"></div>
		</div>
	</div>
	<!-- ***** Preloader End ***** -->
	@yield("content")

	<!-- ***** Footer Start ***** -->
	@include("partials.footer")
	<!-- ***** Footer End ***** -->

	<!-- jQuery -->
	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<!-- Bootstrap -->
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Plugins -->
	<script src="assets/js/scrollreveal.min.js"></script>
	<script src="assets/js/parallax.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/imgfix.min.js"></script>	

	<!-- Global Init -->
	<script src="assets/js/custom.js"></script>
</body>

</html>