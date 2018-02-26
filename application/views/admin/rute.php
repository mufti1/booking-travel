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
			Rute
			<small>Data Rute</small>
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
						<?php 
						$succes = $this->session->flashdata('success'); 
						if ($succes) { ?>
						<div class="alert alert-success">
							<?php echo $succes; ?>
						</div>
						<?php } ?>
						<table id="example1" class="table table-bordered table-hover table-striped dataTable" role="grid" aria-describedby="example1_info">
							<thead>
								<tr>
									<th>Id Rute</th>
									<th>Berangkat</th>
									<th>Dari</th>
									<th>Ke</th>
									<th>Sampai</th>
									<th>Harga</th>
									<th>Id Transportasi</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								
								<?php foreach ($rute as $data) { ?>
								<tr>
									<td><?php echo $data->id_rute ?></td>
									<td><?php echo $data->depart_at ?></td>
									<td><?php echo $data->rute_from ?></td>
									<td><?php echo $data->rute_to ?></td>
									<td><?php echo $data->arrival ?></td>
									<td><?php echo $data->price ?></td>
									<td><?php echo $data->id_transportation ?></td>
									<td><a href="<?php echo base_url('rute/view_edit/'.$data->id_rute) ?>" class="btn btn-primary btn-xs">Edit</a> <a href="<?php echo base_url('rute/hapus/'.$data->id_rute) ?>" class="btn btn-danger btn-xs">Hapus</a></td>
									
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
