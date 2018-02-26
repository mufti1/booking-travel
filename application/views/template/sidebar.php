<!-- <meta http-equiv="refresh" content="60"> -->
<div class="wrapper">
  <header class="main-header">
    <a href="index2.html" class="logo">
      <span class="logo-mini"><b>T</b><span>e</span><b>L</b><span>o</span></span>
      <span class="logo-lg">Travello</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="http://localhost/travel">
              <span class="hidden-xs">View Travello</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><i class="fa fa-reorder"> MENU NAVIGASI</i></li>
        <li><a href="#"><i class="fa fa-dashboard"></i> <span>Dasboard</span></a></li>
        <li><a href="<?php echo base_url(); ?>admin/customer"><i class="fa fa-user"></i> <span>Users</span></a></li>
        <li>
          <a href="<?php echo base_url('admin/tiket') ?>">
            <i class="fa fa-ticket"></i>
            <span>Tiket Masuk
              <small class="label pull-right bg-red">
                <?php 
                $this->db->where('status', 2);
                $jumtik = $this->db->get('reservation');
                echo $jumtik->num_rows(); 
                ?>
              </small>
            </span>
          </a>
        </li>
        <li><a href=""><i class="fa fa-user"></i> <span>Data User</span></a></li>
        <li><a href="<?php echo base_url('rute'); ?>"><i class="fa fa-user"></i> <span>Tambah Rute</span></a></li>
        <li><a href="<?php echo base_url('rute/view'); ?>"><i class="fa fa-user"></i> <span>Data Rute</span></a></li>
      </ul>
    </section>
  </aside>