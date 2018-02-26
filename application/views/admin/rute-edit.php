<?php 
$level = $this->session->userdata('level');
if ($level != "muftiganteng") {
	redirect('/','refresh');
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard
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
				<h3 class="box-title">Edit Rute</h3>
			</div>
			<div class="box-body">
				<form action="<?php echo base_url('rute/edit/'.$rute->id_rute) ?>" method="post" accept-charset="utf-8">
					<div class="form-group">
						<label>Dari</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-user"></i>
							</div>
							<input name="rute_from" type="text" class="form-control" placeholder="Purwokerto(PWT)-Soedirman" value="<?php echo $rute->rute_from ?>">
						</div>
					</div>

					<div class="form-group">
						<label>Ke</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-user"></i>
							</div>
							<input name="rute_to" type="text" class="form-control" placeholder="Purwokerto(PWT)-Soedirman" value="<?php echo $rute->rute_to ?>">
						</div>
					</div>

					<div class="form-group">
						<label>Harga:</label>

						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-phone"></i>
							</div>
							<input name="price" type="text" class="form-control" placeholder="200000" value="<?php echo $rute->price ?>">
						</div>
						<!-- /.input group -->
					</div>

					<div class="form-group">
						<label>Berangkat:</label>

						<div class="input-group date">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" name="depart_date" class="form-control pull-right" id="datepicker1" value="<?php echo $rute->depart_at ?>">
						</div>
					</div>

					<div class="form-group">
						<label>Sampai:</label>

						<div class="input-group date">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" name="arrive_date" class="form-control pull-right" id="datepicker2" value="<?php echo $rute->arrival ?>">
						</div>
					</div>

					<div class="form-group">
						<label>Nama Armada</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-user"></i>
							</div>
							<select name="id_transportation" class="form-control">
								<option value="<?php echo $rute->id_transportation ?>"><?php echo $rute->armada ?></option>
								option
								<?php foreach ($trans as $data) {?>
								<option value="<?php echo $data->id_transportation ?>"><?php echo $data->armada ?></option>
								<?php } ?>
							</select>
						</div>
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
