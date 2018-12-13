<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forum DPDTT Тегҳо</title>
    <meta name="description" content="Forum DPDTT">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Fonts -->
    <?php
    include "assets/home_style".".css";
    ?>
    <script src="assets/js/webfont.js"></script>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/vendors/css/base/bootstrap.min.css">
    <link rel="stylesheet" href="assets/home_style.css">
    <link rel="stylesheet" href="assets/vendors/css/base/elisyam-1.5.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select/bootstrap-select.min.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script><![endif]-->
    <style type="text/css">
        #tags_list .tag-cell {
            border-bottom: 1px dotted #e4e6e8;
            padding: 8px 4px 12px 4px;
        }
        .grid-layout>.grid-layout--cell {
            flex: 1 1 25%;
            min-width: 250px;
            width: auto;
        }.post-tag,  .container .chosen-choices .container .chosen-container-multi .chosen-choices {
             position: relative;
             display: inline-block;
             padding: .4em .5em;
             margin: 2px 2px 2px 0;
             font-size: 11px;
             line-height: 1;
             white-space: nowrap;
             text-decoration: none;
             text-align: center;
             border-width: 1px;
             border-style: solid;
             border-radius: 3px;
             transition: all .15s ease-in-out;
                     color: #39739d;
                     background-color: #E1ECF4;
                     border-color: #E1ECF4;
         }
        #tags_list .excerpt {
            box-sizing: content-box;
            font-size: 12px;
            height: 39px;
            line-height: 14px;
            overflow: hidden;
            margin-bottom: 4px;
        }
        .grid {
            display: flex;
        }

        #tags_list  #tags_list .stats-row a, #tags_list .stats-row a:visited {
            font-size: 11px;
            color: #3b4045;
        }
        .item-multiplier {
            margin-right: 4px;
            color: #848d95;
        }
        .tags_link {    position: relative;
            display: inline-block;
            padding: .4em .5em;
            margin: 2px 2px 2px 0;
            font-size: 11px;
            line-height: 1;
            white-space: nowrap;
            text-decoration: none;
            text-align: center;
            border-width: 1px;
            border-style: solid;
            border-radius: 3px;
            transition: all .15s ease-in-out;
        }
        .post-tag:hover {
            color: #33658a;
            background-color: #cee0ed;
            border-color: #cee0ed;
        }
    </style>
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
    <header class="header">
        <nav class="navbar fixed-top">
            <!-- Begin Search Box-->
            <div class="search-box">
                <button class="dismiss"><i class="ion-close-round"></i></button>
                <form id="searchForm" action="#" role="search">
                    <input type="search" placeholder="Search something ..." class="form-control">
                </form>
            </div>
            <!-- End Search Box-->
            <!-- Begin Topbar -->
            <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                <!-- Begin Logo -->
                <div class="navbar-header">
                    <a href="db-default.html" class="navbar-brand">
                        <div class="brand-image brand-big">
                            <img src="assets/img/logo-big.png" alt="logo" class="logo-big">
                        </div>
                        <div class="brand-image brand-small">
                            <img src="assets/img/logo.png" alt="logo" class="logo-small">
                        </div>
                    </a>
                    <!-- Toggle Button -->
                    <a id="toggle-btn" href="#" class="menu-btn active">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <!-- End Toggle -->
                </div>
                <!-- End Logo -->
                <!-- Begin Navbar Menu -->
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                    <!-- Search -->
                    <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="la la-search"></i></a></li>
                    <!-- End Search -->
                    <!-- Begin Notifications -->
                    <li class="nav-item dropdown"><a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="la la-bell animated infinite swing"></i><span class="badge-pulse"></span></a>
                        <ul aria-labelledby="notifications" class="dropdown-menu notification">
                            <li>
                                <div class="notifications-header">
                                    <div class="title">Notifications (4)</div>
                                    <div class="notifications-overlay"></div>
                                    <img src="assets/img/notifications/01.jpg" alt="..." class="img-fluid">
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="message-icon">
                                        <i class="la la-user"></i>
                                    </div>
                                    <div class="message-body">
                                        <div class="message-body-heading">
                                            New user registered
                                        </div>
                                        <span class="date">2 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="message-icon">
                                        <i class="la la-calendar-check-o"></i>
                                    </div>
                                    <div class="message-body">
                                        <div class="message-body-heading">
                                            New event added
                                        </div>
                                        <span class="date">7 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="message-icon">
                                        <i class="la la-history"></i>
                                    </div>
                                    <div class="message-body">
                                        <div class="message-body-heading">
                                            Server rebooted
                                        </div>
                                        <span class="date">7 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="message-icon">
                                        <i class="la la-twitter"></i>
                                    </div>
                                    <div class="message-body">
                                        <div class="message-body-heading">
                                            You have 3 new followers
                                        </div>
                                        <span class="date">10 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Notifications -->
                    <!-- User -->
                    <li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="assets/img/avatar/avatar-01.jpg" alt="..." class="avatar rounded-circle"></a>
                        <ul aria-labelledby="user" class="user-size dropdown-menu">
                            <li class="welcome">
                                <a href="#" class="edit-profil"><i class="la la-gear"></i></a>
                                <img src="assets/img/avatar/avatar-01.jpg" alt="..." class="rounded-circle">
                            </li>
                            <li>
                                <a href="pages-profile.html" class="dropdown-item">
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="app-mail.html" class="dropdown-item">
                                    Messages
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item no-padding-bottom">
                                    Settings
                                </a>
                            </li>
                            <li class="separator"></li>
                            <li>
                                <a href="pages-faq.html" class="dropdown-item no-padding-top">
                                    Faq
                                </a>
                            </li>
                            <li><a rel="nofollow" href="pages-login.html" class="dropdown-item logout text-center"><i class="ti-power-off"></i></a></li>
                        </ul>
                    </li>
                    <!-- End User -->
                    <!-- Begin Quick Actions -->

                    <!-- End Quick Actions -->
                </ul>
                <!-- End Navbar Menu -->
            </div>
            <!-- End Topbar -->
        </nav>
    </header>
    <!-- End Header -->
    <!-- Begin Page Content -->
    <div class="page-content d-flex align-items-stretch">
        <div class="default-sidebar">
            <!-- Begin Side Navbar -->
            <nav class="side-navbar box-scroll sidebar-scroll">
                <!-- Begin Main Navigation -->
                <ul class="list-unstyled">
                    <li><a href="index.html"><i class="la la-columns"></i><span>Главная</span></a></li>

                    <li><a href="#dropdown-app" aria-expanded="false" data-toggle="collapse"><i class="la la-puzzle-piece"></i><span>ОБЩЕСТВЕННОГО</span></a>
                        <ul id="dropdown-app" class="collapse list-unstyled pt-0">
                            <li><a href="#">FORUM DPDTT</a></li>
                            <li><a href="tags.html">ТЕГИ</a></li>
                            <li><a href="#">ПОЛЬЗОВАТЕЛИ</a></li>
                            <li><a href="#">КОМАНДЫ + DPDTT</a></li>

                        </ul>
                    </li>

                </ul>
                <!-- End Main Navigation -->
            </nav>
            <!-- End Side Navbar -->
        </div>
        <!-- End Left Sidebar -->
        <div class="content-inner">
            <div class="container-fluid">
                <!-- Begin Page Header-->
                <div style="margin-bottom: 21px;" class="row">
                    <div class="page-header">
                        <div class="d-flex align-items-center">
                            <h2  class="page-header-title">Теги</h2>

                        </div>
                    </div>
                </div>
                <!-- End Page Header -->
                <div class="row ">


                    <!--Javascript-->
                <div class="widget widget-20  has-shadow">
                    <div class="row mt-5 mr-0 ml-0">
                        <div class="col-md-3 col-sm-12 col-xl-3 d-flex justify-content-center mb-4">
                            <div class="widget-body">
                                <div style="isplay: grid; grid-gap: 8px;grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));"  class="form-group">
                                <div class="media w-100">
                                    <div class="grid-layout--cell tag-cell">
                                        <a href="tags/javascript" class="post-tag" title="show questions tagged 'javascript'" rel="tag">javascript</a><span class="item-multiplier"><span class="item-multiplier-x">×</span>&nbsp;<span class="item-multiplier-count">1724620</span></span>
                                        <div class="excerpt">JavaScript (не путать с Java) - это высокоуровневый, динамический, многопарадигменный, объектно-ориентированный, основанный на прототипе, слабо типизированный язык, используемый как для клиентских, так и для серверных сценариев.</div>
                                        <div class="grid jc-space-between">
                                        <div class="grid--cell stats-row">
                                        <a class="tags_link" href="tags/javascript" title="38 спросил сегодня">38 спросил сегодня</a>,
                                        <a class="tags_link" href="tags/javascript" title="87 на этой неделе"> 87 на этой неделе</a></div>
                                        </div>
                                    </div>
                                 </div>

                                </div>

                            </div>
                            </div>
                        </div>
                    </div>
                    <!--end Javascript-->

                    <!--java-->

                    <!--end java-->
                    </div>

                </div>

            </div>
        </div>
    </div>
                <!-- End Row -->
            </div>
            <!-- End Container -->
            <!-- Begin Page Footer-->
            <footer class="main-footer">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-center">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="documentation.html">Documentation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="changelog.html">Changelog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
            <!-- End Page Footer -->
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
<!-- End Page Vendor Js -->
</body>
</html>