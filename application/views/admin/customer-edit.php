

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
      <h3 class="box-title">Tambah Customer</h3>
    </div>
    <div class="box-body">
      <?php echo form_open('Admin/edit_customer/'.$customer->id_customer); ?>
      <input type="hidden" name="id_customer" value="<?php echo($customer->id_customer ); ?>">
      <!-- Date dd/mm/yyyy -->
      <div class="form-group">
        <label>Nama:</label>

        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-file"></i>
          </div>
          <input type="text" name="name" class="form-control" value="<?php echo $customer->name; ?>">
        </div>
        <!-- /.input group -->
      </div>
      <div class="form-group">
        <label>Jenis Kelamin</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
          <select name="gender" class="form-control">
            <option value="<?php echo $customer->gender; ?>"><?php echo $customer->gender; ?></option>
            <option value="laki-laki">Laki-Laki</option>
            <option value="perempuan">Perempuan</option>
          </select>
        </div>
      </div>
      <!-- /.form group -->
      <!-- phone mask -->
      <div class="form-group">
        <label>Telephone:</label>

        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-phone"></i>
          </div>
          <input name="phone" type="text" class="form-control" value="<?php echo $customer->phone; ?>">
        </div>
        <!-- /.input group -->
      </div>

      <div class="form-group">
        <label>Alamat:</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-map"></i>
          </div>
          <textarea name="address" class="form-control"><?php echo $customer->address; ?></textarea>
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
