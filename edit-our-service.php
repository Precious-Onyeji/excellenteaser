<?php
include 'includes/header.php';

$opert= new Core();
$opert->runUpdateService();

if(isset($_GET['eid'])) {

    $id= $_GET['eid'];
    $returnServiceText= $opert->returnServiceText($id);

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
        <h1> Edit Our Service Page </h1>
      </div>
      <form action="" method="POST">
      <div class="card-body">
      <div class="form-group">    
      <label> First Heading </label>           
        <input type="text" class="form-control" name="mission" value="<?= $returnServiceText->mission ?>" placeholder="<?= $returnServiceText->mission ?>"/>
      </div>
      <div class="form-group">      
      <label> First body </label>             
        <textarea class="form-control" name="mission_body" placeholder="<?= $returnServiceText->mission_body ?>" row="70" column="700"><?= $returnServiceText->mission_body ?></textarea>
      </div>
      <div class="form-group">   
      <label> Second Heading </label>                  
        <input type="text" class="form-control" name="vision" value="<?= $returnServiceText->vision?>" placeholder="<?= $returnServiceText->vision?>" />
      </div>
      <div class="form-group">  
      <label> Second body </label>                  
        <textarea class="form-control" name="vision_body" placeholder="<?= $returnServiceText->vision_body ?>"><?= $returnServiceText->vision_body ?></textarea>
      </div>
      <div class="form-group" id="edit_about_us">    
      <label> Third Heading </label>                
        <input type="text" class="form-control" name="philosophy" value="<?= $returnServiceText->philosophy ?>" placeholder="<?= $returnServiceText->philosophy ?>" />
      </div>
      <div class="form-group">       
      <label> Third Body </label>                
        <textarea class="form-control" name="philosophy_body" placeholder="<?= $returnServiceText->philosophy_body ?>" required><?= $returnServiceText->philosophy_body ?></textarea>
      </div>
      <div class="form-group">  
      <label> Fourth Heading </label>                     
        <input type="text" class="form-control" name="trusted" value="<?= $returnServiceText->trusted ?>" placeholder="<?= $returnServiceText->trusted ?>" />
      </div>
      <div class="form-group">
      <label> Fourth Body </label>                       
        <textarea class="form-control" name="trusted_body" placeholder="<?= $returnServiceText->trusted_body ?>" ><?= $returnServiceText->trusted_body ?></textarea>
      </div>
      <div class="form-group">  
      <label> Fifth Heading </label>                     
        <input type="text" class="form-control" name="professional" value="<?= $returnServiceText->professional ?>" placeholder="<?= $returnServiceText->professional ?>" />
      </div>
      <div class="form-group">       
      <label> Fifth Body </label>                
        <textarea class="form-control" name="professional_body" placeholder="<?= $returnServiceText->professional_body ?>"><?= $returnServiceText->professional_body ?></textarea>
      </div>
      <div class="form-group">  
      <label> Sixth Heading </label>                     
        <input type="text" class="form-control" name="stories" value="<?= $returnServiceText->stories ?>" placeholder="<?= $returnServiceText->stories ?>" />
      </div>
      <div class="form-group">       
      <label> Sixth Body </label>                
        <textarea class="form-control" name="stories_body" placeholder="<?= $returnServiceText->stories_body ?>"><?= $returnServiceText->stories_body ?></textarea>
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