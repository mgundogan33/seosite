<?php

include 'config.php';

//Belirli veriyi seçme işlemi
$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id"); // database kancası sağlar
$ayarsor->execute(array(
  'id' => 0
  ));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id"); // database kancası sağlar
$hakkimizdasor->execute(array(
  'id' => 0
  ));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);


?>


<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8" />
    <title><?php  echo $ayarcek['ayar_sitetitle']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php  echo $ayarcek['ayar_sitedescription']; ?>" />
    <meta name="keywords" content="<?php  echo $ayarcek['ayar_sitekeywords']; ?>" />
     <meta name="author" content="<?php  echo $ayarcek['ayar_siteauthor']; ?>">
    <meta content="Themesdesign" name="<?php  echo $ayarcek['ayar_siteauthor']; ?>" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!--Slider-->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>
        </div>
    </div>

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark nav-dark">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="index.php">
                <img src="images/logo-dark.png" alt="" class="" height="21">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link" style="color:black">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a href="servisler.php" class="nav-link" style="color:black" >Servisler</a>
                    </li>
                    <li class="nav-item">
                        <a href="hakkimizda.php" class="nav-link" style="color:black"  >Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a href="#pricing" class="nav-link" style="color:black"  >Paketler</a>
                    </li>
                    <li class="nav-item">
                        <a href="#clients" class="nav-link" style="color:black" >Müşteriler</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link" style="color:black" >İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->