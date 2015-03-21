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
										<?php
											$lang_list = array('en', 'th');
											$content_alias_name = (isset($content_alias_name))? $content_alias_name: NULL;
											foreach ($lang_list as $lang) {
										?>
										<li><a href="<?php echo site_url($lang.'/'.$current_page.'/'.$content_alias_name); ?>"><?php echo strtoupper($lang); ?></a></li>
										<?php } ?>
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
		<?php } ?>
	</body>
</html>