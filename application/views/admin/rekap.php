

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>TravelSist</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3><?php echo $tiket->tiket ?></h3>

            <p>Tiket Masuk</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3><?php echo $hasil->hasil ?></h3>

            <p>Penghasilan Bulan Ini</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?php echo $user->user ?></h3>

            <p>User</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3><?php echo $cust->cust ?></h3>

            <p>Data Customer</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>

    <div class="box box-danger">
      <div class="box-header">
        <h3 class="box-title">Ganti Banner Depan</h3>
      </div>
      <div class="box-body">
        <?php echo form_open('Admin/save', array('enctype'=>'multipart/form-data')); ?>
        <!-- Date dd/mm/yyyy -->
        <div class="form-group">
          <label>Banner 1:</label>

          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-file"></i>
            </div>
            <input type="file" name="file1" class="form-control">
          </div>
          <!-- /.input group -->
        </div>
        <div class="form-group">
          <label>Banner 2:</label>

          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-file"></i>
            </div>
            <input type="file" name="file2" class="form-control">
          </div>
          <!-- /.input group -->
        </div>

        <div class="form-group">
          <label>Banner 3:</label>

          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-file"></i>
            </div>
            <input type="file" name="file3" class="form-control">
          </div>
          <!-- /.input group -->
        </div>
        
        <input type="submit" name="submit" class="btn btn-success">
        <!-- /.form group -->
      </div>
      <?php echo form_close(); ?>
      <!-- /.box-body -->
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
