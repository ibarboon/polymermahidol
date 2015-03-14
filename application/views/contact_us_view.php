<div role="main" class="main">
	<section class="page-top">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<?php
							if ($current_language === 'en') {
								$breadcrumb_list = array('About Us', 'Contact Us');
							} else {
								$breadcrumb_list = array('เกี่ยวกับเรา', 'ติดต่อเรา');
							}
							foreach ($breadcrumb_list as $breadcrumb) {
						?>
						<li><?php echo $breadcrumb; ?></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h2><?php echo $breadcrumb_list[1]; ?></h2>
				</div>
			</div>
		</div>
	</section>
	<div id="googlemaps" class="google-map"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="alert alert-success hidden" id="contact-success">
					<strong>Success!</strong> Your message has been sent to us.
				</div>
				<div class="alert alert-danger hidden" id="contact-error">
					<strong>Error!</strong> There was an error sending your message.
				</div>
				<form id="contact-us-form" action="<?php echo site_url('about_us/do_send_mail'); ?>" method="POST">
					<div class="row">
						<div class="form-group">
							<div class="col-md-6">
								<label><?php echo ($current_language === 'en')? 'Your name': 'ชื่อผู้ติดต่อ'; ?> *</label>
								<input type="text" class="form-control" name="input-name" required>
							</div>
							<div class="col-md-6">
								<label><?php echo ($current_language === 'en')? 'Your email address': 'อีเมล์ผู้ติดต่อ'; ?> *</label>
								<input type="email" value="" class="form-control" name="input-email" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<label><?php echo ($current_language === 'en')? 'Subject': 'ช่ือเรื่อง'; ?> *</label>
								<input type="text" class="form-control" name="input-subject" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<label><?php echo ($current_language === 'en')? 'Message': 'ข้อความ'; ?> *</label>
								<textarea rows="10" class="form-control" name="input-message" required></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="submit" value="<?php echo ($current_language === 'en')? 'Send Message': 'ส่งข้อความ'; ?>" class="btn btn-primary">
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-6">
				<h4><?php echo ($current_language === 'en')? 'Office': 'สำนักงาน'; ?></h4>
				<ul class="list-unstyled">
					<?php
						foreach ($contact_us_list as $contact_us) {
							$display = explode('|', $contact_us['option_value']);
							echo "<li><i class=\"$display[0]\"></i> <strong>$contact_us[option_key] :</strong> $display[1]</li>";
						}
					?>
				</ul>
				<hr />
				<h4><?php echo ($current_language === 'en')? 'Office Hours': 'เวลาทำการ'; ?></h4>
				<ul class="list-unstyled">
					<li><i class="fa fa-time"></i> <?php echo ($current_language === 'en')? 'Monday - Friday': 'จันทร์ - ศุกร์'; ?> : 09.00 - 17.00</li>
					<li><i class="fa fa-time"></i> <?php echo ($current_language === 'en')? 'Saturday - Sunday : Closed': 'เสาร์ - อาทิตย์ : ปิดทำการ'; ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>