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
			<div class="col-md-12">
				<div class="blog-posts">
					<?php
						foreach ($content_list as $content) :
						$image_list = explode('|',$content['content_media']);
					?>
					<article>
						<div class="post-image">
							<div class="owl-carousel" data-plugin-options='{"items":1}'>
								<?php foreach ($image_list as $image) : ?>
								<div>
									<div class="img-thumbnail">
										<img class="img-responsive" src="<?php echo base_url('assets/img/blog/'.$image); ?>" alt="">
									</div>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
						<div class="post-content">
							<h3 style="margin-bottom: 10px;"><?php echo $content['content_header']; ?></h3>
							<div class="set-style-by-js"><?php echo $content['content_body']; ?></div>
						</div>
					</article>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>