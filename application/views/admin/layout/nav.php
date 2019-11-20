<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/admin/dist/img/admin.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <!-- MENU DASHBOARD -->
        <li><a href="<?php echo base_url('admin/dashboard') ?>"><i class="fa fa-dashboard text-aqua"></i> <span>Dashboard</span></a></li>

        <!-- MENU Produk -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i> <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/produk') ?>"><i class="fa fa-table"></i> Data Produk </a></li>
            <li><a href="<?php echo base_url('admin/kategori') ?>"><i class="fa fa-tags"></i> Kategori Produk </a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-user"></i> Data Pengguna 
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('admin/user') ?>"><i class="fa fa-circle-o"></i> Admin</a></li>
                <li><a href="<?php echo base_url('admin/pelanggan') ?>"><i class="fa fa-circle-o"></i> Pelanggan</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url('admin/rekening') ?>"><i class="fa fa-dollar"></i> Data Rekening</a></li>
          </ul>
        </li>

        <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">TRANSAKSI</li>

        <!-- MENU DASHBOARD -->
        <li><a href="<?php echo base_url('admin/transaksi') ?>"><i class="fa fa-history"></i> <span>Riwayat Transaksi</span></a></li>
        <!-- <li><a href="<?php echo base_url('admin/report') ?>"><i class="fa fa-truck"></i> Report Transaksi </a></li>  -->

        <!-- MENU Pengiriman -->
        <!-- <li class="header">REPORT</li> -->
        
        <!-- MENU KONFIGURASI -->
        <li class="header">KONFIGURASI WEBSITE</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i> <span>Konfigurasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/konfigurasi') ?>"><i class="fa fa-home"></i> Konfigurasi Umum </a></li>
            <li><a href="<?php echo base_url('admin/konfigurasi/logo') ?>"><i class="fa fa-image"></i> Konfigurasi Logo </a></li>
            <li><a href="<?php echo base_url('admin/konfigurasi/icon') ?>"><i class="fa fa-file-image-o"></i> Konfigurasi Icon </a></li>
          </ul>
        </li>
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <?php echo $title ?>
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="dashboard">Dashboard</a></li>
        <li class="active">Main Page</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">