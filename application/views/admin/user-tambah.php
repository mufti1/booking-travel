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
   $usr = $user->id_user;
   $newus = substr($usr,1,4);

   $tambah=$newus+1;
   if ($tambah<10) {
    $id="U000".$tambah;
  }
  elseif ($tambah<100) {
    $id="U00".$tambah;
  }
  else if($tambah<1000){
    $id="U0".$tambah;
  }
  else{
    $id="U".$tambah;
  }

  ?>
  <div class="box box-danger">
    <div class="box-header">
      <h3 class="box-title">Tambah User</h3>
    </div>
    <div class="box-body">
      <?php echo form_open('user/tambah'); ?>
      <input type="hidden" name="id_user" value="<?php echo($id); ?>">
      <!-- Date dd/mm/yyyy -->
      <div class="form-group">
        <label>Username:</label>

        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-file"></i>
          </div>
          <input type="text" name="username" class="form-control">
        </div>
        <!-- /.input group -->
      </div>
      
      <!-- /.form group -->
      <!-- phone mask -->
      <div class="form-group">
        <label>Password:</label>

        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-phone"></i>
          </div>
          <input name="password" type="password" class="form-control">
        </div>
        <!-- /.input group -->
      </div>

      <div class="form-group">
        <label>Level:</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
          <select name="level" class="form-control">
            <option value="1">user biasa</option>
            <option value="muftiganteng">admin</option>
          </select>
        </div>
      </div>
      
      <div class="form-group">
        <label>Fullname:</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-map"></i>
          </div>
          <textarea name="fullname" class="form-control"></textarea>
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
