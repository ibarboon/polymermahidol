<div role="main" class="main">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="nivo-slider">
					<div class="slider-wrapper theme-default">
						<div id="nivoSlider" class="nivoSlider">
							<?php foreach ($slider_list as $slider) : ?>
							<img src="<?php echo base_url('assets/img/slides/'.$slider['option_value']); ?>" data-thumb="<?php echo base_url('assets/img/slides/'.$slider['option_value']); ?>" alt="" />
							<?php endforeach; ?>
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
							<p>POLYMER SCIENCE AND TECHNOLOGY<span>Graduate Program + Reseach <em>Wisdom of the Land</em></span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h2><?php echo $doctor['content_header']; ?></h2>
				<a class="btn btn-primary" href="<?php echo site_url($current_language.'/programs/doctor-of-philosophy-in-polymer-science-and-technology'); ?>"><?php echo ($current_language === 'en')?'View More':'ดูเพิ่มเติม';?></a>
			</div>
			<div class="col-md-4 col-md-offset-1">
				<img alt="Doctor of Philosophy in Polymer Science and Technology (International Program)" src="<?php echo base_url('assets/img/blog/blog-image-1.jpg'); ?>" class="img-responsive">
			</div>
		</div>
		<div class="row">
			<hr class="tall">
		</div>
		<div class="row">
			<div class="col-md-4 ">
				<img alt="Master of Sciencein Polymer Science and Technology (International Program)" src="<?php echo base_url('assets/img/blog/blog-image-2.jpg'); ?>" class="img-responsive">
			</div>
			<div class="col-md-7 col-md-offset-1">
				<h2><?php echo $doctor['content_header']; ?></h2>
				<a class="btn btn-primary" href="<?php echo site_url($current_language.'/programs/master-of-science-in-polymer-science-and-technology'); ?>"><?php echo ($current_language === 'en')?'View More':'ดูเพิ่มเติม';?></a>
			</div>
		</div>
		<div class="row">
			<hr class="tall">
		</div>
		<div class="row">
			<div class="col-md-4">
				<h3>No. of publications</h3>
				<div id="bar-publications"></div>
			</div>
			<div class="col-md-4">
				<h3>No. of studens</h3>
				<div id="donut-studens"></div>
			</div>
			<div class="col-md-4">
				<h3>No. of faculty members</h3>
				<div id="donut-faculty-members"></div>
			</div>
		</div>
	</div>
</div>