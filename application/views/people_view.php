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
			<div class="col-md-4">
				<div class="thumbnail">
					<img height="300" src="<?php echo base_url('assets/img/'.$content_list[0]['content_media']); ?>" class="img-responsive" alt="">
				</div>
			</div>
			<div class="col-md-8 set-style-by-js">
				<?php
					$people_name = explode(' ', $content_list[0]['content_header']);
				?>
				<h2 class="shorter"><strong><?php echo $people_name[0]; ?></strong> <?php echo $people_name[1]; ?></h2>
				<?php echo $content_list[0]['content_body']; ?>
			</div>
		</div>
	</div>
</div>