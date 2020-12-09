<?php
include 'includes/header.php';

$opert= new Core();
$result= $opert->runUpdateContact();

if(isset($_GET['eid'])) {

    $id= $_GET['eid'];
    $getContactText= $opert->returnContactText($id);

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
        <h1> Edit Contact Us Page </h1>
      </div>
      <form action="" method="POST">
      <div class="card-body">

      <div class="form-group">    
      <label> Heading on the Left </label>           
        <input type="text" class="form-control" name="left_header" value="<?= $getContactText->left_header ?>" placeholder="<?= $getContactText->left_header ?>"/>
      </div>
      <div class="form-group">      
      <label> Body on the Left </label>             
        <textarea class="form-control" name="left_body" placeholder="<?= $getContactText->left_body ?>" row="70" column="700"><?= $getContactText->left_body ?></textarea>
      </div>
      <div class="form-group">   
      <label> Address </label>                  
        <input type="text" class="form-control" name="address" value="<?= $getContactText->address ?>" placeholder="<?= $getContactText->address ?>" />
      </div>
      <div class="form-group">  
      <label> Phone Number </label>                  
      <input  type="text" class="form-control" name="phone" value="<?= $getContactText->phone ?>" placeholder="<?= $getContactText->phone ?>">
      </div>
      <div class="form-group" id="edit_about_us">    
      <label> Email </label>                
        <input type="email" class="form-control" name="email" value="<?= $getContactText->email ?>" placeholder="<?= $getContactText->email ?>" />
      </div>
      <div class="form-group">  
      <label> Heading on the Right </label>                     
        <input type="text" class="form-control" name="right_header" value="<?= $getContactText->right_header ?>" placeholder="<?= $getContactText->right_header ?>" />
      </div>
      <div class="form-group">
      <label>Body on the Right</label>                       
        <textarea class="form-control" name="right_body" placeholder="<?= $getContactText->right_body ?>" ><?= $getContactText->right_body ?></textarea>
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