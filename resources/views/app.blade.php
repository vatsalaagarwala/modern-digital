<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <title>Welcome to ModernDigital</title>
    <meta name="description" content="One Stop Destination to All Your Household Needs">
    <!-- <meta name="author" content="Andsolutions.it">
    <meta name="description" content=""> -->
	
    <link href="{{ URL::asset('site_assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('site_assets/css/bootstrap-theme.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('site_assets/css/animate.min.css') }}" rel="stylesheet" >	
	<link href="{{ URL::asset('site_assets/css/font-awesome.min.css') }}" rel="stylesheet">	
	<link href="{{ URL::asset('site_assets/css/prettyPhoto.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('site_assets/css/main_styles.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('site_assets/css/aos.css') }}">

	<link href="{{ URL::asset('site_assets/css/theme.css') }}" rel="stylesheet">	
	<link href="{{ URL::asset('site_assets/css/responsive.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('site_assets/css/colors/blue.css') }}" rel="stylesheet" class="colors">

	<!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    
	<!-- Favicons -->
    <link rel="shortcut icon" href="{{ URL::asset('site_assets/images/ico/images.gif') }}">	
    <link rel="apple-touch-icon" href="{{ URL::asset('site_assets/images/ico/image1.gif') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('site_assets/images/ico/image2.gif') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('site_assets/images/ico/image3.gif') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('site_assets/images/ico/image4.gif') }}">

</head>

<body data-spy="scroll" data-target="#mynav" data-offset="85">

 @include("_particles.header")


  @yield("content")

  @include("_particles.footer")

<!-- Preloader --> 
<div id="preloader">
	<div id="status">
		<div class="spinner">
			  <div class="rect1"></div>
			  <div class="rect2"></div>
			  <div class="rect3"></div>
			  <div class="rect4"></div>
			  <div class="rect5"></div>
		</div>
	</div>
</div>
<!-- End Preloader -->

<!-- Scroll to Top  -->
<a href="#" class="scroll-up"><i class="fa fa-arrow-up"></i></a>
<!-- End Scroll To Top  -->

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="{{ URL::asset('site_assets/js/jquery.min.js') }}"></script>
	<script src="{{ URL::asset('site_assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('site_assets/js/retina.min.js') }}"></script>
	<script src="{{ URL::asset('site_assets/js/jquery.easing.min.js') }}"></script>
	<script src="{{ URL::asset('site_assets/js/wow.min.js') }}"></script>	
	<script src="{{ URL::asset('site_assets/js/waypoints.min.js') }}"></script>	
	<script src="{{ URL::asset('site_assets/js/jquery.countTo.js') }}"></script>
	<script src="{{ URL::asset('site_assets/js/jquery.mixitup.min.js') }}"></script>
	<script src="{{ URL::asset('site_assets/js/jquery.prettyPhoto.js') }}"></script>	
	<script src="{{ URL::asset('site_assets/js/jquery.knob.min.js') }}"></script>	
	<script src="{{ URL::asset('site_assets/js/jquery.validate.min.js') }}"></script>
	<script src="{{ URL::asset('site_assets/js/custom.js') }}"></script>
	<script src="{{ URL::asset('site_assets/js/aos.js') }}"></script>
	<script src="{{ URL::asset('site_assets/js/switcher/switcher.js') }}"></script>
</body>
</html>