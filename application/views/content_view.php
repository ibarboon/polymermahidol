<div role="main" class="main">
	<section class="page-top">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<?php foreach ($breadcrumb_list as $breadcrumb) { ?>
						<li><?php echo $breadcrumb; ?></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h2><?php echo $content_list[0]['content_header']; ?></h2>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<?php if ($content_alias_name !== 'fact-and-figures') : ?>
			<div class="col-md-12"><?php echo $content_list[0]['content_body']; ?></div>
			<?php else : ?>
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
			<?php endif; ?>
		</div>
	</div>
</div>