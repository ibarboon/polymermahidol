<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<?php foreach ($css_list as $css) : ?>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/'.$css); ?>">
		<?php endforeach; ?>
		<link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
		<?php foreach ($js_list as $js) : ?>
		<script type="text/javascript" src="<?php echo base_url('assets/js/'.$js); ?>"></script>
		<?php endforeach; ?>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Sign in</h3>
						</div>
						<div class="panel-body">
							<form action="<?php echo site_url('admin/users/signin'); ?>" accept-charset="utf-8" method="post" role="form">
								<div class="form-group" style="margin-bottom: 20px;">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="fa fa-fw fa-user"></i>
										</span>
										<input type="text" name="in-user-login" placeholder="Username" class="form-control">
									</div>
								</div>
								<div class="form-group" style="margin-bottom: 20px;">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="fa fa-fw fa-lock"></i>
										</span>
										<input type="password" name="in-user-password" placeholder="Password" class="form-control">
									</div>
								</div>
								<p class="text-right">
									<button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-sign-in"></i> Sign in</button>
								</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>