<?php

include 'includes/header.php';

$getAboutText= new Core;
$getAboutText= $getAboutText-> getAboutText();

$getContactText= new Core;
$getContactText= $getContactText-> getContactText();

$getFooterText= new Core();
$getFooterText= $getFooterText->getFooterText();

$getHeaderText= new Core();
$getHeaderText= $getHeaderText->getHeaderText();

$getIndexText= new Core;
$getIndexText= $getIndexText-> getIndexText();

$getServicesText= new Core;
$getServicesText= $getServicesText->getServicesText();

?>

<style type="text/css">
td,th {

text-align: center;

}
</style>

<div class="container-fluid">
<div class="row mt-5">
<div class="col-lg-12 col-sm-6 m-auto">
    <div class="card">
    
    <div class="card-header text-center">
    <h1> All Text Information in the Pages </h1>
    </div>
    <div class="card-body">
    <div class="text-center">
    <h2>About Us Text</h2>
    </div>
    <table class="table-bordered">

    <tr> 
    <th style="width:10% "> Description Header </th>
    <th style="width:60% "> Description Body </th>
    <th style="width:10% "> Tested header </th>
    <th style="width:10% "> Tested body</th>
    <th style="width:10% "> Professional header </th>
    <th style="width:10% "> Professional body </th>
    <th style="width:10% "> Expert header </th>
    <th style="width:10% "> Expert body </th>
    <th style="width:10% "> CEO header </th>
    <th style="width:10% "> CEO body </th>
    <th style="width:10% "> Action </th>

    </tr>
    <tr>
    <td> <?= $getAboutText->description_header ;?> </td>
    <td> <?= $getAboutText->description_body ;?> </td>
    <td> <?= $getAboutText->tested_header ;?> </td>
    <td> <?= $getAboutText->tested_body ;?> </td>
    <td> <?= $getAboutText->professional_header ;?> </td>
    <td> <?= $getAboutText->professional_body ;?> </td>
    <td> <?= $getAboutText->expert_header ;?> </td>
    <td> <?= $getAboutText->expert_body ;?> </td>
    <td> <?= $getAboutText->ceo_header ;?> </td>
    <td> <?= $getAboutText->ceo_body ;?> </td>
    <td> <a href="edit-about-us.php?eid=<?= $getAboutText->id ?>" class= "btn btn-outline-danger"> Edit </a></td>
    </tr>
    </table>

