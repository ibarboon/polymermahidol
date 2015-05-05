<div role="main" class="main">
	<section class="page-top">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<?php foreach ($breadcrumb_list as $breadcrumb) { ?>
						<li><?php echo str_replace('/', ($current_language === 'en')? ' and ': ' และ ', $breadcrumb); ?></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h2><?php echo end($breadcrumb_list); ?></h2>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
					<?php foreach ($content_list as $content) { ?>
							<img class="img-thumbnail" src="<?php echo base_url('assets/img/blog/'.$content['content_media']); ?>" alt="">
							<div class="push-top"><?php echo str_replace('|','', $content['content_body']); ; ?></div>
					<?php } ?>
			</div>
			<div class="col-md-3">
				<aside class="sidebar">
					<h4><?php echo str_replace('/', ($current_language === 'en')? ' and ': ' และ ', reset($breadcrumb_list)) ; ?></h4>
					<ul class="nav nav-list primary push-bottom">
						<?php foreach($nav_list as $nav) { ?>
						<li><a href="<?php echo site_url($current_language.'/news-events/'.$nav['option_key']); ?>"><?php echo $nav['option_value']; ?></a></li>
						<?php } ?>
					</ul>
				</aside>
			</div>
		</div>
	</div>
</div>