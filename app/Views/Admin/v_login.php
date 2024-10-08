<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Login RT/RW 005 026</title>
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

<main>
    <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="<?php echo base_url('Admin')?>/assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">RT 005 RW 026</span>
                </a>
            </div><!-- End Logo -->

            <div class="card mb-3">

                <div class="card-body">

                <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                </div>

                <?php
                $session = \Config\Services::session();
                if ($session->getFlashdata('warning')) {
                ?>
                    <div class="alert alert-warning" style="background-color: #ebeef4; color: #012970; border: 1px #ebeef4; font-family: 'Poppins', sans-serif;">
                        <ul>
                            <?php
                            foreach ($session->getFlashdata('warning') as $val) {
                            ?>
                                <li><?php echo $val ?></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                <?php
                }
                if ($session->getFlashdata('success')) {
                ?>
                    <div class="alert alert-success" style="font-family: 'Poppins', sans-serif;"><?php echo $session->getFlashdata('success') ?></div>
                <?php
                }
                ?>

                <form class="row g-3 needs-validation" novalidate method="POST" action="<?php echo site_url('admin/login') ?>"> 

                    <div class="col-12">
                    <label for="yourUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" placeholder="username" 
                        value="<?php if ($session->getFlashdata('username')) echo $session->getFlashdata('username') ?>"/>
                        <div class="invalid-feedback">Please enter your username.</div>
                    </div>
                    </div>

                    <div class="col-12">
                    <label for="yourPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="yourPassword" placeholder="password" required>
                    <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    </div>
                    <div class="col-12">
                    <input class="btn btn-primary w-100" type="submit" name="submit" value="LOGIN"/>
                    </div>
                </form>

                </div>
            </div>

            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://instagram.com/aanisamalia_?igshid=MzNlNGNkZWQ4Mg==">Anisa Amalia Putri</a>
            </div>

            </div>
        </div>
        </div>

    </section>

    </div>
</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo base_url('Admin')?>/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="<?php echo base_url('Admin')?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('Admin')?>/assets/vendor/chart.js/chart.umd.js"></script>
<script src="<?php echo base_url('Admin')?>/assets/vendor/echarts/echarts.min.js"></script>
<script src="<?php echo base_url('Admin')?>/assets/vendor/quill/quill.min.js"></script>
<script src="<?php echo base_url('Admin')?>/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="<?php echo base_url('Admin')?>/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="<?php echo base_url('Admin')?>/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url('Admin')?>/assets/js/main.js"></script>

</body>

</html>