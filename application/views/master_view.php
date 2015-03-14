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
								<li class="dropdown active">
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
									<li><a href="javascript: void(0);">Programs</a></li>
									<li class="active">Master of Science  Program in  Polymer Science and Technology (International Program)</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Master of Science  Program in  Polymer Science and Technology (International Program)</h2>
							</div>
						</div>
					</div>
				</section>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>#</th>
										<th colspan="2">Curriculum Structure</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Required courses</td>
										<td>16 credits</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Elective courses not less than</td>
										<td>8 credits</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Thesis</td>
										<td>12 credits</td>
									</tr>
									<tr>
										<td></td>
										<td><strong>Total not less than</strong></td>
										<td><strong>36 credits</strong></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<h4>Required courses 16 credits</h4>
							<dl>
								<dt>SCCH 523: Polymer Chemistry (3 credits)</dt>
								<dd>Polymerisation reaction: mechanism and kinetics, molecular structure and molecular weight control, copolymerisation, polymerisation process, chemical reaction of polymers, polymer degradation, polymer solution: theory and properties, phase equilibria, phase diagrams and their applications</dd>
								<dt>SCCH 524: Polymer Characterisation (1 credit)</dt>
								<dd>Molecular structure characterisation of polymer, solubility test, polymer identification, chemical analysis, spectroscopic technique, molecular size: end-group analysis, colligative analysis, viscometry, light-scattering technique, ultracentrifugation technique, gel-permeation chromatography, molecular organization: molecular order, thermal analysis, X-ray technique, microscopy technique, Fourier-transform Infrared and Raman technique, nuclear magnetic resonance spectroscopy, cross-linked network, chemical method</dd>
								<dt>SCCH 596: Polymer Rheology and Processing (2 credits)</dt>
								<dd>Definition of rheology, types of deformation, Newtonian and non-Newtonian behaviour, viscoelastic properties, measurement of flow properties, oscillatory shear flow, steady shear flow, factors affecting flow behaviour of polymer melts, basic knowledge on polymer mixing and processing</dd>
								<dt>SCCH 543: Polymer Physics (3 credits)</dt>
								<dd>Molecular structure of polymers, packing of polymer molecules in solid state,  crystal structure,  polymer morphology:  shapes of polymer crystal,  crystallisation and melting of polymers,  oriented structure,  viscoelastic properties:  creep, stress relaxation and dynamic properties, transition temperature of polymers,  time-temperature equivalence,  mechanical properties:  stress-strain curves,  failure,  breaking phenomena:  brittle failure, crazing,  brittle-ductile transition</dd>
								<dt>SCCH 565: Techniques in Polymer Science (2 credits)</dt>
								<dd>Monomer purification, polymer synthesis by radical polymerization and emulsion polymerization, polymer molecular weight determination by gel permeation chromatography, thermal properties measurement by differential scanning calorimeter and thermal gravimetric analysis, polymer characterisation by X-ray diffraction and Fourier transform infrared spectroscopy, surface property measurement by nano indentation and atomic force microscopy, polymer rheology analysis and mechanical property test </dd>
								<dt>SCCH 588: Polymer Seminar (2 credits)</dt>
								<dd>Interested topics in polymer science and technology</dd>
								<dt>SCID: 516 Biostatistics (3 credits)</dt>
								<dd>Scientific methods and biostatistical analysis, principles and application of statistical methods to design experimental protocols and analyse data, probability distributions, estimation, hypothesis testing, chi-square test and analysis of frequencies, regression and correlation analysis, analysis of variance, analysis of covariance, probit analysis, non-parametric statistics, use of statistical packages</dd>
							</dl>
							<h4>Elective courses not less than 8 credits</h4>
							<dl>
								<dt>SCCH 526  Polymer Modification3 credits</dt>
								<dd>Polymer modification by physical method, polymer mixing: miscible and immiscible, polymer mixing system with fillers, effect of fillers on polymer properties, reagents for surface modification, polymer composites and polymer system with reinforcing agent, mechanism of reinforcement, high strength fibers, polymer mixing with additives, types of additives, foam polymer, polymer modification by chemical methods</dd>
								<dt>SCCH 527   Polymer Colloids 3 credits</dt>
								<dd>Background, types and importance of colloidal systems, kinetics and techniques in polymer colloid synthesis, mechanism of emulsion polymerization and other polymerizations for polymer colloid synthesis, physical characteristics of polymer latexes : stabilization and coagulation, thermodynamics of surface, surface adsorption and rheological behaviour,  preparation of latex with specific characteristics, characterisations of colloidal particles, applications of polymer latexes, biosynthesis and features of natural rubber latex, modification and application of natural rubber latex.</dd>
								<dt>SCCH 597    Advanced Polymer Processing 3 credits</dt>
								<dd>Polymer mixing and compounding, mixing mechanism, characterisation of mixing, mixing and compounding machinery, functional requirements of polymer compounding machinery, extrusion process- single- and twin-screw extrusion, injection moulding process, blown film process, blow moulding and compression moulding process, processing, polymer structure and properties relationship, reactive processing, new development in polymer processing.</dd>
								<dt>SCCH 550   Rubber Science and Technology 3 credits</dt>
								<dd>Biosynthesis of natural rubber, molecular structure and properties of natural rubber, reaction of natural rubber, novel researches of natural rubber, reinforcement of rubber, mixing of rubber, vulcanisation of rubber, strength and dynamic properties of rubber, rubber blends and thermoplastic elastomers.</dd>
								<dt>SCCH 598   Nanomaterials 3 credits</dt>
								<dd>Basic knowledge on nanotechnology, nanomaterial fabrication, dimensional structures of nanomaterials, nanomaterial characterisation</dd>
								<dt>SCCH 634  Polymer Surfaces 3 credits</dt>
								<dd>Fundamental of surface chemistry and physics, dynamics of polymer surfaces, adhesion and adhesives, friction and wear, other surface-related properties, barrier properties, biocompatibility, modifications of polymer surfaces, surface characterisation methods</dd>
								<dt>SCCH 635   Polymer Blends and Composites 3 credits</dt>
								<dd>Thermodynamics of polymer-polymer miscibility, phase separation process, type and significance of polymer interface, morphology of polymer blends, modification of polymer interface, techniques for characterisation the polymer interfaces, rheology of polymer blends, type of polymer composites and their manufacturing, properties of matrix materials and reinforcements, polymer-fiber adhesion, mechanics of reinforcement of polymer composites, evaluation of interfacial strength of polymer composites.</dd>
							</dl>
							<h4>Thesis 12 credits</h4>
							<dl>
								<dt>SCCH 698 : Thesis (12 credits)</dt>
								<dd>Identifying research proposal. Conducting research with concern of research ethics. Data collection, analysis, interpretation of the result and report the result in terms of thesis.  Presenting and Publishing research in standard journals or a conference’s proceeding.</dd>
							</dl>
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