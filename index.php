<?php

include 'includes/header.php';

$getIndexText= new Core;
$getIndexText= $getIndexText-> getIndexText();

$getIndexText2= new Core;
$getIndexText2= $getIndexText2-> getIndexText();

$getIndexText3= new Core;
$getIndexText3= $getIndexText3-> getIndexText();

$getIndexText4= new Core;
$getIndexText4= $getIndexText4-> getIndexText();

?>

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
        <?php while($getIndexTextz=mysqli_fetch_object($getIndexText)) : ?>
            <li class="text-left">
                <img src="assets/images/<?= $getIndexTextz->banner_image; ?>.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong><?= $getIndexTextz->big_banner; ?></strong></h1>
                            <p class="m-b-40"><?= $getIndexTextz->small_banner; ?></p>
                        </div>
                    </div>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->
     <!-- Start Categories  -->
     <div class="categories-shop">
        <div class="container">
        <div class="title-all text-center">
        <h1>Very Available</h1>
        </div>
            <div class="row">
            <?php while($getIndexTextz= mysqli_fetch_object($getIndexText2)) : ?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="assets/images/<?= $getIndexTextz->available_image; ?>.jpg" alt="<?= $getIndexTextz->very_available; ?>" />
                        <a class="btn hvr-hover" href="#"><?= $getIndexTextz->very_available; ?></a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div> <br> <br>
            <div class="title-all text-center">
        <h2>And much much more... </h2>
        </div>
        </div>
    </div>
    <!-- End Categories -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                    <?php while($getIndexTextz=mysqli_fetch_object($getIndexText4)) : ?>
                        <h1><?= $getIndexTextz->testimony_header; ?></h1>
                        <p><?= $getIndexTextz->testimony_body; ?></p>
                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php while($getIndexTextz=mysqli_fetch_object($getIndexText3)) : ?>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="assets/images/<?= $getIndexTextz->testimonials_image; ?>.jpg" alt="<?= $getIndexTextz->testimonials_image; ?>" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3><?= $getIndexTextz->testimonials_header; ?></h3>
                                <p><?= $getIndexTextz->testimonials_body; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog  -->


<?php

include 'includes/footer.php';

?>