<br> <br>
    <div class="text-center">
    <h2>Contact Us Text</h2>
    </div>

    <table class="table-bordered">

    <tr> 
    <th style="width:10% "> Left Header </th>
    <th style="width:10% "> Left Body </th>
    <th style="width:10% "> Address </th>
    <th style="width:10% "> Phone Number</th>
    <th style="width:10% "> Email </th>
    <th style="width:10% "> Right header </th>
    <th style="width:10% "> Right body </th>
    <th style="width:10% "> Action </th>
    </tr>

    <tr>
    <td> <?= $getContactText->left_header ;?> </td>
    <td> <?= $getContactText->left_body ;?> </td>
    <td> <?= $getContactText->address ;?> </td>
    <td> <?= $getContactText->phone ;?> </td>
    <td> <?= $getContactText->email ;?> </td>
    <td> <?= $getContactText->right_header ;?> </td>
    <td> <?= $getContactText->right_body ;?> </td>
    <td> <a href="edit-contact-us.php?eid=<?= $getContactText->id ?>" class= "btn btn-outline-success"> Edit </a></td>
    </tr>
    </table>

    <br> <br>
    <div class="text-center">
    <h2>Footer Text</h2>
    </div>

    <table class="table-bordered">

    <tr> 
    <th style="width:10% "> id </th>
    <th style="width:10% "> About Excellent Easer </th>
    <th style="width:10% "> Our Strengths </th>
    <th style="width:10% "> Contact Us </th>
    <th style="width:10% "> Social Media Name</th>
    <th style="width:10% "> Social Media link </th>
    <th style="width:10% "> Action </th>
    </tr>

    <?php while($getFooterTextz=mysqli_fetch_object($getFooterText)) : ?>
    <tr>
    <td> <?= $getFooterTextz->id ;?> </td>
    <td> <?= $getFooterTextz->about ;?> </td>
    <td> <?= $getFooterTextz->strengths ;?> </td>
    <td> <?= $getFooterTextz->contact ;?> </td>
    <td> <?= $getFooterTextz->social_media_name ;?> </td>
    <td> <?= $getFooterTextz->social_media ;?> </td>
    <td> <a href="edit-footer.php?eid=<?= $getFooterTextz->id ?>" class= "btn btn-outline-danger"> Edit </a></td>
    </tr>
    <?php endwhile; ?>
    </table>

    <br> <br>
    <div class="text-center">
    <h2>Header Text</h2>
    </div>

    <table class="table-bordered">

    <tr> 
    <th style="width:10% "> slider </th>
    <th style="width:10% "> Reach us </th>
    <th style="width:10% "> School Services </th>
    <th style="width:10% "> Home Devices</th>
    <th style="width:10% "> Clothing </th>
    <th style="width:10% "> accessories </th>
    <th style="width:10% "> Action </th>
    </tr>

    <?php while($getHeaderTexts=mysqli_fetch_object($getHeaderText)) : ?>
    <tr>
    <td> <?= $getHeaderTexts->slider ;?> </td>
    <td> <?= $getHeaderTexts->reach ;?> </td>
    <td> <?= $getHeaderTexts->school_services ;?> </td>
    <td> <?= $getHeaderTexts->home_devices ;?> </td>
    <td> <?= $getHeaderTexts->clothing ;?> </td>
    <td> <?= $getHeaderTexts->accessories ;?> </td>
    <td> <a href="edit-header.php?eid=<?= $getHeaderTexts->id ?>" class= "btn btn-outline-success"> Edit </a></td>
    </tr>
    <?php endwhile; ?>
    </table>

    <br> <br>
    <div class="text-center">
    <h2>Home Text</h2>
    </div>

    <table class="table-bordered">

    <tr> 
    <th style="width:10% "> Big banner </th>
    <th style="width:10% "> Small  banner</th>
    <th style="width:10% "> Very Available </th>
    <th style="width:10% "> Testimonial header</th>
    <th style="width:10% "> Testimonial body </th>
    <th style="width:10% "> Testimonial Title </th>
    <th style="width:10% "> Testimonial Subtitle </th>
    <th style="width:10% "> Action </th>
    </tr>

    <?php while($getIndexTexts=mysqli_fetch_object($getIndexText)) : ?>
    <tr>
    <td> <?= $getIndexTexts->big_banner ;?> </td>
    <td> <?= $getIndexTexts->small_banner ;?> </td>
    <td> <?= $getIndexTexts->very_available ;?> </td>
    <td> <?= $getIndexTexts->testimonials_header ;?> </td>
    <td> <?= $getIndexTexts->testimonials_body ;?> </td>
    <td> <?= $getIndexTexts->testimony_header ;?> </td>
    <td> <?= $getIndexTexts->testimony_body ;?> </td>
    <td> <a href="edit.php?eid=<?= $getAboutTexts->id ?>" class= "btn btn-outline-danger"> Edit </a></td>
    </tr>
    <?php endwhile; ?>
    </table>

    <br> <br>
    <div class="text-center">
    <h2>Our Service Texts</h2>
    </div>

    <table class="table-bordered">

    <tr> 
    <th style="width:10% "> First header </th>
    <th style="width:10% "> First body</th>
    <th style="width:10% "> Second header </th>
    <th style="width:10% "> Second body</th>
    <th style="width:10% "> Third header </th>
    <th style="width:10% "> Third body </th>
    <th style="width:10% "> Fourth header </th>
    <th style="width:10% "> Fourth body </th>
    <th style="width:10% "> Fifth header </th>
    <th style="width:10% "> Fifth body </th>
    <th style="width:10% "> Sixth header </th>
    <th style="width:10% "> Sixth body </th>

    <th style="width:10% "> Action </th>
    </tr>

    <tr>
    <td> <?= $getServicesText->mission ;?> </td>
    <td> <?= $getServicesText->mission_body ;?> </td>
    <td> <?= $getServicesText->vision ;?> </td>
    <td> <?= $getServicesText->vision_body ;?> </td>
    <td> <?= $getServicesText->philosophy ;?> </td>
    <td> <?= $getServicesText->philosophy_body ;?> </td>
    <td> <?= $getServicesText->trusted ;?> </td>
    <td> <?= $getServicesText->trusted_body ;?> </td>
    <td> <?= $getServicesText->professional ;?> </td>
    <td> <?= $getServicesText->professional_body ;?> </td>
    <td> <?= $getServicesText->stories ;?> </td>
    <td> <?= $getServicesText->stories_body ;?> </td>

    <td> <a href="edit-our-service.php?eid=<?= $getServicesText->id ?>" class= "btn btn-outline-success"> Edit </a></td>
    </tr>
    </table>

    </div>
    </div>
    </div>
    </div>
    </div>
<?php

include 'includes/footer.php';

?>