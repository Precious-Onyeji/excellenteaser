<?php

include 'includes/header.php';

$authenticateAdmin= new Core;
$authenticateAdmin->authenticateAdmin();

?>


  <div class="products-box">
        <div class="container" style="margin-top: 10em;">
            
            <div class="row">
              <div class="col-lg-12">            
                    <div class="checkout-address">
                        <div class="title-left">
                            <h1 style="text-align: center;">Login</h1>
                        </div>

                        <form action="adminnzz" method="post">
                            <div class="mb-5">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="username" id="username"  placeholder="username" required>
                                </div>
                            </div>
                            <div class="mb-5">
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                            </div>
                       
                            <div class="row">
                           
                                <div class="col-md-6 mb-3">
                                  <input type="submit" Value="Log In" name="submit" style="background:#F90; color:#000; font-family:Lucida Console; border:none; width:100px; height:50px; cursor:pointer; "/>
                                </div>
                            </div>
                            </form>
                            </div>
            </div>             
            </div>
        </div>
    </div> <br> <br>

<?php

include 'includes/footer.php';

?>



