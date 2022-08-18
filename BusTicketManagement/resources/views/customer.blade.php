@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		<Tick-IT></Tick-IT> &mdash;
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

	<!-- 
	//////////////////////////////////////////////////////

	//////////////////////////////////////////////////////
	 -->

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
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
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
						<h1 id="fh5co-logo"><a href=""><i class="icon-airplane"></i>Tick-IT</a></h1>

						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active"><a href="#">Shop</a></li>
								<li><a href="#card">Ticket-cart</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>

			<!-- end:header-top -->

			<div class="fh5co-hero">
				<div class="fh5co-overlay"></div>
				<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
					<div class="desc">
						<div class="container">
							<div class="row">
								<div class="col-sm-5 col-md-5">
									<div class="tabulation animate-box">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active">
												<a href="#bus" aria-controls="bus" role="tab" data-toggle="tab">Find me a ticket</a>
											</li>
										</ul>
										<!-- Tab panes -->
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane active" id="bus">
												<div class="row">
												@csrf
                                @if (\Session::has('success'))
                                <div class="alert alert-success">
                                    <ul>
                                        <li>{!! \Session::get('success') !!}</li>
                                    </ul>
                                </div>
                                @endif
													<form method="POST" action="CustomerAddTicketSubmit">
														@csrf
														<div class="col-xxs-12 col-xs-6 mt">
															<div class="input-field">
																<label for="from">From:</label>
																<!-- <input type="text" class="form-control" id="from-place" placeholder="Dhaka, Bangladesh"/> -->
																<select required class="cs-select cs-skin-border" style="font-weight: bold; color:#f49048;" name="Customer_Start_RouteName" id="from-place" placeholder="select">
																	@foreach($allRoutes as $item)
																	<option onkeyup="saveValue(this);" style="font-weight: bold; color:#f49048;" value="{{ $item->route_name }}">{{ $item->route_name }} </option>
																	@endforeach
																</select>
															</div>
														</div>
														<div class="col-xxs-12 col-xs-6 mt">
															<div class="input-field">
																<label for="from">To:</label>
																<!-- <input type="text" class="form-control" id="to-place" placeholder="Khulna, Bangladesh"/> -->
																<select required class="cs-select cs-skin-border" style="font-weight: bold; color:#f49048;" name="Customer_Destination_Name" id="from-place" placeholder="select">
																	@foreach($allRoutes as $item)
																	<option onkeyup="saveValue(this);" style="font-weight: bold; color:#f49048;" value="{{ $item->route_name }}">{{ $item->route_name }} </option>
																	@endforeach
																</select>
															</div>
														</div>

														<div class="col-xxs-12 col-xs-6 mt">
															<section>
																<label for="class">Seat:</label>
																<input name="customer_seats" type="number" class="form-control rounded-0" style="font-weight: bold; color:#f49048; background-color:#f0edeb;" placeholder="Seat/Person" value="1" required min="1" max="39" step="1" pattern="\d*">
																</select>
															</section>
														</div>

														<div class="col-xs-12">
															<input type="submit" class="btn btn-primary btn-block" value="Search Flight">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<!--- --->
									<!-- <div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									<p>Just Trickit<a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name"></a></p>
									<h2 style="color:red">Exclusive Limited Time Offer</h2>
									<h3 style="color:red">Fly to Hong Kong via Los Angeles, USA</h3>
									<span class="price" style="color:red" >$599</span>
									<-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> 
								</div>
							</div>
							 -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!----------------------------------------------->
				<div id="fh5co-tours" class="fh5co-section-gray">
					<div class="card">
						<div class="row" id="card">
							<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
								<p></p>
								<h3>Tickets</h3>
								<p>Thankyou For Choosing Us</p>
							</div>
						</div>
					</div>
					<table class="table align-items-center table-flush table-borderless">
						<thead>
							<tr>
								<th>Customer Name</th>
								<th>Customer ID</th>
								<th>Brand</th>
								<th>Ticket ID</th>
								<th>Ticket Bought</th>
								<th>Departure Date</th>
								<th>From</th>
								<th>To</th>
								<th>Paid
								<th>
							</tr>
						</thead>
						<tbody>

							@foreach($allticket as $item)
							<tr>
								<td>{{ $item->customer_name }}</td>
								<td>{{ $item->customer_id }}</td>
								<td>{{ $item->ticketbrand }}</td>
								<td>{{ $item->ticketid }}</td>
								<td>{{ $item->created_at}}</td>
								<td>{{ $item->date }}</td>
								<td>{{ $item->from }}</td>
								<td>{{ $item->to }}</td>
								<td>{{ $item->totalprice}}৳</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<!------------>
				<div id="fh5co-features">
					<div class="container">
						<div class="row">
							<div class="col-md-4 animate-box">

								<div class="feature-left">
									<span class="icon">
										<i class="icon-hotairballoon"></i>
									</span>
									<div class="feature-copy">
										<h3>Family Travel</h3>
										<p><a target=_blank href="https://www.trafalgar.com/real-word/benefits-of-travelling-with-family/">Learn More</a></p>
									</div>
								</div>

							</div>

							<div class="col-md-4 animate-box">
								<div class="feature-left">
									<span class="icon">
										<i class="icon-search"></i>
									</span>
									<div class="feature-copy">
										<h3>Travel Plans</h3>
										<p>Pick your destination. There's nothing to say when a traveler's mind wishes to visit the beaches, mountains, or a forest.</p>
										<p><a target=_blank href="https://traveltriangle.com/blog/how-to-plan-a-trip/">Learn More</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 animate-box">
								<div class="feature-left">
									<span class="icon">
										<i class="icon-wallet"></i>
									</span>
									<div class="feature-copy">
										<h3>Honeymoon</h3>
										<p> It's the trip of a lifetime. There are incredible places near and far to indulge your personal idea of romance.</p>
										<p><a href="https://www.brides.com/gallery/100-best-honeymoon-destinations">Learn More</a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 animate-box">

								<div class="feature-left">
									<span class="icon">
										<i class="icon-wine"></i>
									</span>
									<div class="feature-copy">
										<h3>Business Travel</h3>
										<p>Do you want to explore the world and be your own boss? Starting your own business doesn’t mean you have to stay in one place.</p>
										<p><a href="https://www.businessnewsdaily.com/10600-business-ideas-travel-lovers.html">Learn More</a></p>
									</div>
								</div>

							</div>

							<div class="col-md-4 animate-box">
								<div class="feature-left">
									<span class="icon">
										<i class="icon-genius"></i>
									</span>
									<div class="feature-copy">
										<h3>Solo Travel</h3>
										<p>Heartbreak is a very real thing, and it can sometimes feel impossible to shake. One failsafe remedy is to go travelling.</p>
										<p><a href="https://www.timeout.com/travel/best-places-to-travel-alone">Learn More</a></p>
									</div>
								</div>

							</div>
							<div class="col-md-4 animate-box">
								<div class="feature-left">
									<span class="icon">
										<i class="icon-chat"></i>
									</span>
									<div class="feature-copy">
										<h3>Explorer</h3>
										<p>It leaves you speechless, then turns you into a storyteller.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div id="fh5co-destination">
					<div class="tour-fluid">
						<div class="row">
							<div class="col-md-12">
								<ul id="fh5co-destination-list" class="animate-box">
									<li class="one-forth text-center" style="background-image: url(images/place-1.jpg); ">
										<a href="#">
											<div class="case-studies-summary">
												<h2>
													@empty($allHighlights[0]->highlight_name)
													Tick-It
													@else
													{{$allHighlights[0]->highlight_name}}
													@endempty
												</h2> <!-- insert from Most Popular -->
											</div>
										</a>
									</li>
									<li class="one-forth text-center" style="background-image: url(images/place-2.jpg); ">
										<a href="#">
											<div class="case-studies-summary">
												<h2>
													@empty($allHighlights[1]->highlight_name)
													Tick-It
													@else
													{{$allHighlights[1]->highlight_name}}
													@endempty
												</h2> <!-- insert from Most Popular -->
											</div>
										</a>
									</li>
									<li class="one-forth text-center" style="background-image: url(images/place-3.jpg); ">
										<a href="#">
											<div class="case-studies-summary">
												<h2>
													@empty($allHighlights[2]->highlight_name)
													Tick-It
													@else
													{{$allHighlights[2]->highlight_name}}
													@endempty

												</h2> <!-- insert from Most Popular -->
											</div>
										</a>
									</li>
									<li class="one-forth text-center" style="background-image: url(images/place-4.jpg); ">
										<a href="#">
											<div class="case-studies-summary">
												<h2>
													@empty($allHighlights[3]->highlight_name)
													Tick-It
													@else
													{{$allHighlights[3]->highlight_name}}
													@endempty
												</h2> <!-- insert from Most Popular -->
											</div>
										</a>
									</li>

									<li class="one-forth text-center" style="background-image: url(images/place-5.jpg); ">
										<a href="#">
											<div class="case-studies-summary">
												<h2>
													@empty($allHighlights[4]->highlight_name)
													Tick-It
													@else
													{{$allHighlights[4]->highlight_name}}
													@endempty
												</h2> <!-- insert from Most Popular -->
											</div>
										</a>
									</li>
									<li class="one-half text-center">
										<div class="title-bg">
											<div class="case-studies-summary">
												<h2>Get Your Ticket Now!</h2> <!-- insert from Most Popular -->
												<span><a href="#">Just Trick-it</a></span>
											</div>
										</div>
									</li>
									<li class="one-forth text-center" style="background-image: url(images/place-6.jpg); ">
										<a href="#">
											<div class="case-studies-summary">
												<h2>
													@empty($allHighlights[5]->highlight_name)
													Tick-It
													@else
													{{$allHighlights[5]->highlight_name}}
													@endempty
												</h2>
											</div>
										</a>
									</li>
									<li class="one-forth text-center" style="background-image: url(images/place-7.jpg); ">
										<a href="#">
											<div class="case-studies-summary">
												<h2>
													@empty($allHighlights[6]->highlight_name)
													Tick-It
													@else
													{{$allHighlights[6]->highlight_name}}
													@endempty
												</h2>
											</div>
										</a>
									</li>
									<li class="one-forth text-center" style="background-image: url(images/place-8.jpg); ">
										<a href="#">
											<div class="case-studies-summary">
												<h2>
													@empty($allHighlights[7]->highlight_name)
													Tick-It
													@else
													{{$allHighlights[7]->highlight_name}}
													@endempty
												</h2>
											</div>
										</a>
									</li>
									<li class="one-forth text-center" style="background-image: url(images/place-9.jpg); ">
										<a href="#">
											<div class="case-studies-summary">
												<h2>
													@empty($allHighlights[8]->highlight_name)
													Tick-It
													@else
													{{$allHighlights[8]->highlight_name}}
													@endempty
												</h2>
											</div>
										</a>
									</li>
									<li class="one-forth text-center" style="background-image: url(images/place-10.jpg); ">
										<a href="#">
											<div class="case-studies-summary">
												<h2>
													@empty($allHighlights[9]->highlight_name)
													Tick-IT
													@else
													{{$allHighlights[9]->highlight_name}}
													@endempty
												</h2>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- fh5co-blog-section -->
				<div id="fh5co-testimonial" style="background-image:url(images/img_bg_3.jpg);">
					<div class="container">
						<div class="row animate-box">
							<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
								<h2>Tick-it, The ride of you life.</h2>
							</div>
						</div>
						<!-- <div class="row">
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
						</blockquote>
						<p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
						</blockquote>
						<p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
					</div>
					
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
						</blockquote>
						<p class="author">John Doe, Founder <a href="#">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
					</div>
					
				</div>
			</div> -->
					</div>
				</div>
				<footer>
					<div id="footer">
						<div class="container">
							<div class="row row-bottom-padded-md">
								<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
									<h3>About Trickit</h3>
									<p>Your personal ticket-counter at home</p>
								</div>
								<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
									<h3>Interest</h3>
									<ul>
										<li><a href="#">Beaches</a></li>
										<li><a href="#">Family Travel</a></li>
										<li><a href="#">Budget Travel</a></li>
										<li><a href="#">Food &amp; Drink</a></li>
									</ul>
								</div>
								<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
									<h3>Best Places</h3>
									<ul>
										<li><a href="#">Cox's Bazar</a></li>
										<li><a href="#">The Sundarbans</a></li>
										<li><a href="#">Srimangal</a></li>
									</ul>
								</div>
								<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
									<h3>Affordable</h3>
									<ul>
										<li><a href="#">Food &amp; Drink</a></li>
										<li><a href="#">Fare Flights</a></li>
									</ul>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-md-offset-3 text-center">
									<p class="fh5co-social-icons">
										<a href="https://www.twitter.com" target=_blank><i class="icon-twitter2"></i></a>
										<a href="https://www.facebook.com" target=_blank><i class="icon-facebook2"></i></a>
										<a href="https://www.instagram.com" target=_blank><i class="icon-instagram"></i></a>
										<a href="https://www.dribble.com" target=_blank><i class="icon-dribbble2"></i></a>
										<a href="https://www.youtube.com" target=_blank><i class="icon-youtube"></i></a>
									</p>

								</div>
							</div>
						</div>
					</div>
				</footer>



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