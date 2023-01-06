<?php
ob_start();
session_start();
include 'baglan.php';

//Belirli veriyi seçme işlemi
$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id"); // database kancası sağlar
$ayarsor->execute(array(
  'id' => 0
  ));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


$adminsor=$db->prepare("SELECT * FROM kullanici where admin_mail=:mail"); // database kancası sağlar
$adminsor->execute(array(

  'mail' =>$_SESSION['admin_mail']
  ));
$admincek=$adminsor->fetch(PDO::FETCH_ASSOC);



$servissor=$db->prepare("SELECT * FROM servisler"); // database kancası sağlar
$servissor->execute(); 

?>




<html class="no-js" lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{<?php echo $ayarcek['ayar_sitetitle'];  ?>}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
     <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/cryptocurrency-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="assets/css/style-primary.css">

    
   <script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>


</head>

<body>

    <div class="main-wrapper">

        <div class="header-section">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">

                    <!-- Header Logo (Header Left) Start -->
                    <div class="header-logo col-auto">
                        <a href="index.php">
                            <img src="assets/images/logo/logo.png" alt="">
                            <img src="assets/images/logo/logo-light.png" class="logo-light" alt="">
                        </a>
                    </div><!-- Header Logo (Header Left) End -->

                    <!-- Header Right Start -->
                    <div class="header-right flex-grow-1 col-auto">
                        <div class="row justify-content-between align-items-center">

                            <!-- Side Header Toggle & Search Start -->
                            <div class="col-auto">
                                <div class="row align-items-center">

                                    <!--Side Header Toggle-->
                                    <div class="col-auto"><button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button></div>

                                    <!--Header Search-->
                                    <div class="col-auto">

                                    
                                    </div>

                                </div>
                            </div><!-- Side Header Toggle & Search End -->

                            <!-- Header Notifications Area Start -->
                            <div class="col-auto">

                                <ul class="header-notification-area">

                                    <!--Language-->
                                    <li class="adomx-dropdown position-relative col-auto">
                                        <a class="toggle" href="#"><img class="lang-flag" src="assets/images/flags/flag-1.jpg" alt=""><i class="zmdi zmdi-caret-down drop-arrow"></i></a>

                                        <!-- Dropdown -->
                                        <ul class="adomx-dropdown-menu dropdown-menu-language">
                                            <li><a href="#"><img src="assets/images/flags/flag-1.jpg" alt=""> English</a></li>
                                            <li><a href="#"><img src="assets/images/flags/flag-2.jpg" alt=""> Japanese</a></li>
                                            <li><a href="#"><img src="assets/images/flags/flag-3.jpg" alt=""> Spanish </a></li>
                                            <li><a href="#"><img src="assets/images/flags/flag-4.jpg" alt=""> Germany</a></li>
                                        </ul>

                                    </li>

                                    <!--Mail-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#"><i class="zmdi zmdi-email-open"></i><span class="badge"></span></a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-mail">
                                            <div class="head">
                                                <h4 class="title">You have 3 new mail.</h4>
                                            </div>
                                            <div class="body custom-scroll">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="assets/images/avatar/avatar-2.jpg" alt=""></div>
                                                            <div class="content">
                                                                <h6>Sub: New Account</h6>
                                                                <p>There are many variations of passages of Lorem Ipsum available. </p>
                                                            </div>
                                                            <span class="reply"><i class="zmdi zmdi-mail-reply"></i></span>
                                                        </a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                    <!--Notification-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#"><i class="zmdi zmdi-notifications"></i><span class="badge"></span></a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-notifications">
                                            <div class="head">
                                                <h5 class="title">You have 4 new notification.</h5>
                                            </div>
                                            <div class="body custom-scroll">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-notifications-none"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                            <div class="footer">
                                                <a href="#" class="view-all">view all</a>
                                            </div>
                                        </div>

                                    </li>

                                    <!--User-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#">
                                            <span class="user">
                                        <span class="avatar">
                                            <img src="assets/images/avatar/avatar-1.jpg" alt="">
                                            <span class="status"></span>
                                            </span>
                                            <span class="name"><?php echo $admincek['admin_ad']; ?></span>
                                            </span>
                                        </a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-user">
                                            <div class="head">
                                                <h5 class="name"><a href="#"><?php echo $admincek['admin_ad']; ?></a></h5>
                                                <a class="mail" href="#"><?php echo $admincek['admin_mail']; ?></a>
                                            </div>
                                            <div class="body">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-account"></i>Profile</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-email-open"></i>Inbox</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-wallpaper"></i>Activity</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-settings"></i>Setting</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-lock-open"></i>Sing out</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-paypal"></i>Payment</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-google-pages"></i>Invoice</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                </ul>

                            </div><!-- Header Notifications Area End -->

                        </div>
                    </div><!-- Header Right End -->

                </div>
            </div>
        </div>

        <div class="side-header show">
            <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
            <!-- Side Header Inner Start -->
            <div class="side-header-inner custom-scroll">

                <nav class="side-header-menu" id="side-header-menu">
                    <ul>
                        <li class="has-sub-menu"><a href="#"><i class="ti-home"></i> <span> Panel</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="index.php"><span>Anasayfa</span></a></li>
                               
                            </ul>
                        </li>
                       
                        
                        <li class="has-sub-menu"><a href="#"><i class="fa fa-cogs"></i> <span>Ayarlar</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="genelayar.php"   class="fa fa-cog" ><span>Genel Ayarlar</span>
                                <li><a href="iletisimayar.php"   class="fa fa-cog" ><span>İletişim Ayarlar</span></a></li>
                                <li><a href="apiayar.php"   class="fa fa-cog" ><span>API  Ayarlar</span></a></li>
                                <li><a href="sosyalayar.php"   class="fa fa-cog" ><span>Sosyal  Ayarlar</span></a></li>
                                 <li><a href="mailayar.php"   class="fa fa-cog" ><span>Mail  Ayarlar</span></a></li>
                               

                            </ul>
                        </li>

                        
                        <li class="has-sub-menu"><a href="#"><i class="fa fa-info"></i> <span>Hakkımızda</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="hakkimizda.php"><span>Hakkımızda Ayarlar</span></a></li>
                               
                            </ul>
                        </li>
                        
                        <li class="has-sub-menu"><a href="servisler.php"><i class="ti-stamp"></i> <span>Servisler</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="servisler.php"><span>Servis Liste</span></a></li>
                                <li><a href="servisayar.php"><span>Servis Düzenle</span></a></li>
                                <li><a href="servisekle.php"><span>Servis Ekle</span></a></li>
                              
                            </ul>
                        </li>

                        
                        <!---
                        <li class="has-sub-menu"><a href="#"><i class="ti-notepad"></i> <span>Forms</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="form-basic-elements.html"><span>Basic Elements</span></a></li>
                                <li><a href="form-checkbox.html"><span>Checkbox</span></a></li>
                                <li><a href="form-date-mask.html"><span>Date & Mask</span></a></li>
                                <li><a href="form-editor.html"><span>Editor</span></a></li>
                                <li><a href="form-file-upload.html"><span>File Upload</span></a></li>
                                <li><a href="form-layout.html"><span>Layout</span></a></li>
                                <li><a href="form-radio.html"><span>Radio</span></a></li>
                                <li><a href="form-range-slider.html"><span>Range Slider</span></a></li>
                                <li><a href="form-selects.html"><span>Selects</span></a></li>
                                <li><a href="form-switchers.html"><span>Switchers</span></a></li>
                                <li><a href="form-wizard.html"><span>Wizard</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="ti-layout"></i> <span>Table</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="table-basic.html"><span>Basic</span></a></li>
                                <li><a href="table-data-table.html"><span>Data Table</span></a></li>
                                <li><a href="table-footable.html"><span>Footable</span></a></li>
                                <li><a href="table-jsgrid.html"><span>Jsgrid</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="ti-pie-chart"></i> <span>Charts</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="chart-chartjs.html"><span>ChartJs</span></a></li>
                                <li><a href="chart-echarts.html"><span>Echarts</span></a></li>
                                <li><a href="chart-google.html"><span>Google Chart</span></a></li>
                                <li><a href="chart-morris.html"><span>Morris  Chart</span></a></li>
                                <li><a href="chart-sparkline.html"><span>Sparkline  Chart</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="ti-map"></i> <span>Maps</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="map-vector.html"><span>Vector Map</span></a></li>
                                <li><a href="map-google.html"><span>Google Map</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="ti-shopping-cart"></i> <span>E-commerce</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="add-product.html"><span>Add Product</span></a></li>
                                <li><a href="edit-product.html"><span>Edit Product</span></a></li>
                                <li><a href="invoice-list.html"><span>Invoice List</span></a></li>
                                <li><a href="invoice-details.html"><span>Invoice Details</span></a></li>
                                <li><a href="order-list.html"><span>Order List</span></a></li>
                                <li><a href="order-details.html"><span>Order Details</span></a></li>
                                <li><a href="manage-products.html"><span>Manage Products</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="ti-gift"></i> <span>Apps</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="chat.html"><span>Chat</span></a></li>
                                <li><a href="mail.html"><span>Mail</span></a></li>
                                <li><a href="single-mail.html"><span>Single Mail</span></a></li>
                                <li><a href="todo-list.html"><span>Todo List</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="ti-lock"></i> <span>Authentication</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="login.html"><span>login</span></a></li>
                                <li><a href="register.html"><span>register</span></a></li>
                                <li><a href="author-profile.html"><span>Profile</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="ti-layers"></i> <span>Pages</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="blank.html"><span>Blank</span></a></li>
                                <li><a href="timeline.html"><span>Timeline</span></a></li>
                                <li><a href="pricing.html"><span>Pricing</span></a></li>
                                <li><a href="error-1.html"><span>error-1</span></a></li>
                                <li><a href="error-2.html"><span>error-2</span></a></li>
                            </ul>
                        </li>

                        ---->

                    </ul>
                </nav>

            </div><!-- Side Header Inner End -->
        </div><!-- Side Header End -->

