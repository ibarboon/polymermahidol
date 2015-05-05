<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<!--[if gt IE 9]><!--><html><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<?php
			foreach ($html_meta_list as $html_meta) {
				echo ($html_meta['option_key'] === 'title')? "<title>$html_meta[option_value]</title>": "<meta name=\"$html_meta[option_key]\" content=\"$html_meta[option_value]\" >";
			}
		?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light">
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
											echo '<li class="'.trim($active).'"><a href="'.site_url($current_language.'/'.$nav_main['option_key']).'">'.$nav_main['option_value'].'</a></li>';
										}
									}
								?>
							</ul>
						</nav>
					</div>
				</div>
			</header>