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
				<div class="tabs">
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
							<a href="#master" data-toggle="tab" class="text-center">ฐานข้อมูลนักศึกษาระดับปริญญาโท</a>
						</li>
						<li>
							<a href="#doctor" data-toggle="tab" class="text-center">ฐานข้อมูลนักศึกษาระดับปริญญาเอก</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="master" class="tab-pane active">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>ปีการศึกษา</th>
										<th>ชื่อ</th>
									</tr>
								</thead>
								<tbody>
									<?php if ( isset( $content_list['alumni_master'] ) ) : ?>
										<?php foreach ( $content_list['alumni_master'] as $alumni ) : ?>
										<tr>
											<td><?php echo $alumni['year']; ?></td>
											<td><?php echo $alumni['name']; ?></td>
										</tr>
										<?php endforeach; ?>
									<?php else : ?>
										<tr>
											<td colspan=2>ไม่พบข้อมูล</td>
										</tr>
									<?php endif; ?>
								</tbody>
							</table>
						</div>
						<div id="doctor" class="tab-pane">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>ปีการศึกษา</th>
										<th>ชื่อ</th>
									</tr>
								</thead>
								<tbody>
									<?php if ( isset( $content_list['alumni_doctor'] ) ) : ?>
										<?php foreach ( $content_list['alumni_doctor'] as $alumni ) : ?>
										<tr>
											<td><?php echo $alumni['year']; ?></td>
											<td><?php echo $alumni['name']; ?></td>
										</tr>
										<?php endforeach; ?>
									<?php else : ?>
										<tr>
											<td colspan=2>ไม่พบข้อมูล</td>
										</tr>
									<?php endif; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>