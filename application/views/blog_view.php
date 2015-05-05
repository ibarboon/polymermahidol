<div role="main" class="main">
	<section class="page-top">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<?php foreach ($breadcrumb_list as $breadcrumb) { ?>
						<li><?php echo ucwords( str_replace( '-' , ' ' , $breadcrumb ) ); ?></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h2><?php echo ucwords( str_replace( '-' , ' ' , end( $breadcrumb_list ) ) ); ?></h2>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="blog-posts">
					<?php foreach ($content_list as $content) { ?>
					<article class="post post-large">
						<div class="post-image">
							<img class="img-thumbnail" src="<?php echo base_url('assets/img/blog/'.$content['content_media']); ?>" alt="">
						</div>
						<div class="post-date">
							<span class="day"><?php echo (int) date_format( date_create( $content['created'] ) , 'd' ); ?></span>
							<span class="month"><?php echo date_format( date_create( $content['created'] ) , 'M' ); ?></span>
						</div>
						<div class="post-content">
							<h2><?php echo $content['content_header']; ?></h2>
							<div><?php echo $content['content_body']; ?></div>
						</div>
					</article>
					<?php } ?>
				</div>
			</div>
			<!--div class="col-md-3">
				<aside class="sidebar">
					<h4><?php echo str_replace('/', ($current_language === 'en')? ' and ': ' และ ', reset($breadcrumb_list)) ; ?></h4>
					<ul class="nav nav-list primary push-bottom">
						<?php foreach($nav_list as $nav) { ?>
						<li><a href="<?php echo site_url($current_language.'/news-events/'.$nav['option_key']); ?>"><?php echo $nav['option_value']; ?></a></li>
						<?php } ?>
					</ul>
				</aside>
			</div-->
		</div>
	</div>
</div>