<?php
include ('./app/Core.php');

$getnav= new Core();
$getnavs= $getnav-> getnav();

$getHeaderText= new Core();
$getHeaderText= $getHeaderText->getHeaderText();

$getHeaderText2= new Core();
$getHeaderText2= $getHeaderText2->getHeaderText();

$getHeaderText3= new Core();
$getHeaderText3= $getHeaderText3->getHeaderText();

$getHeaderText4= new Core();
$getHeaderText4= $getHeaderText4->getHeaderText();

$getHeaderText5= new Core();
$getHeaderText5= $getHeaderText5->getHeaderText();

$getHeaderText6= new Core();
$getHeaderText6= $getHeaderText6->getHeaderText();

?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title> Excellent Easer</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                            <?php while($getHeaderTexts=mysqli_fetch_object($getHeaderText)) : ?>
                                <li>
                                    <i class="fab fa-opencart"></i> <?= $getHeaderTexts->slider; ?>
                                </li>
                            <?php endwhile; ?> 
                            </ul>
                        </div>
                    </div>
                </div>
                <?php while($getHeaderTextz=mysqli_fetch_object($getHeaderText2)) : ?>
                    <div class="right-phone-box" style="color: white; ">
                        <p><?= $getHeaderTextz->reach; ?></p>
                    </div> &nbsp; &nbsp; &nbsp;
                    <?php endwhile; ?> 
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="./">HOME</a></li>
                        <?php while($getnavz=mysqli_fetch_object($getnavs)) : ?>
                        <li class="nav-item"><a class="nav-link" href="./<?= $getnavz->slug?>.php"><?= $getnavz->menutitle?></a></li>
                        <?php endwhile; ?>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Products</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">School Services</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                <?php while($getHeaderTextz=mysqli_fetch_object($getHeaderText3)) : ?>
                                                    <li><a href="product.php"><?= $getHeaderTextz->school_services; ?></a></li>
                                                    <?php endwhile; ?>
                                                    </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Home Materials</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                <?php while($getHeaderTextz=mysqli_fetch_object($getHeaderText4)) : ?>
                                                    <li><a href="product.php"><?= $getHeaderTextz->home_devices; ?></a></li>
                                                    <?php endwhile; ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Clothing</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                <?php while($getHeaderTextz=mysqli_fetch_object($getHeaderText5)) : ?>
                                                    <li><a href="product.php"><?= $getHeaderTextz->clothing; ?></a></li>
                                                    <?php endwhile; ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Accessories</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                <?php while($getHeaderTextz=mysqli_fetch_object($getHeaderText6)) : ?>
                                                    <li><a href="product.php"><?= $getHeaderTextz->accessories; ?></a></li>
                                                    <?php endwhile; ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                    </div>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->