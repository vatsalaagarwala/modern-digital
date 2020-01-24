@extends('app')
@section('content')

<!-- Slider -->
<section id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
			<div class="item active" style="background-image: url({{ URL::asset('site_assets/images/slider/lappy.jpg') }}); background-position: center"> <!-- Change Image -->
				<div class="caption">
					<h1 class="animated fadeInLeftBig">Welcome to <strong>MODERN DIGITAL</strong></h1>
					<p class="animated fadeInRightBig">One Stop Destination To Your Daily Life Appliances</p>
					{{-- <a data-scroll class="learn-more animated fadeInUpBig" href="#about">Start now</a> --}}
				</div>
			</div>
			<!-- <div class="item" style="background-image: url({{ URL::asset('site_assets/images/slider/game.jpg') }}); background-position: center">  Change Image
				<div class="caption">
					 <h1 class="animated fadeInLeftBig"><strong>Our</strong>Brands</h1> 
					<p class="animated fadeInRightBig">Built in Bootstrap</p> 
					 <a data-scroll class="learn-more animated fadeInUpBig" href="#about">Start now</a>
				</div>
			</div> -->
			<div class="item" style="background-image: url({{ URL::asset('site_assets/images/slider/phone.jpg') }}); background-position: center"> <!-- Change Image -->
				<div class="caption">
                <div class="row">
					<div class="container">	 		
						<div class="wrapper-partners">
                        <h1 class="animated fadeInLeftBig"><strong>Our</strong>Brands</h1>
							<div class="col-lg-3 col-md-3 partners-img wow fadeInRight" data-wow-duration="1s" data-wow-delay="300ms">
								<a href="#"><img src="{{ URL::asset('site_assets/images/partners/partners1.png') }}" alt=""></a> <!-- Change Image -->
							</div>
							<div class="col-lg-3 col-md-3 partners-img wow fadeInRight" data-wow-duration="1s" data-wow-delay="500ms">
								<a href="#"><img src="{{ URL::asset('site_assets/images/partners/lg2.png') }}" alt=""></a> <!-- Change Image -->
							</div>
							<div class="col-lg-3 col-md-3 partners-img wow fadeInRight" data-wow-duration="1s" data-wow-delay="700ms">
								<a href="#"><img src="{{ URL::asset('site_assets/images/partners/daikin2.png') }}" alt=""></a> <!-- Change Image -->
							</div>
							<div class="col-lg-3 col-md-3 partners-img wow fadeInRight" data-wow-duration="1s" data-wow-delay="900ms">
								<a href="#"><img src="{{ URL::asset('site_assets/images/partners/samsung2.png') }}" alt=""></a> <!-- Change Image -->
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="container">	 		
						<div class="wrapper-partners">
							<div class="col-lg-3 col-md-3 partners-img wow fadeInRight" data-wow-duration="1s" data-wow-delay="1100ms">
								<a href="#"><img src="{{ URL::asset('site_assets/images/partners/whirlpool2.png') }}" alt=""></a> <!-- Change Image -->
							</div>
							<div class="col-lg-3 col-md-3 partners-img wow fadeInRight" data-wow-duration="1s" data-wow-delay="1300ms">
								<a href="#"><img src="{{ URL::asset('site_assets/images/partners/lloyd1.png') }}" alt=""></a> <!-- Change Image -->
							</div>
							<div class="col-lg-3 col-md-3 partners-img wow fadeInRight" data-wow-duration="1s" data-wow-delay="1500ms">
								<a href="#"><img src="{{ URL::asset('site_assets/images/partners/ifb1.png') }}" alt=""></a> <!-- Change Image -->
							</div>
							<div class="col-lg-3 col-md-3 partners-img wow fadeInRight" data-wow-duration="1s" data-wow-delay="1700ms">
								<a href="#"><img src="{{ URL::asset('site_assets/images/partners/voltas5.png') }}" alt=""></a> <!-- Change Image -->
							</div>
						</div>
					</div>
				</div>
					 <!-- <h1 class="animated fadeInLeftBig">We love <strong>Simplicity</strong></h1>
					<p class="animated fadeInRightBig">Ready to Start</p>  -->
					<!-- <a data-scroll class="learn-more animated fadeInUpBig" href="#about">Start now</a>  -->
				</div>
				
			</div>
			<div class="item" style="background-image: url({{ URL::asset('site_assets/images/slider/map3.jpg') }}); background-position: center"> <!-- Change Image -->
				<div class="caption">
					<h1 class="animated fadeInLeftBig"><strong>Contact</strong> Us</h1>
					<div class="row">
							<div class="wrapper-contacts-icons">	
								<div class="col-xs-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="300ms">	
									<i class="fa fa-map-marker"></i>
									<div class="">J.K Tower Power House Road</div>
									<div class="">Korba Chhattisgarh</div>
								</div>								
								<div class="col-xs-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="450ms">	
									<i class="fa fa-mobile-phone"></i>
									<div class="">Wed - Mon 11:00 22:00</div>
									<div class="">+91 6262 669 933</div>
								</div>
								<div class="col-xs-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="600ms">	
									<i class="fa fa-envelope-o"></i>
									<div class="">Feel Free to Email Us</div>
									<div class="">moderndigitalkorba@gmail.com</div>
								</div>								
								
							</div>								
						</div>	
				</div>
				
			</div>
				<p><span> Designed by Vatsala Agarwala</span></p>
        </div>
		
        <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>
    </div>	
</section>
<!-- End Slider -->
@endsection