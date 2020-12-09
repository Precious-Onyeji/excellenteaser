<?php
include 'includes/header.php';

$opert= new Core();
$opert->runUpdateHeader();

if(isset($_GET['eid'])) {

    $id= $_GET['eid'];
    $returnHeaderText= $opert->returnHeaderText($id);

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
        <h1> Edit Header </h1>
      </div>
      <form method="POST">
      <div class="card-body">

      <div class="form-group">    
      <label> Id </label>           
        <input type="text" class="form-control" name="id" value="<?= $returnHeaderText->id ?>" placeholder="<?= $returnHeaderText->id ?>"/>
      </div>
      <div class="form-group">    
      <label> Slider Text </label>           
        <input type="text" class="form-control" name="slider" value="<?= $returnHeaderText->slider ?>" placeholder="<?= $returnHeaderText->slider ?>"/>
      </div>
      <div class="form-group">      
      <label> Contact (Email and Phone number) </label>             
        <input type="text" class="form-control" name="reach" value="<?= $returnHeaderText->reach ?>" placeholder="<?= $returnHeaderText->reach ?>" row="70" column="700">
      </div>
      <div class="form-group">   
      <label> School Services </label>                  
        <input type="text" class="form-control" name="school_services" value="<?= $returnHeaderText->school_services ?>" placeholder="<?= $returnHeaderText->school_services ?>" />
      </div>
      <div class="form-group">  
      <label> Home Devices </label>                  
      <input  type="text" class="form-control" name="home_devices" value="<?= $returnHeaderText->home_devices ?>" placeholder="<?= $returnHeaderText->home_devices ?>">
      </div>
      <div class="form-group" id="edit_about_us">    
      <label> Clothing Materials </label>                
        <input type="email" class="form-control" name="clothing" value="<?= $returnHeaderText->clothing ?>" placeholder="<?= $returnHeaderText->clothing ?>" />
      </div>
      <div class="form-group">  
      <label> Accessories </label>                     
        <input type="text" class="form-control" name="accessories" value="<?= $returnHeaderText->accessories ?>" placeholder="<?= $returnHeaderText->accessories ?>" />
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