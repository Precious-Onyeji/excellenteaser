<?php
include 'includes/header.php';

$opert= new Core();
$result= $opert->runUpdateAbout();

if(isset($_GET['eid'])) {

    $id= $_GET['eid'];
    $getAboutText= $opert->returnAboutText($id);

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
        <h1> Edit About Us Page </h1>
      </div>
      <form action="" method="POST">
      <div class="card-body">
      <div class="form-group">    
      <label> Description Heading </label>           
        <input type="text" class="form-control" name="description_header" value="<?= $getAboutText->description_header ?>" placeholder="<?= $getAboutText->description_header ?>"/>
      </div>
      <div class="form-group">      
      <label> Description body </label>             
        <textarea class="form-control" name="description_body" value="<?= $getAboutText->description_body ?>" placeholder="<?= $getAboutText->description_body ?>" row="70" column="700"><?= $getAboutText->description_body ?></textarea>
      </div>
      <div class="form-group">   
      <label> First Heading </label>                  
        <input type="text" class="form-control" name="tested_header" value="<?= $getAboutText->tested_header?>" placeholder="<?= $getAboutText->tested_header?>" />
      </div>
      <div class="form-group">  
      <label> First body </label>                  
        <textarea class="form-control" name="tested_body" placeholder="<?= $getAboutText->tested_body ?>"><?= $getAboutText->tested_body ?></textarea>
      </div>
      <div class="form-group" id="edit_about_us">    
      <label> Second Heading </label>                
        <input type="text" class="form-control" name="professional_header" value="<?= $getAboutText->professional_header ?>" placeholder="<?= $getAboutText->professional_header ?>" />
      </div>
      <div class="form-group">       
      <label> Second Body </label>                
        <textarea class="form-control" name="professional_body" placeholder="<?= $getAboutText->professional_body ?>" required><?= $getAboutText->professional_body ?></textarea>
      </div>
      <div class="form-group">  
      <label> Third Heading </label>                     
        <input type="text" class="form-control" name="expert_header" value="<?= $getAboutText->expert_header ?>" placeholder="<?= $getAboutText->expert_header ?>" />
      </div>
      <div class="form-group">
      <label> Third Body </label>                       
        <textarea class="form-control" name="expert_body" placeholder="<?= $getAboutText->expert_body ?>" ><?= $getAboutText->expert_body ?></textarea>
      </div>
      <div class="form-group">  
      <label> Fourth Heading </label>                     
        <input type="text" class="form-control" name="ceo_header" value="<?= $getAboutText->ceo_header ?>" placeholder="<?= $getAboutText->ceo_header ?>" />
      </div>
      <div class="form-group">       
      <label> Fourth Body </label>                
        <textarea class="form-control" name="ceo_body" placeholder="<?= $getAboutText->ceo_body ?>"><?= $getAboutText->ceo_body ?></textarea>
      </div>
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