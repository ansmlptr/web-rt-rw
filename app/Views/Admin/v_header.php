<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> <?php echo $templateJudul?> </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('Admin')?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url('Admin')?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('Admin')?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('Admin')?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url('Admin')?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url('Admin')?>/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url('Admin')?>/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url('Admin')?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url('Admin')?>/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('Admin')?>/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?php echo site_url('admin/sukses')?>" class="logo d-flex align-items-center">
        <img src="<?php echo base_url('Admin')?>/assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">RT 005 RW 026</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php echo base_url('Admin')?>/assets/img/profile-img.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo site_url('admin/logout')?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?php echo site_url('admin/sukses')?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Kelola Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo site_url('data/penduduk')?>">
              <i class="bi bi-circle"></i><span>Data Penduduk</span>
            </a>
          </li>
          <li>
            <a href="<?php echo site_url('data/all-penduduk')?>">
              <i class="bi bi-circle"></i><span>Semua Data Penduduk</span>
            </a>
          </li>
        </ul>
      </li><!-- End Kelola Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Kelola Surat</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo site_url('surat/pengantar')?>">
              <i class="bi bi-circle"></i><span>Surat Pengantar</span>
            </a>
          </li>
          <li>
            <a href="<?php echo site_url('surat/domisili')?>">
              <i class="bi bi-circle"></i><span>Surat Ket Domisili</span>
            </a>
          </li>
          <li>
            <a href="<?php echo site_url('surat/tidak mampu')?>">
              <i class="bi bi-circle"></i><span>Surat Ket Tidak Mampu</span>
            </a>
          </li>
        </ul>
      </li><!-- End Kelola Surat Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Humas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo site_url('humas/berita')?>">
              <i class="bi bi-circle"></i><span>Berita</span>
            </a>
          </li>
          <li>
            <a href="<?php echo site_url('humas/laporan')?>">
              <i class="bi bi-circle"></i><span>Laporan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Humas Nav -->

      <li class="nav-heading">Setting</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo site_url('admin/pengguna')?>">
          <i class="bi bi-person"></i>
          <span>Pengguna Sistem</span>
        </a>
      </li><!-- End Pengguna Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <span>Logged in as</span>
          <span style="margin-left: 5px;"><?php echo session()->get('akun_username') ?></span>
        </a>
      </li> <!--End F.A.Q Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
