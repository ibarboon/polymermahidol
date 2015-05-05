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
			<ul class="team-list sort-destination" data-sort-id="team">
				<?php
					foreach ($content_list as $content) :
						$people_name = explode(' ', $content['content_header']);
				?>
				<li class="col-md-3 col-sm-6 col-xs-12 isotope-item">
					<div class="team-item thumbnail">
						<a href="<?php echo site_url($current_language.'/people/'.$content_alias_name.'/'.$content['content_alias_name']); ?>" class="thumb-info team">
							<img class="img-responsive" alt="" src="<?php echo base_url('assets/img/'.$content['content_media']); ?>">
							<span class="thumb-info-title">
								<span class="thumb-info-inner"><?php echo $people_name[0]; ?></span>
								<!--span class="thumb-info-type">CEO</span-->
							</span>
						</a>
						<!--span class="thumb-info-caption">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</p>
						</span-->
					</div>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>