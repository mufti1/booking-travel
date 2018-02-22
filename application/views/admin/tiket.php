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

		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Hover Data Table</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Reservation Code</th>
									<th>Id User</th>
									<th>Price</th>
									<th>Nama</th>
									<th>Id Customer</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($reservation as $data) { ?>
								<tr>
									<td><?php echo $data->reservation_code ?></td>
									<td><?php echo $data->id_user ?>
									</td>
									<td><?php echo $data->price ?></td>
									<td><?php echo $data->name ?></td>
									<td><?php echo $data->id_customer ?></td>
									<td><a href="<?php echo base_url('Admin/terima/'.$data->reservation_code); ?>" class="btn btn-primary">Terima</a>  <a href="<?php echo base_url('Admin/batal/'.$data->reservation_code); ?>" class="btn btn-danger">Batal</a></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div></div>
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
