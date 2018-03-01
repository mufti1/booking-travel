<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			User
			<small>Data User</small>
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
						<a href="<?php echo base_url('user/tambah') ?>"><button type="button" class="btn btn-primary top_button"><span class="glyphicon glyphicon-plus"></span> </button></a>
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
									<th>Id User</th>
									<th>Username</th>
									<th>Fullname</th>
									<th>Level</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								
								<?php foreach ($user as $data) { ?>
								<tr>
									<td><?php echo $data->id_user ?></td>
									<td><?php echo $data->username ?></td>
									<td><?php echo $data->fullname ?></td>
									<td><?php echo $data->level ?></td>
									<td><a href="<?php echo base_url('user/view_edit/'.$data->id_user) ?>" class="btn btn-primary btn-xs">Edit</a> <a href="<?php echo base_url('user/hapus/'.$data->id_user) ?>" class="btn btn-danger btn-xs">Hapus</a></td>
									
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
