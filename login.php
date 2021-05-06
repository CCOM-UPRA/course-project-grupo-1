<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons Icon -->

<title>PRISM - Buy Movies Online</title>

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="assets/css/internal.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/revslider.css" >
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mobile-menu.css">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body id="new1" class="customer-account-login inner-page">
<div id="page"> 
  
<?php
include "includes/config.php";

include "includes/classes/Constants.php";
include "includes/classes/Account.php";

$account = new Account($connect);

include("includes/handlers/login-handler.php");
include "includes/header.php";
include "includes/navbar.php";
?>
  <!-- Navbar -->

  <!-- Main Container -->
 
  <section class="main-container col1-layout bounceInUp animated">
 
    <div class="main container">
      <div class="account-login">
        <div class="page-title">
          <h1 id="new1">Login or Create an Account</h1>
        </div>
        <fieldset class="col2-set">
          <legend>Login or Create an Account</legend>
          <div class="col-1 new-users"><strong>New Customers</strong>
            <div class="content">
              <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
              <div class="buttons-set">
               <a href="sign_up.php"> <button class="button create-account"> <span style="color:#fff;">Create an Account</span></button></a>
              </div>
            </div>
          </div>
         
          <div class="col-2 registered-users"><strong>Registered Customers</strong>
            <div class="content">
           <form class="form-horizontal "action="" method="post">
              <p>If you have an account with us, please log in.</p>
              
              <ul class="form-list">
              
                <li>
               
                  <label for="email"> Username <span class="required"></span></label>
                  <br>

                  <input type="email" title="" class="input-text" placeholder="Username" name="email">

                </li>
                <li>
                  <label for="password">Password <span class="required"></span></label>
                  <br>
                  <input type="password" title="password"  class="input-text" name="password" placeholder="password">
                </li>
              </ul>
              <p class="required">* Required Fields</p>
              <div class="buttons-set">
                <button  class="button login" name="login" ><span>Log in</span></button>
                <a class="forgot-word" href="#">Forgot Your Password?</a>  </div>
                </form>
                    
            </div>
            
          </div>
          
        </fieldset>
        
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>
     
  </section>
  <!-- Main Container End --> 
  
  <!-- Brand logo starts  -->
  <div class="brand-logo wow bounceInUp animated">
    <div class="container">
      <div class="slider-items-products">
        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="assets/newImages/Page Icon/disney icon.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="assets/newImages/Page Icon/marvel.jpg" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="assets/newImages/Page Icon/dc.jpg" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="assets/newImages/Page Icon/universal.jpg" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="assets/newImages/Page Icon/sony.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="assets/newImages/Page Icon/paramount.com" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="assets/images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="assets/images/b-logo4.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Brand logo ends  --> 
  
      <!-- Brand logo ends  --> 
  
       <!-- Footer  --> 
  
<?php
include("includes/footer.php");

?>
    <!-- Footer  -->
</div>

<!-- JavaScript --> 

<script type="text/javascript" src="assets/js/jquery.min.js"></script> 
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/parallax.js"></script> 
<script type="text/javascript" src="assets/js/common.js"></script> 
<script type="text/javascript" src="assets/js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.mobile-menu.min.js"></script> 
<script type="text/javascript" src="assets/js/cloud-zoom.js"></script>

</body>
</html>