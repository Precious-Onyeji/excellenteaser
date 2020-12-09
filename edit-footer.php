<?php
include 'includes/header.php';

$opert= new Core();
$opert->runUpdateFooter();

if(isset($_GET['eid'])) {

    $id= $_GET['eid'];
    $returnFooterText= $opert->returnFooterText();

}

?>

<style type="text/css">

label {
    weight: bold;
    color: darkred;

}

</style>

<div class="container">
<div class="row">
  <div class="col-lg-10 col-sm-10 m-auto">    
    <div class="card mt-5">      
      <div class="card-header text-center bg-light">        
        <h1> Edit Footer </h1>
      </div>
      <form action="" method="POST">
      <div class="card-body">
      <div class="form-group"> 
      <label> About Excellent Easers </label>           
        <input type="text" class="form-control" name="about" value="<?= $returnFooterText->about ?>" placeholder="<?= $returnFooterText->about ?>"/>
      </div>
      <div class="form-group">      
      <div class="form-group">   
      <label> Strengths </label>                  
        <input type="text" class="form-control" name="strengths" value="<?= $returnFooterText->strengths ?>" placeholder="<?= $returnFooterText->strengths ?>" />
      </div>
      <div class="form-group">  
      <label> Contact Us </label>                  
      <input  type="text" class="form-control" name="contact" value="<?= $returnFooterText->contact ?>" placeholder="<?= $returnFooterText->contact ?>">
      </div>
      <div class="form-group" id="edit_about_us">    
      <label> Social Media Address Link </label>                
        <input type="text" class="form-control" name="social_media" value="<?= $returnFooterText->social_media ?>" placeholder="<?= $returnFooterText->social_media ?>" />
      </div>
      <div class="form-group">  
      <button class="btn btn-primary" name="update"> Update </button>
    </div>
  </form>
    </div>
  </div>
</div>
</div>
</div>

<?php

include 'includes/footer.php';
?>