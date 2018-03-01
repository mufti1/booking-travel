<!-- <meta http-equiv="refresh" content="60"> -->
<div class="wrapper">
  <header class="main-header">
    <a href="<?php echo base_url('admin') ?>" class="logo">
      <span class="logo-mini"><b>T</b><span>r</span><b>S</b><span>t</span></span>
      <span class="logo-lg">TravelSist</span>
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
              <span class="hidden-xs">View TravelSist</span>
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
        <li><a href="<?php echo base_url(); ?>admin/customer"><i class="fa fa-user"></i> <span>Data Customer</span></a></li>
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
        <li><a href="<?php echo base_url('user'); ?>"><i class="fa fa-user"></i> <span>Data User</span></a></li>
        <li><a href="<?php echo base_url('transportasi'); ?>"><i class="fa fa-user"></i> <span>Data Transportasi</span></a></li>
        <li><a href="<?php echo base_url('rute/view'); ?>"><i class="fa fa-user"></i> <span>Data Rute</span></a></li>
        <li><a href="<?php echo base_url('Login/logout'); ?>"><i class="fa fa-user"></i> <span>Logout</span></a></li>
      </ul>
    </section>
  </aside>