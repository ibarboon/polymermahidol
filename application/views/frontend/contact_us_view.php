<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<!--[if gt IE 9]><!--><html><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Polymer Science and Technology Mahidol University</title>
		<meta name="keywords" content="" >
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/vendor/bootstrap/bootstrap.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/vendor/fontawesome/css/font-awesome.css'); ?>">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/frontend/vendor/owlcarousel/owl.carousel.css'); ?>">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/frontend/vendor/owlcarousel/owl.theme.css'); ?>">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/frontend/vendor/magnific-popup/magnific-popup.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/theme.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/theme-elements.css'); ?>">
<!-- 		<link rel="stylesheet" href="css/theme-blog.css"> -->
<!-- 		<link rel="stylesheet" href="css/theme-shop.css"> -->
<!-- 		<link rel="stylesheet" href="css/theme-animate.css"> -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/frontend/vendor/circle-flip-slideshow/css/component.css'); ?>">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/frontend/vendor/nivo-slider/nivo-slider.css'); ?>">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/frontend/vendor/nivo-slider/default/default.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/skins/default.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/custom.css'); ?>">
		<!--[if IE]>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/ie.css'); ?>">
		<![endif]-->
		<script src="<?php echo base_url('assets/frontend/vendor/modernizr/modernizr.js'); ?>"></script>
		<!--[if lte IE 8]>
			<script src="<?php echo base_url('assets/frontend/vendor/respond/respond.js'); ?>"></script>
			<script src="<?php echo base_url('assets/frontend/vendor/excanvas/excanvas.js'); ?>"></script>
		<![endif]-->
	</head>
	<body>
		<div class="body">
			<header id="header">
				<div class="container">
					<h1 class="logo">
						<a href="<?php echo site_url(); ?>">
							<img alt="Polymer Science and Technology Mahidol University" width="222" height="60" data-sticky-width="111" data-sticky-height="30" src="<?php echo base_url('assets/frontend/img/test-logo.png'); ?>">
						</a>
					</h1>
					<div class="search">
						<form id="searchForm" action="page-search-results.html" method="get">
							<div class="input-group">
								<input type="text" class="form-control search" name="q" id="q" placeholder="Search..." required>
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</form>
					</div>
					<nav>
						<ul class="nav nav-pills nav-top">
							<li>
								<a href="#"><i class="fa fa-angle-right"></i>Alumni</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-angle-right"></i>Student life</a>
							</li>
						</ul>
					</nav>
					<button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
						<i class="fa fa-bars"></i>
					</button>
				</div>
				<div class="navbar-collapse nav-main-collapse collapse">
					<div class="container">
						<nav class="nav-main mega-menu">
							<ul id="mainMenu" class="nav nav-pills nav-main">
								<li class="dropdown active">
									<a href="#" class="dropdown-toggle">
										 About us
										<i class="icon icon-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li><a href="javascript: void(0);">History</a></li>
										<li><a href="javascript: void(0);">Mission</a></li>
										<li><a href="javascript: void(0);">Fact and Figures</a></li>
										<li><a href="javascript: void(0);">Location and Map</a></li>
										<li><a href="<?php echo site_url('contact-us'); ?>">Contact us</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle">
										News/Events 
										<i class="icon icon-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li><a href="about-us.html">Latest News</a></li>
										<li><a href="about-us-basic.html">Announcement</a></li>
										<li><a href="about-me.html">Activities</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle">
										Programs
										<i class="icon icon-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li><a href="<?php echo site_url('programs/doctor-of-philosophy-in-polymer-science-and-technology'); ?>">Doctor of Philosophy in Polymer Science and Technology (International Program)</a></li>
										<li><a href="<?php echo site_url('programs/master-of-science-in-polymer-science-and-technology'); ?>">Master of Science in Polymer Science and Technology (International Program)</a></li>
										<li><a href="#">Admission</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle">
										People
										<i class="icon icon-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li><a href="portfolio-4-columns.html">Faculty</a></li>
										<li><a href="portfolio-3-columns.html">Supporting Staff</a></li>
									</ul>
								</li>
								<li>
									<a href="<?php echo site_url('research'); ?>">Research</a>
								</li>
								<li>
									<a href="shortcodes.html">Collaborating Research Units</a>
								</li>
								<li>
									<a href="shortcodes.html">Facilities</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			<div role="main" class="main">
				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="<?php echo site_url(); ?>">Home</a></li>
									<li class="active">Contact Us</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Contact Us</h2>
							</div>
						</div>
					</div>
				</section>
				<div id="googlemaps" class="google-map"></div>
				<div class="container">

					<div class="row">
						<div class="col-md-6">

							<div class="alert alert-success hidden" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-danger hidden" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
							</div>

							<h2 class="short"><strong>Contact</strong> Us</h2>
							<form id="contactForm" action="javascript: void(0);" method="POST">
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Your name *</label>
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
										</div>
										<div class="col-md-6">
											<label>Your email address *</label>
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Subject</label>
											<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Message *</label>
											<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-6">

							<h4 class="push-top">Get in <strong>touch</strong></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus.</p>

							<hr />

							<h4>The <strong>Office</strong></h4>
							<ul class="list-unstyled">
								<li><i class="fa fa-map-marker"></i> <strong>Address:</strong> Science Building 3, Faculty of Science, Mahidol University Salaya, Phuttamonthon, Nakornpatom, 73170, THAILAND</li>
								<li><i class="fa fa-phone"></i> <strong>Phone:</strong> (+662) 441-9819-20 ext.1138</li>
								<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="javascript:void(0);">panya.sun@mahidol.ac.th</a></li>
							</ul>

							<hr />

							<h4>Business <strong>Hours</strong></h4>
							<ul class="list-unstyled">
								<li><i class="fa fa-time"></i> Monday - Friday 9am to 5pm</li>
								<li><i class="fa fa-time"></i> Saturday - Sunday Closed</li>
							</ul>

						</div>

					</div>

				</div>
			</div>
			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<h4>About Us</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos... <a class="btn-flat btn-xs" href="#">View More <i class="fa fa-arrow-right"></i></a></p>
							<hr class="light">
							<div class="row">
								<div class="col-md-3">
									<h5>About us</h5>
									<ul class="list icons list-unstyled">
										<li><i class="fa fa-caret-right"></i> <a href="blog-full-width.html">History</a></li>
										<li><i class="fa fa-caret-right"></i> <a href="blog-large-image.html">Mission</a></li>
										<li><i class="fa fa-caret-right"></i> <a href="blog-medium-image.html">Fact and Figures</a></li>
										<li><i class="fa fa-caret-right"></i> <a href="blog-post.html">Location and Map</a></li>
										<li><i class="fa fa-caret-right"></i> <a href="blog-post.html">Contact us</a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<h5>News/Events</h5>
									<ul class="list icons list-unstyled">
										<li><i class="fa fa-caret-right"></i> <a href="page-full-width.html">Latest News</a></li>
										<li><i class="fa fa-caret-right"></i> <a href="page-left-sidebar.html">Announcement</a></li>
										<li><i class="fa fa-caret-right"></i> <a href="page-right-sidebar.html">Activities</a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<h5>Programs</h5>
									<ul class="list icons list-unstyled">
										<li><i class="fa fa-caret-right"></i> <a href="portfolio-2-columns.html">Doctor of Philosophy in Polymer Science and Technology (International Program)</a></li>
										<li><i class="fa fa-caret-right"></i> <a href="portfolio-3-columns.html">Master of Science in Polymer Science and Technology (International Program)</a></li>
										<li><i class="fa fa-caret-right"></i> <a href="portfolio-4-columns.html">Admission</a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<h5>People</h5>
									<ul class="list icons list-unstyled">
										<li><i class="fa fa-caret-right"></i> <a href="page-team.html">Faculty</a></li>
										<li><i class="fa fa-caret-right"></i> <a href="page-services.html">Supporting Staff</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<h5 class="short">Contact Us</h5>
							<span class="phone">(+662) 123-4567</span>
							<p class="short">Fax: (+662) 987-6543</p>
							<ul class="list icons list-unstyled push-top">
								<li><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, Thailand</li>
								<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
							</ul>
							<div class="social-icons push-top">
								<ul class="social-icons">
									<li class="facebook"><a title="Facebook" rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com/">Facebook</a></li>
									<li class="twitter"><a title="Twitter" rel="tooltip" data-placement="bottom" target="_blank" href="http://www.twitter.com/">Twitter</a></li>
									<li class="linkedin"><a title="Linkedin" rel="tooltip" data-placement="bottom" target="_blank" href="http://www.linkedin.com/">Linkedin</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<p>Copyright &copy; 2014. Polymer Science and Technology Program Department of Chemistry,<br>Faculty of Science, Mahidol University, THAILAND</p>
							</div>
							<div class="col-md-4">
								<nav id="sub-menu">
									<ul>
										<li><a href="<?php echo site_url(); ?>">EN</a></li>
										<li><a href="<?php echo site_url(); ?>">TH</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<script src="<?php echo base_url('assets/frontend/vendor/jquery/jquery.js'); ?>"></script>
		<script src="<?php echo base_url('assets/frontend/vendor/jquery.appear/jquery.appear.js'); ?>"></script>
		<script src="<?php echo base_url('assets/frontend/vendor/jquery.easing/jquery.easing.js'); ?>"></script>
		<script src="<?php echo base_url('assets/frontend/vendor/jquery-cookie/jquery-cookie.js'); ?>"></script>
		<script src="<?php echo base_url('assets/frontend/vendor/bootstrap/bootstrap.js'); ?>"></script>
		<script src="<?php echo base_url('assets/frontend/vendor/common/common.js'); ?>"></script>
		<script src="<?php echo base_url('assets/frontend/vendor/jquery.validation/jquery.validation.js'); ?>"></script>
		<script src="<?php echo base_url('assets/frontend/vendor/jquery.stellar/jquery.stellar.js'); ?>"></script>
		<script src="<?php echo base_url('assets/frontend/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js'); ?>"></script>
		<script src="<?php echo base_url('assets/frontend/vendor/jquery.gmap/jquery.gmap.js'); ?>"></script>
		<script src="<?php echo base_url('assets/frontend/vendor/twitterjs/twitter.js'); ?>"></script>
		<script src="<?php echo base_url('assets/frontend/vendor/isotope/jquery.isotope.js'); ?>"></script>
		<script src="<?php echo base_url('assets/frontend/vendor/owlcarousel/owl.carousel.js'); ?>"></script>
		<script src="<?php echo base_url('assets/frontend/vendor/jflickrfeed/jflickrfeed.js'); ?>"></script>
		<script src="<?php echo base_url('assets/frontend/vendor/magnific-popup/jquery.magnific-popup.js'); ?>"></script>
		<script src="<?php echo base_url('assets/frontend/vendor/vide/jquery.vide.js'); ?>"></script>
		<script src="<?php echo base_url('assets/frontend/js/theme.js'); ?>"></script>
		<script src="<?php echo base_url('assets/frontend/vendor/circle-flip-slideshow/js/jquery.flipshow.js'); ?>"></script>
		<script src="<?php echo base_url('assets/frontend/vendor/nivo-slider/jquery.nivo.slider.js'); ?>"></script>
		<script src="<?php echo base_url('assets/frontend/js/views/view.home.js'); ?>"></script>
		<script src="<?php echo base_url('assets/frontend/js/custom.js'); ?>"></script>
		<script src="<?php echo base_url('assets/frontend/js/theme.init.js'); ?>"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script>
			var mapMarkers = [{
				address: "Mahidol University",
				html: "<strong>Polymer Science and Technology | MU</strong>",
				icon: {
					image: "./assets/frontend/img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = 40.75198;
			var initLongitude = -73.96978;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: true,
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 16
			};

			var map = $("#googlemaps").gMap(mapSettings);

			// Map Center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$("#googlemaps").gMap("centerAt", options);
			}

		</script>
	</body>
</html>