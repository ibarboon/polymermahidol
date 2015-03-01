			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<h4><?php echo ($current_language === 'en')? 'About Us': 'เกี่ยวกับเรา'; ?></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos... <a class="btn-flat btn-xs" href="#">View More <i class="fa fa-arrow-right"></i></a></p>
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
												echo '<i class="fa fa-caret-right"></i> <a href="javascript: void(0);">'.$dropdown['option_value'].'</a>';
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
										<li><a href="<?php echo site_url('en/'.$current_page); ?>">EN</a></li>
										<li><a href="<?php echo site_url('th/'.$current_page); ?>">TH</a></li>
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
		<script src="<?php echo base_url('assets/vendor/jquery-cookie/jquery-cookie.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/bootstrap/bootstrap.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/common/common.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/jquery.validation/jquery.validation.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/jquery.stellar/jquery.stellar.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/jquery.gmap/jquery.gmap.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/twitterjs/twitter.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/isotope/jquery.isotope.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/owlcarousel/owl.carousel.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/jflickrfeed/jflickrfeed.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/magnific-popup/jquery.magnific-popup.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/vide/jquery.vide.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/theme.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/circle-flip-slideshow/js/jquery.flipshow.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/nivo-slider/jquery.nivo.slider.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/views/view.home.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/theme.init.js'); ?>"></script>
	</body>
</html>