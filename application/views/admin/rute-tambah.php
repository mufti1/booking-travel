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
				<h3 class="box-title">Tambah Rute</h3>
			</div>
			<div class="box-body">
				<form action="http://localhost/travel/rute/tambah" method="post" accept-charset="utf-8">
					<div class="form-group">
						<label>Dari</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-user"></i>
							</div>
							<input name="rute_from" type="text" class="form-control" placeholder="Purwokerto(PWT)-Soedirman">
						</div>
					</div>
					<div class="form-group">
						<label>Ke</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-user"></i>
							</div>
							<input name="rute_to" type="text" class="form-control" placeholder="Banjarnegara(BJR)-Nasution">
						</div>
					</div>
					<div class="form-group">
						<label>Nama Armada</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-user"></i>
							</div>
							<select name="id_transportation" class="form-control">
								<?php foreach ($trans as $data) {?>
								<option value="<?php echo $data->id_transportation ?>"><?php echo $data->armada ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<!-- /.form group -->
					<!-- phone mask -->
					<div class="form-group">
						<label>Harga:</label>

						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-phone"></i>
							</div>
							<input name="price" type="text" class="form-control" placeholder="200000">
						</div>
						<!-- /.input group -->
					</div>

					<div class="alert alert-warning col-md-12">
						<div class="form-group">
							<input type="radio" name="aksi" value="manual" onchange="myfunct();" checked>Manual
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Tanggal Berangkat:</label>

								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" name="depart_date" class="form-control pull-right" id="datepicker1">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="bootstrap-timepicker" style="color: #333 !important;">
								<div class="form-group">
									<label style="color: white;">Jam Berangkat:</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-clock-o"></i>
										</div>
										<input type="text" name="depart_time" class="form-control timepicker pull-right" id="depart">
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Tanggal Sampai:</label>

								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" name="arrive_date" class="form-control pull-right" id="datepicker2">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="bootstrap-timepicker" style="color: #333 !important;">
								<div class="form-group">
									<label style="color: white;">Jam Sampai:</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-clock-o"></i>
										</div>
										<input type="text" name="arrive_time" class="form-control timepicker pull-right" id="arrive">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<input type="radio" name="aksi" value="otomatis" onchange="auto();">Otomatis
						</div>
						<script type="text/javascript">
							function myfunct(){
								document.getElementById('depart').disabled = false;
								document.getElementById('arrive').disabled = false;
								document.getElementById('datepicker1').disabled = false;
								document.getElementById('datepicker2').disabled = false;
								document.getElementById('datepicker3').disabled = true;
								document.getElementById('datepicker4').disabled = true;
								document.getElementById('jamber').disabled = true;
								document.getElementById('jamsam').disabled = true;
								document.getElementById('aksi').disabled = true;
							}

							function auto(){
								document.getElementById('depart').disabled = true;
								document.getElementById('arrive').disabled = true;
								document.getElementById('datepicker1').disabled = true;
								document.getElementById('datepicker2').disabled = true;
								document.getElementById('datepicker3').disabled = false;
								document.getElementById('datepicker4').disabled = false;
								document.getElementById('jamber').disabled = false;
								document.getElementById('jamsam').disabled = false;
								document.getElementById('aksi').disabled = false;
							}
						</script>
						<div class="col-md-6">
							<div class="form-group">
								<label>Dari Tanggal:</label>

								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" name="dari" class="form-control pull-right" id="datepicker3" disabled>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Sampai Tanggal:</label>

								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" name="sampai" class="form-control pull-right" id="datepicker4" disabled>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="bootstrap-timepicker" style="color: #333 !important;">
								<div class="form-group">
									<label style="color: white;">Jam Berangkat:</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-clock-o"></i>
										</div>
										<input type="text" name="depart_time_period" class="form-control timepicker pull-right" id="jamber" disabled>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="bootstrap-timepicker" style="color: #333 !important;">
								<div class="form-group">
									<label style="color: white;">Jam Sampai:</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-clock-o"></i>
										</div>
										<input type="text" name="arrive_time_period" class="form-control timepicker pull-right" id="jamsam" disabled>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label>Setiap</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<select name="setiap" class="form-control" id="aksi" disabled>
										<option value="day">Hari</option>
										<option value="week">Minggu</option>
									</select>
								</div>
							</div>
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
