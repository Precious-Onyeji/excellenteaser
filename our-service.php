<?php

include 'includes/header.php';

$getServicesText= new Core;
$getServicesText= $getServicesText->getServicesText();

?>
<!-- Start All Title Box -->
<div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Services</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- End All Title Box -->

    <!-- Start Services  -->
    <div class="services-box-main">
        <div class="container">
            <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3><?= $getServicesText->mission; ?></h3>
                        <p><?= $getServicesText->mission_body; ?> </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3><?= $getServicesText->vision; ?></h3>
                        <p><?= $getServicesText->vision_body; ?> </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3><?= $getServicesText->philosophy; ?></h3>
                        <p><?= $getServicesText->philosophy_body; ?></p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3><?= $getServicesText->trusted; ?></h3>
                        <p><?= $getServicesText->trusted_body; ?></p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3><?= $getServicesText->professional; ?></h3>
                        <p><?= $getServicesText->professional_body; ?></p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3><?= $getServicesText->stories; ?></h3>
                        <p><?= $getServicesText->stories_body; ?></p>
                    </div>
                </div>
            </div>
                        <hr class="my-0"> </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Services -->
<?php

include 'includes/footer.php';

?>