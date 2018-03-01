<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit User
			<small>Control panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section>
	<section class="content">
		<div class="box box-danger">
			<div class="box-header">
				<h3 class="box-title">Edit User</h3>
			</div>
			<div class="box-body">
				<form action="<?php echo base_url('transportasi/edit/'.$transportasi->id_transportation) ?>" method="post" accept-charset="utf-8">
					<div class="form-group">
						<label>Kode Pesawat</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-user"></i>
							</div>
							<input name="code" type="text" class="form-control" placeholder="Masukan Kode pesawat" value="<?php echo $transportasi->code ?>">
						</div>
					</div>

					<div class="form-group">
						<label>Nama Pesawat</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-user"></i>
							</div>
							<input name="armada" type="text" class="form-control" placeholder="Masukan Nama Pesawat" value="<?php echo $transportasi->armada ?>">
						</div>
					</div>

					<div class="form-group">
						<label>Banyak Kursi</label>

						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-phone"></i>
							</div>
							<input name="seat_qty" type="text" class="form-control" value="<?php echo $transportasi->seat_qty ?>">
						</div>
						<!-- /.input group -->
					</div>

					<input type="submit" name="submit" class="btn btn-success">
					<!-- /.form group -->
				</form></div>
				<!-- /.box-body -->
			</div>
			<!-- <?php
			$startDate = "2018-02-02";
			$endDate = "2018-02-22";
			$time = "16:55:00";
			for($i = strtotime($startDate); $i <= strtotime($endDate); $i = strtotime('+1 week', $i)){
				$data = date('Y-m-d', $i).' '.$time;
				echo($data)."<br>";
			}
			?> -->
		</section>
	</div>

	<!-- /.content-wrapper -->
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
			<b>Version</b> 2.4.0
		</div>
		<strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
		reserved.
	</footer>
</div>
