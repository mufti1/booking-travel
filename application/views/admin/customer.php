

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <?php
    $success_msg= $this->session->flashdata('success_msg');
    $error_msg= $this->session->flashdata('error_msg');

    if($success_msg){
      ?>
      <div class="alert alert-success">
        <?php echo $success_msg; ?>
      </div>
      <?php
    }
    if($error_msg){
      ?>
      <div class="alert alert-danger">
        <?php echo $error_msg; ?>
      </div>
      <?php
    }
    ?>
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
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Responsive Hover Table</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody><tr>
              <th>Id Customer</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Phone</th>
              <th>Jenis Kelamin</th>
              <th colspan="2">Action</th>
            </tr>
            <?php foreach ($customer as $data) { ?>
            <tr>
              <td><?php echo $data->id_customer ?></td>
              <td><?php echo $data->name ?></td>
              <td><?php echo $data->address ?></td>
              <td><?php echo $data->phone ?></td>
              <td><?php echo $data->gender ?></td>
              <td>edit</td>
              <td><a href="<?php echo base_url('/Admin/hapus_customer/').$data->id_customer; ?>">Hapus</a></td>
            </tr>
            <?php } ?>
          </tbody></table>
          <div class="text-center">
            <?php
            echo $this->pagination->create_links();
            ?>
          </div>
          
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
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
<!-- ./wrapper -->
