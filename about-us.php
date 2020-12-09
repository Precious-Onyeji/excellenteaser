<?php

include 'includes/header.php';

$getAboutText= new Core;
$getAboutText= $getAboutText-> getAboutText();

?>

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>ABOUT US</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">ABOUT US</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start About Page  -->
<div class="about-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="noo-sh-title"><?= $getAboutText->description_header; ?></h2>
                <p> <?= $getAboutText->description_body; ?>
                    </p>
            </div>
            <div class="col-lg-6">
                <div class="banner-frame"> <img class="assets/img-thumbnail img-fluid" src="assets/images/about-img.jpg" alt="" />
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-sm-6 col-lg-4">
                <div class="service-block-inner">
                    <h3><?= $getAboutText->tested_header; ?></h3>
                    <p> <?= $getAboutText->tested_body; ?> </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="service-block-inner">
                    <h3><?= $getAboutText->professional_header; ?></h3>
                    <p><?= $getAboutText->professional_body; ?></p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="service-block-inner">
                    <h3><?= $getAboutText->expert_header; ?></h3>
                    <p><?= $getAboutText->expert_body; ?></p>
                </div>
            </div>
        </div>
        <div class="row my-4" style="margin-left: 35%;">
            <div class="col-12">
                <h2 class="noo-sh-title"><?= $getAboutText->ceo_header; ?></h2>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="hover-team">
                    <div class="our-team"> <img src="assets/images/img-1.jpg" alt="" />
                        <div class="team-content">
                            <h3 class="title">Kolawole Oluwasegun</h3> <span class="post">Progess Enthusiast</span> </div>
                        <ul class="social">
                            <li>
                                <a href="#" class="fab fa-facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-google-plus"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-youtube"></a>
                            </li>
                        </ul>
                        <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                    </div>
                    <div class="team-description">
                        <p><?= $getAboutText->ceo_body; ?> </p>
                    </div>
                    <hr class="my-0"> </div>
            </div>

                    <hr class="my-0"> </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Page -->


<?php

include 'includes/footer.php';

?>