<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<!--[if gt IE 9]><!--><html><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Polymer Science and Technology Mahidol University</title>
		<meta content="" name="keywords">
		<meta content="" name="description">
		<meta content="" name="author">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/bootstrap.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/fontawesome/css/font-awesome.css'); ?>">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/vendor/owlcarousel/owl.carousel.css'); ?>">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/vendor/owlcarousel/owl.theme.css'); ?>">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/vendor/magnific-popup/magnific-popup.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/theme.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/theme-blog.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/theme-elements.css'); ?>">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/vendor/circle-flip-slideshow/css/component.css'); ?>">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/vendor/nivo-slider/nivo-slider.css'); ?>">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/vendor/nivo-slider/default/default.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/skins/default.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom.css'); ?>">
		<!--[if IE]>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/ie.css'); ?>">
		<![endif]-->
		<script src="<?php echo base_url('assets/vendor/modernizr/modernizr.js'); ?>"></script>
		<!--[if lte IE 8]>
			<script src="<?php echo base_url('assets/vendor/respond/respond.js'); ?>"></script>
			<script src="<?php echo base_url('assets/vendor/excanvas/excanvas.js'); ?>"></script>
		<![endif]-->
	</head>
	<body>
		<div class="body">
			<header id="header">
				<div class="container">
					<h1 class="logo">
						<a href="<?php echo site_url(); ?>">
							<img alt="Polymer Science and Technology Mahidol University" width="222" height="60" data-sticky-width="111" data-sticky-height="30" src="<?php echo base_url('assets/img/test-logo.png'); ?>">
						</a>
					</h1>
					<div class="search">
						<form id="searchForm" action="<?php echo site_url('search'); ?>" method="post">
							<div class="input-group">
								<input type="text" class="form-control search" name="q" placeholder="<?php echo ($current_language === 'en')? 'Search': 'ค้นหา'; ?>..." required>
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</form>
					</div>
					<nav>
						<ul class="nav nav-pills nav-top">
							<?php foreach ($nav_top_list as $nav_top) { ?>
							<li>
								<a href="<?php echo site_url($current_language.'/'.$nav_top['option_key']); ?>"><i class="fa fa-angle-right"></i><?php echo $nav_top['option_value']; ?></a>
							</li>
							<?php } ?>
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
								<?php
									foreach ($nav_main_list as $nav_main) {
										$active = ($nav_main['option_key'] === $current_page)? ' active': '';
										if (count($nav_main['dropdown_list']) > 0) {
											echo '<li class="dropdown'.$active.'">';
											echo '<a href="javascript: void(0);" class="dropdown-toggle">';
											echo $nav_main['option_value'];
											echo '<i class="icon icon-angle-down"></i>';
											echo '</a>';
											echo '<ul class="dropdown-menu">';
											foreach ($nav_main['dropdown_list'] as $dropdown) {
												echo '<li>';
												echo '<a href="'.site_url($current_language.'/'.$nav_main['option_key'].'/'.$dropdown['option_key']).'">'.$dropdown['option_value'].'</a>';
												echo '</li>';
											}
											echo '</ul>';
											echo '</li>';
										} else {
											if (strpos($nav_main['option_key'], 'www') > 0) {
												echo '<li class="'.trim($active).'"><a href="'.$nav_main['option_key'].'">'.$nav_main['option_value'].'</a></li>';
											} else {
												echo '<li class="'.trim($active).'"><a href="'.site_url($current_language.'/'.$nav_main['option_key']).'">'.$nav_main['option_value'].'</a></li>';
											}
										}
									}
								?>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			<?php $this->load->view($sub_view); ?>
			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<h4><?php echo ($current_language === 'en')? 'About Us': 'เกี่ยวกับเรา'; ?></h4>
							<?php
								echo substr($history['content_body'], 0, strpos($history['content_body'],'</p>'));
								$a_text = ($current_language === 'en')? 'View More': 'ดูเพิ่มเติม';
								echo '<a class="btn-flat btn-xs" href="'.site_url($current_language.'/about-us/history').'">'.$a_text.' <i class="fa fa-arrow-right"></i></a></p>';
							?>
							<hr class="light">
							<div class="row">
								<?php
									foreach ($nav_main_list as $nav_main) {
										if (count($nav_main['dropdown_list']) > 0) {
											echo '<div class="col-md-3">';
											echo '<h5>'.$nav_main['option_value'].'</h5>';
											echo '<ul class="list list-unstyled">';
											foreach ($nav_main['dropdown_list'] as $dropdown) {
												echo '<li>';
// 												echo '<a href="'.site_url($current_language.'/'.$nav_main['option_key'].'/'.$dropdown['option_key']).'">'.$dropdown['option_value'].'</a>';
												echo '<i class="fa fa-caret-right"></i> <a href="'.site_url($current_language.'/'.$nav_main['option_key'].'/'.$dropdown['option_key']).'">'.$dropdown['option_value'].'</a>';
												echo '</li>';
											}
											echo '</ul>';
											echo '</div>';
										}
									}
								?>
							</div>
						</div>
						<div class="col-md-3">
							<h4><?php echo ($current_language === 'en')? 'Contact Us': 'ติดต่อเรา'; ?></h4>
							<ul class="contact">
								<?php
									foreach ($contact_us_list as $contact_us) {
										$display = explode('|', $contact_us['option_value']);
										echo "<li><p><i class=\"$display[0]\"></i> <strong>$contact_us[option_key] :</strong> $display[1]</p></li>";
									}
								?>
							</ul>
							<div class="social-icons push-top">
								<ul class="social-icons">
									<?php
										foreach ($social_network_list as $social_network) {
											echo "<li class=\"$social_network[option_key]\"><a title=\"$social_network[option_key]\" rel=\"tooltip\" data-placement=\"bottom\" target=\"_blank\" href=\"http://$social_network[option_value]\">$social_network[option_key]</a></li>";
										}
									?>
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
										<?php foreach ($change_language as $lang => $url) : ?>
										<li><a href="<?php echo site_url($url); ?>"><?php echo strtoupper($lang); ?></a></li>
										<?php endforeach; ?>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<script src="<?php echo base_url('assets/vendor/jquery/jquery.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/jquery.appear/jquery.appear.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/jquery.easing/jquery.easing.js'); ?>"></script>
		<!--script src="<?php echo base_url('assets/vendor/jquery-cookie/jquery-cookie.js'); ?>"></script-->
		<script src="<?php echo base_url('assets/vendor/bootstrap/bootstrap.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/common/common.js'); ?>"></script>
		<!--script src="<?php echo base_url('assets/vendor/jquery.validation/jquery.validation.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/jquery.stellar/jquery.stellar.js'); ?>"></script-->
		<!--script src="<?php echo base_url('assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js'); ?>"></script-->
		<script src="<?php echo base_url('assets/vendor/jquery.gmap/jquery.gmap.js'); ?>"></script>
		<!--script src="<?php echo base_url('assets/vendor/twitterjs/twitter.js'); ?>"></script-->
		<!--script src="<?php echo base_url('assets/vendor/isotope/jquery.isotope.js'); ?>"></script-->
		<script src="<?php echo base_url('assets/vendor/owlcarousel/owl.carousel.js'); ?>"></script>
		<!--script src="<?php echo base_url('assets/vendor/jflickrfeed/jflickrfeed.js'); ?>"></script-->
		<!--script src="<?php echo base_url('assets/vendor/magnific-popup/jquery.magnific-popup.js'); ?>"></script-->
		<!--script src="<?php echo base_url('assets/vendor/vide/jquery.vide.js'); ?>"></script-->
		<script src="<?php echo base_url('assets/js/theme.js'); ?>"></script>
		<!--script src="<?php echo base_url('assets/vendor/circle-flip-slideshow/js/jquery.flipshow.js'); ?>"></script-->
		<script src="<?php echo base_url('assets/vendor/nivo-slider/jquery.nivo.slider.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/views/view.home.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/theme.init.js'); ?>"></script>
		<?php if (isset($content_alias_name) AND $content_alias_name == 'contact-us') { ?>
			<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
			<script type="text/javascript">
				$(function(){
					$('#contact-us-form').submit(function(){
						var action = $(this).attr('action');
						console.log('action : ' + action);
						console.log($(this).serialize());
						$.post(action, $(this).serialize(), function(responseMessage){
							console.log('responseMessage : ' + responseMessage);
							if (responseMessage) {
								$('#contact-success').show();
							} else {
								$('#contact-error').show();
							}
						});
						return false;
					});
				});
			</script>
			<script>
				var mapMarkers = [{
					address: "Mahidol University",
					html: "<strong>Polymer Science and Technology | MU</strong>",
					icon: {
						image: "./assets/img/pin.png",
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
		<?php } else if ((isset($current_page) AND $current_page === 'home') OR $content_alias_name === 'fact-and-figures') { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/morris.css'); ?>">
		<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
		<script src="<?php echo base_url('assets/js/morris.min.js'); ?>"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				if ($('#bar-publications').length > 0) {
					Morris.Bar({
						element: 'bar-publications',
						data: [
							{ year: '2010', publications: 45 },
							{ year: '2011', publications: 25 },
							{ year: '2012', publications: 54 },
							{ year: '2013', publications: 35 },
							{ year: '2014', publications: 31 }
						],
						xkey: 'year',
						ykeys: ['publications'],
						labels: 'Publications'
					});
				}

				if ($('#donut-studens').length > 0) {
					Morris.Donut({
						element: 'donut-studens',
						data: [
							{ label: 'M.Sc.', value: 27 },
							{ label: 'Ph.D.', value: 25 }
						]
					});
				}

				if ($('#donut-faculty-members').length > 0) {
					Morris.Donut({
						element: 'donut-faculty-members',
						data: [
							{ label: 'Professsors', value: 2 },
							{ label: 'Associate Professors', value: 5 },
							{ label: 'Assistant Professors', value: 6 },
							{ label: 'Lecturer', value: 1 }
						]
					});
				}
			});
		</script>
		<?php } ?>
	</body>
</html>