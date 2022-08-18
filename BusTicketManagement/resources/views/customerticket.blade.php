@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
			</div>
		</header>

		<!-- end:header-top -->

		

		<div id="fh5co-car" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Get Your Ticket With Just One Click</h3>
						<p>Your destination, our responsibilities</p>
					</div>
				</div>
				<div class="row row-bottom-padded-md">
                    
                    @foreach($allSearchedAvailableTicket as $ticket)
                    <div class="col-md-6 animate-box">
                        <form method='POST' action="CustomerBuyTicketSubmit">
                            @csrf
						<div class="car">
							<div class="one-4">

								<input name="ticketbrand" value="{{$ticket->brand_ticket_author_name}}" type="hidden">
								<input name="ticketbrandid" value="{{$ticket->brand_ticket_author_id}}" type="hidden">
								<input name="ticketid" value="{{$ticket->id}}" type="hidden">
								<h3>{{$ticket->brand_ticket_author_name}}</h3>
								<span><input name="from" value="{{$ticket->brand_ticket_from}}" type="hidden" class="price">From:  {{$ticket->brand_ticket_from}}</span>
                                <hr>
								<span><input name="to" value="{{$ticket->brand_ticket_to}}" type="hidden"class="price">To:    {{$ticket->brand_ticket_to}}</span>
                                <hr>
								<span><input name="Brandseat" value="{{$ticket->brand_ticket_seat}}" type="hidden" class="price">Seat:  {{$ticket->brand_ticket_seat}}</span>
                                <hr>
								<span><input name="date" value="{{$ticket->brand_ticket_date}}" type="hidden" class="price">Date: {{$ticket->brand_ticket_date}} </span>
                                <hr>
                                <span><input name="price" value="{{$ticket->brand_ticket_price}}" type="hidden" class="price">Price: {{$ticket->brand_ticket_price}}<small>x Seat</small></span>
                                <hr>
                                <span><input name="Customerseat" value="{{$ticket->brand_ticket_from}}" type="number" class="form-control rounded-0"  placeholder="seats" required="" min="1" max="{{$ticket->brand_ticket_seat}}" step="1" pattern="\d*">
                                <hr>
                                <div class="form-group card">
                                    <button type="submit" class="btn btn-dark btn-round px-1"><i class="icon-lock"></i>Submit-Ticket</button>
                                </div>
                            </div>
							<div class="one-1" style="background-image: url(images/car-1.jpg);">
							</div>
						</div>
                        </form>
					</div>
                    @endforeach
				</div>
			</div>
		</div>
		

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>


@endsection