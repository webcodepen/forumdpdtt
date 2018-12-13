<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forum DPDTT Саволҳои бехтарин</title>
    <meta name="description" content="Forum DPDTT">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>


    <style type="text/css">
        <?php
    include "assets/home_style".".css";
    ?>
    </style>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/vendors/css/base/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/css/base/elisyam-1.5.min.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]-->
</head>
<body id="page-top">
<!-- Begin Preloader -->
<div id="preloader">
    <div class="canvas">
        <img src="assets/img/logo.png" alt="logo" class="loader-logo">
        <div class="spinner"></div>
    </div>
</div>
<!-- End Preloader -->
<div class="page">
    <!-- Begin Header -->

<?php

include "header".".php";
?>




    <!-- Begin Page Content -->
    <div class="page-content d-flex align-items-stretch">
        <div class="default-sidebar">
            <!-- Begin Side Navbar -->
            <?php

            include "navbar".".php";
            ?>
            <!-- End Side Navbar -->
        </div>
        <!-- End Left Sidebar -->

        <div class="content-inner">
            <div class="container-fluid">
                <!-- Begin Page Header-->
                <div style="margin-bottom: 21px;" class="row">
                    <div class="page-header">
                        <div class="d-flex align-items-center">
                            <h2  class="page-header-title">Саволҳои беҳтарин</h2>
                            <div>
                                <button style="background-color: #0095ff; color: #ffffff;" type="button" class="btn mr-1 mb-2" data-toggle="modal" data-target="#modal-large">Савол додан</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Header -->
                <div class="row ">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
                        <button type="button" class="btn btn-secondary ripple mr-1 mb-2">Шавқовар</button>
                        <button type="button" class="btn btn-secondary ripple mr-1 mb-2">Тафсияҳо</button>
                        <button type="button" class="btn btn-secondary ripple mr-1 mb-2">Нав</button>
                        <button type="button" class="btn btn-secondary ripple mr-1 mb-2">Хафта</button>
                        <button type="button" class="btn btn-secondary ripple mr-1 mb-2">Моҳ</button>
                    </div>
                </div>
                <!-- End Row -->
            </div>


            <?php include "forum_post_home". ".php" ?>
            <?php include "modal". ".php" ?>

            <!-- End Container -->
            <?php

            include "footer".".php";
            ?>

            <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
            <!-- Offcanvas Sidebar -->

            <!-- End Offcanvas Sidebar -->
        </div>
    </div>
    <!-- End Page Content -->
</div>
<!-- Begin Vendor Js -->
<script src="assets/vendors/js/base/jquery.min.js"></script>
<script src="assets/vendors/js/base/core.min.js"></script>
<!-- End Vendor Js -->
<!-- Begin Page Vendor Js -->
<script src="assets/vendors/js/nicescroll/nicescroll.min.js"></script>
<script src="assets/vendors/js/app/app.min.js"></script>
<script src="assets/vendors/js/bootstrap-select/bootstrap-select.min.js"></script>
<!-- End Page Vendor Js -->
</body>
</html>