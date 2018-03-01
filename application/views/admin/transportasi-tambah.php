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
   <?php 
  // cek buat user terbesar
   $usr = $kode->id_transportation;
   $newus = substr($usr,1,4);

   $tambah=$newus+1;
   if ($tambah<10) {
    $id="T000".$tambah;
  }
  elseif ($tambah<100) {
    $id="T00".$tambah;
  }
  else if($tambah<1000){
    $id="T0".$tambah;
  }
  else{
    $id="T".$tambah;
  }

  ?>
  <div class="box box-danger">
    <div class="box-header">
      <h3 class="box-title">Tambah Transportasi</h3>
    </div>
    <div class="box-body">
      <?php echo form_open('Transportasi/tambah'); ?>
      <input type="hidden" name="id_transportation" value="<?php echo($id); ?>">
      <!-- Date dd/mm/yyyy -->
      <div class="form-group">
        <label>Nama Pesawat:</label>

        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-file"></i>
          </div>
          <input type="text" name="armada" class="form-control">
        </div>
        <!-- /.input group -->
      </div>
      
      <!-- /.form group -->
      <!-- phone mask -->
      <div class="form-group">
        <label>Kode Pesawat:</label>

        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-phone"></i>
          </div>
          <input name="code" type="text" class="form-control">
        </div>
        <!-- /.input group -->
      </div>
      
      <div class="form-group">
        <label>Banyak Kursi:</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-map"></i>
          </div>
          <textarea name="seat_qty" class="form-control"></textarea>
        </div>
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
