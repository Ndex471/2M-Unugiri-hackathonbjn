<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Sistem Informasi Satu Data merupakan sistem informasi yang mengintegrasikan data desa mulai dari data kependudukan sampai dengan data penerima bantuan seperti PKH, dll">
  <link rel="shortcut icon" sizes="196x196" href="<?= base_url();?>assets/iconhead.png">

  <title>Bojonegoro Job Center</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- dattable -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>  
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> 
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script> 
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script> 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts."></script> -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
   <!-- 
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>  
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>  
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>  
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>  
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"/>  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/>  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css"/>   -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css"/>  
  <style type="text/css">
    .bg-detail {
      background-color: #fbf89f;
    }
  </style>


  <!-- /datatable -->
</head>
<body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-success">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars text-light"></i></a>
      </li>
     </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <a href="<?= base_url() ?>auth/logout" onclick="return confirm('Anda yakin ingin logout ?')" class="btn btn-default float-right"><i class="fas fa-power-off"></i> Logout</a>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>" class="brand-link  bg-dark">
      <img src="<?= base_url() ?>assets/iconhead.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8;margin-top: 5px;margin-bottom: 8px">

      <!-- <span class="brand-text font-weight text-blue text-bold" style="font-size: 28px">SISADA</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://siipp.net/assets/images/img_avatar2.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Joko Riyadi</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?= base_url() ?>admin" class="nav-link <?php  if($this->session->flashdata('menu') == "dashboard"){echo "active";} ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?php  if($this->session->flashdata('menu') == "datadesa"){echo "active";} ?>">
              <i class="nav-icon fas fa-bell"></i>
              <p>
                Notification
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
<!--             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/data_desa') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/import_data') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Import Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/export_data') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Export Data</p>
                </a>
              </li>
            </ul> -->
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url('admin/aspirasi_publik') ?>" class="nav-link <?php if($this->session->flashdata('menu') == "aspirasi"){echo "active";} ?>">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Pesan                
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url('admin/profil') ?>" class="nav-link <?php if($this->session->flashdata('menu') == "profil"){echo "active";} ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profil Saya
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url('admin/change_password') ?>" class="nav-link <?php if($this->session->flashdata('menu') == "password"){echo "active";} ?>">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Ganti Password
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url('auth/logout') ?>" class="nav-link"  onclick="return confirm('Anda yakin ingin logout ?')">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                logout
              </p>
            </a>

          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="<?= $this->session->flashdata('icon'); ?>"></i>  <?= $this->session->flashdata('menuName'); ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin Super</a></li>
              <li class="breadcrumb-item active"><?= $this->session->flashdata('breadcrumb'); ?></li>
            </ol\>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
