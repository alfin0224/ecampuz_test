<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ECAMPUZ TEST</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/')?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/')?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/')?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/')?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/')?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/')?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/')?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/')?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/')?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/')?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/')?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/')?>plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->

  <!-- SweetAlert -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/sweetalert/sweetalert.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <script type="text/javascript">
    base_url = '<?php echo base_url(); ?>';
  </script>
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>



      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
        <li>
          <a class="btn btn-default" href="<?= base_url('logout')?>" role="button">
            <i class="fas fa-power-off"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url('/admin')?>" class="brand-link">
        <span class="brand-text font-weight-light" style="font-size: 20px">E-CAMPUZ TEST<br><!--  <span style="padding-left: 18.5%;">PIMPINAN</span> --></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url('assets/img/profiluser/'.$this->session->userdata('foto_profil'));?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="<?= base_url('/profileuser/profile/'); echo encrypt_url($this->session->userdata('id_user'));?>" class="d-block"><?php echo 'Halo, '.$this->session->userdata('username'); ?></a>
          </div>
        </div>