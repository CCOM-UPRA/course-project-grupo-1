<!DOCTYPE html>
<html lang="en">
<?php
// require_once("includes/config.php");
?>
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons Icon -->

<title>Account Information</title> 

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

<body class="customer-account-index customer-account inner-page">
<div id="page"> 
  
  
<?php
include "includes/config.php";
include "includes/header.php";
include "includes/handlers/account-handler.php";
?>
  <!-- Navbar -->
<?php
include("includes/navbar.php");

?> 
  <!-- End Navbar -->
  
  <!-- Main Container -->
  <section class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <div class="col-main col-sm-9 animated" style="visibility: visible;">
          <div class="my-account">
            <div class="page-title">
              <h1>Account Information</h1>
            </div> 
            <div class="line"></div>
            <div class="dashboard">
              <div id="form-validate">
                <div class="fieldset">
                  <input name="" type="hidden" value="bO6ubPokBJ71l86o">
                  <ul class="form-list">
                    <li class="fields">
                      <div class="customer-name">
                        <div class="input-box name-firstname">
                          <label for="fullName"><b>Full Name</b></label>
                          <div class="input-box1">
                          <p id ="fullName" title="" maxlength="255" class="input-text"><?php echo $row_user_info['firstName'],' ', $row_user_info['lastName'];?></p>
                           
                          </div>
                        </div>
                        <div class="input-box name-lastname">
                          <label for="address"><b>Address</b></label>
                          <div class="input-box1">
                            <p id = "address" class="input-text required-entry">  <?php 
                            if($row_user_defaults['street1'] == ''){
                                echo "No address information to display.";
                              }else{
                                echo $row_user_defaults['street1']. ' '.$row_user_defaults['city'].' '. $row_user_defaults['country']. ' '. $row_user_defaults['postal_code'];
                              }
                            ?></p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <label for="email"><b>Email Address</b></label>
                      <div class="input-box">
                        <p   id="email" title="Email Address" class="input-text validate-email">
                        <?php echo $row_user_info['email']; ?></p>
                      </div>
                    </li>
                    <li>
                      <label for="phone_number"><b>Phone Number</b></label>
                      <div class="input-box">
                        <p   id="phone_number"  class="input-text">
                        <?php echo $row_user_info['phoneNumber']; ?></p>
                      </div>
                    </li>
                   
                  </ul>
                </div>
               
                <div class="buttons-set">
                  <a class ="btn btn-primary" href = "editAddress.php"><span>Edit</span></button>
                  <a href="#"><small></small></a></div>
              </div>
            </div>
            <!--dashboard--> 
          </div>
        </div>
        <aside class="col-right sidebar col-sm-3 animated" style="visibility: visible;">
          <div class="block block-account">
            <div class="block-title"> My Account </div>
            <div class="block-content">
              <ul>
                
                <li class="current"><a>Account Information</a></li>
                <li><a href="#"><span> My Orders</span></a></li>
          </div>
          <!--block block-account--> 
          
        </aside>
        <!--col-right sidebar col-sm-3--> 
      </div>
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
  
  <!-- Footer  --> 
  
<?php
include("includes/footer.php");

?>

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