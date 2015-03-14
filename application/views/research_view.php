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
								<li class="dropdown">
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
								<li class="active">
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
									<li class="active">Research</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Research</h2>
							</div>
						</div>
					</div>
				</section>
				<div class="container">

					<h2>Research</h2>

					<div class="row">
						<div class="col-md-12">
							<p class="lead">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non pulvinar. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut eu risus enim, ut pulvinar lectus. Sed hendrerit nibh metus.
							</p>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">

							<div class="toogle" data-plugin-toggle>
								<section class="toggle active">
									<label>High strength polymer fibres</label>
									<div class="toggle-content">
										<p>Structure, properties and production of high strength fibres from low cost commodity polymers; Applications of high strength fibres for the production of light-weight composites and others, e.g. bullet proof armour.</p>
									</div>
								</section>

								<section class="toggle">
									<label>Bio-based and biodegradable polymers</label>
									<div class="toggle-content">
									<p>Compounding of biodegradable polymers; Biofilms for packaging application; Bio-based polymer composites and nano-composites</p>
									</div>
								</section>

								<section class="toggle">
									<label>Polymer blends and composites</label>
									<div class="toggle-content">
										<p>Mixing technology and compatibilisation for structural control of polymer blends and filled polymer blends and their properties, both plastics and rubbers; Reactive extrusion and blending; Particulate composites and nano-composites; Filler surface modifications and characterisation of interfaces</p>
									</div>
								</section>

								<section class="toggle">
									<label>Structures and properties of elastomers</label>
									<div class="toggle-content">
										<p>Characterisation of molecular and network structures and their relationships with engineering properties of elastomers, particularly those of natural rubber; Compounding and processing to achieve the required structures and properties; Chemical modifications of elastomers for novel properties.</p>
									</div>
								</section>

								<section class="toggle">
									<label>Polymer nanotechnology</label>
									<div class="toggle-content">
										<p>Structure, composition and modifications of natural rubber latex based on nanotechnology, leading to innovative, value-added rubber products; Novel utilisation of polymer colloids, Magnetic nanoparticles and nanofibers for biomedical applications of polymers.</p>
									</div>
								</section>

								<section class="toggle">
									<label>Tailor-made polymer surfaces and coatings</label>
									<div class="toggle-content">
										<p>Design and engineering of polymer surfaces including coatings for novel properties, e.g. superhydrophobic, antimicrobial, scratch resistant and corrosion resistant surfaces.</p>
									</div>
								</section>

							</div>

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
	</body>
</html>