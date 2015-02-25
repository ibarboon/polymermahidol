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
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="nivo-slider">
								<div class="slider-wrapper theme-default">
									<div id="nivoSlider" class="nivoSlider">
										<img src="<?php echo base_url('assets/frontend/img/slides/tmp-slide-1.jpg'); ?>" data-thumb="<?php echo base_url('assets/frontend/img/slides/tmp-slide-1.jpg'); ?>" alt="" />
										<img src="<?php echo base_url('assets/frontend/img/slides/tmp-slide-2.jpg'); ?>" data-thumb="<?php echo base_url('assets/frontend/img/slides/tmp-slide-2.jpg'); ?>" alt="" />
										<img src="<?php echo base_url('assets/frontend/img/slides/tmp-slide-3.jpg'); ?>" data-thumb="<?php echo base_url('assets/frontend/img/slides/tmp-slide-1.jpg'); ?>" alt="" />
										<img src="<?php echo base_url('assets/frontend/img/slides/tmp-slide-4.jpg'); ?>" data-thumb="<?php echo base_url('assets/frontend/img/slides/tmp-slide-2.jpg'); ?>" alt="" />
									</div>
									<div id="htmlcaption" class="nivo-html-caption"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="home-intro home-intro-compact">
								<div class="row">
									<div class="col-md-12">
										<p>The fastest way to grow your business with the leader in <em>Technology.</em><span>Check out our options and features included.</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row center">
						<div class="col-md-12">
							<h2 class="short word-rotator-title">
								Porto is
								<strong class="inverted">
									<span class="word-rotate" data-plugin-options='{"delay": 2000}'>
										<span class="word-rotate-items">
											<span>incredibly</span>
											<span>especially</span>
											<span>extremely</span>
										</span>
									</span>
								</strong>
								beautiful and fully responsive.
							</h2>
							<p class="featured lead">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.
							</p>
						</div>
					</div>
				</div>
				<div class="home-concept">
					<div class="container">
						<div class="row center">
							<span class="sun"></span>
							<span class="cloud"></span>
							<div class="col-md-2 col-md-offset-1">
								<div class="process-image" data-appear-animation="bounceIn">
									<img src="<?php echo base_url('assets/frontend/img/home-concept-item-1.png'); ?>" alt="" />
									<strong>Strategy</strong>
								</div>
							</div>
							<div class="col-md-2">
								<div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="200">
									<img src="<?php echo base_url('assets/frontend/img/home-concept-item-2.png'); ?>" alt="" />
									<strong>Planning</strong>
								</div>
							</div>
							<div class="col-md-2">
								<div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="400">
									<img src="<?php echo base_url('assets/frontend/img/home-concept-item-3.png'); ?>" alt="" />
									<strong>Build</strong>
								</div>
							</div>
							<div class="col-md-4 col-md-offset-1">
								<div class="project-image">
									<div id="fcSlideshow" class="fc-slideshow">
										<ul class="fc-slides">
											<li><a href="#"><img class="img-responsive" src="<?php echo base_url('assets/frontend/img/projects/project-home-1.jpg'); ?>" /></a></li>
											<li><a href="#"><img class="img-responsive" src="<?php echo base_url('assets/frontend/img/projects/project-home-2.jpg'); ?>" /></a></li>
											<li><a href="#"><img class="img-responsive" src="<?php echo base_url('assets/frontend/img/projects/project-home-3.jpg'); ?>" /></a></li>
										</ul>
									</div>
									<strong class="our-work">Our Work</strong>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<hr class="tall" />
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<h2>Our <strong>Features</strong></h2>
							<div class="row">
								<div class="col-sm-6">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-group"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Customer Support</h4>
											<p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-file"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">HTML5 / CSS3 / JS</h4>
											<p class="tall">Lorem ipsum dolor sit amet, adip.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-google-plus"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">500+ Google Fonts</h4>
											<p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-adjust"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Colors</h4>
											<p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-film"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Sliders</h4>
											<p class="tall">Lorem ipsum dolor sit amet, consectetur.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-check"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Icons</h4>
											<p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-bars"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Buttons</h4>
											<p class="tall">Lorem ipsum dolor sit, consectetur adip.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-desktop"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Lightbox</h4>
											<p class="tall">Lorem sit amet, consectetur adip.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<h2>and more...</h2>
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												<i class="fa fa-usd"></i>
												Pricing Tables
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="accordion-body collapse in">
										<div class="panel-body">
											Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												<i class="fa fa-comment"></i>
												Contact Forms
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="accordion-body collapse">
										<div class="panel-body">
											Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
												<i class="fa fa-laptop"></i>
												Portfolio Pages
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="accordion-body collapse">
										<div class="panel-body">
											Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr class="tall" />
					<div class="row center">
						<div class="col-md-12">
							<h2 class="short word-rotator-title">
								We're not the only ones
								<strong>
									<span class="word-rotate" data-plugin-options='{"delay": 2000}'>
										<span class="word-rotate-items">
											<span>excited</span>
											<span>happy</span>
										</span>
									</span>
								</strong>
								about Porto Template...
							</h2>
							<h4 class="lead tall">5,500 customers in 100 countries use Porto Template. Meet our customers.</h4>
						</div>
					</div>
					<div class="row center">
						<div class="owl-carousel" data-plugin-options='{"items": 6, "singleItem": false, "autoPlay": true}'>
							<div>
								<img class="img-responsive" src="<?php echo base_url('assets/frontend/img/logos/logo-1.png'); ?>" alt="">
							</div>
							<div>
								<img class="img-responsive" src="<?php echo base_url('assets/frontend/img/logos/logo-2.png'); ?>" alt="">
							</div>
							<div>
								<img class="img-responsive" src="<?php echo base_url('assets/frontend/img/logos/logo-3.png'); ?>" alt="">
							</div>
							<div>
								<img class="img-responsive" src="<?php echo base_url('assets/frontend/img/logos/logo-4.png'); ?>" alt="">
							</div>
							<div>
								<img class="img-responsive" src="<?php echo base_url('assets/frontend/img/logos/logo-5.png'); ?>" alt="">
							</div>
							<div>
								<img class="img-responsive" src="<?php echo base_url('assets/frontend/img/logos/logo-6.png'); ?>" alt="">
							</div>
							<div>
								<img class="img-responsive" src="<?php echo base_url('assets/frontend/img/logos/logo-7.png'); ?>" alt="">
							</div>
							<div>
								<img class="img-responsive" src="<?php echo base_url('assets/frontend/img/logos/logo-8.png'); ?>" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="map-section">
					<section class="featured footer map">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<div class="recent-posts push-bottom">
										<h2>Latest <strong>Blog</strong> Posts</h2>
										<div class="row">
											<div class="owl-carousel" data-plugin-options='{"items": 1, "autoHeight": true}'>
												<div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">15</span>
																<span class="month">Jan</span>
															</div>
															<h4><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">15</span>
																<span class="month">Jan</span>
															</div>
															<h4><a href="blog-post.html">Lorem ipsum dolor</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
												</div>
												<div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">12</span>
																<span class="month">Jan</span>
															</div>
															<h4><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">11</span>
																<span class="month">Jan</span>
															</div>
															<h4><a href="blog-post.html">Lorem ipsum dolor</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
												</div>
												<div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">15</span>
																<span class="month">Jan</span>
															</div>
															<h4><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">15</span>
																<span class="month">Jan</span>
															</div>
															<h4><a href="blog-post.html">Lorem ipsum dolor</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<h2><strong>What</strong> Client’s Say</h2>
									<div class="row">
										<div class="owl-carousel push-bottom" data-plugin-options='{"items": 1, "autoHeight": true}'>
											<div>
												<div class="col-md-12">
													<blockquote class="testimonial">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.</p>
													</blockquote>
													<div class="testimonial-arrow-down"></div>
													<div class="testimonial-author">
														<div class="img-thumbnail img-thumbnail-small">
															<img src="<?php echo base_url('assets/frontend/img/clients/client-1.jpg'); ?>" alt="">
														</div>
														<p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
													</div>
												</div>
											</div>
											<div>
												<div class="col-md-12">
													<blockquote class="testimonial">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</blockquote>
													<div class="testimonial-arrow-down"></div>
													<div class="testimonial-author">
														<div class="img-thumbnail img-thumbnail-small">
															<img src="<?php echo base_url('assets/frontend/img/clients/client-1.jpg'); ?>" alt="">
														</div>
														<p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
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
	</body>
</html>