<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>My Address</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/icon.png">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="css/internal.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/simple-line-icons.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/revslider.css" >
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/flexslider.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.mobile-menu.css">

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

	<!-- Modernizer js -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>
<body>
	
        <?php
            include "partials/connect.php";
            include "partials/header.php";
            include "partials/navbar.php";
            // include "includes/handlers/AddressUpdate.php";
        ?>
	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		
		<!-- Header -->
		
        <!-- //Header -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style ="padding-top: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">My Address</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.php">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">My Address</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Contact Area -->
        <section class="" style = "padding-bottom: 4em;">
            <div class="container">
        		<div class="row">
        			<div class="col-lg-8 col-12">
        				<div class="contact-form-wrap">
                            
                            <h2 class="contact__title">Edit Address</h2>
                            <form action="edit-address-handler.php" method="post">
                                <div class="single-contact-form space-between">
                                    <input type="text" name="address1" placeholder="Address 1*" required>
                                    <input type="text" name="address2" placeholder="Address 2">
                                </div>
                                <div class="single-contact-form space-between">
                                    <input type="text" name="city" placeholder="City*" required>
                                    <input type="text" name="state" placeholder="State*" required>
                                    <input type="text" name="zipcode" placeholder="Zip Code*" required>
                                </div>
                                <div class="btn primary-btn">
                                    <button type="submit" name="address">Edit Address</button>
                                </div>
                            </form>
                        </div>
        			</div>
        		</div>
        	</div>
        </section>
        <!-- End Contact Area -->

        <!-- Start Contact Area -->
        <section class="wn_contact_area bg--white" style = "padding-bottom: 4em;">
            <div class="container">
        		<div class="row">
        			<div class="col-lg-8 col-12">
        				<div class="contact-form-wrap">
                            
                            <h2 class="contact__title">Add Payment Method</h2>
                            <form action="" method="post">
                                <div class="single-contact-form space-between">
                                    <input type="text" name="cardNumber" placeholder="Full name" required>
                                    <input type="text" name="address2" placeholder="Address 2">
                                </div>
                                <div class="single-contact-form space-between">
                                    <input type="text" name="city" placeholder="City*" required>
                                    <input type="text" name="state" placeholder="State*" required>
                                    <input type="text" name="zipcode" placeholder="Zip Code*" required>
                                </div>
                                <div class="single-contact-form space-between">
                                    <input type="tel" name="phone" placeholder="Phone Number (Format: 123-456-7890)" pattern="\d{3}[\-]\d{3}[\-]\d{4}" required>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit" name="address">Add Address</button>
                                </div>
                            </form>
                        </div>
        			</div>
        		</div>
        	</div>
        </section>
        <!-- End Contact Area -->

        <!-- Brand logo starts  -->
  <div class="brand-logo wow bounceInUp animated">
    <div class="container">
      <div class="slider-items-products">
        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            
           
            <!-- Item -->
            <div class="item"><a href="#"><img src="newImages/Page Icon/disney icon.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="newImages/Page Icon/marvel.jpg" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="newImages/Page Icon/dc.jpg" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="newImages/Page Icon/universal.jpg" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="newImages/Page Icon/sony.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="newImages/Page Icon/paramount.com" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo4.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Brand logo ends  --> 
		<!-- Footer Area -->
		<?php
            include "partials/footer.php";
        ?>
		<!-- //Footer Area -->

	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script> 
<script type="text/javascript" src="js/cloud-zoom.js"></script>
	
</body>
</html>