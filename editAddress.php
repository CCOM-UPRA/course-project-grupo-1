<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Edit User</title>
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

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

	<!-- Modernizer js -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>
<body>
	
        <?php
          include "includes/classes/Constants.php";
          include "includes/classes/Account.php";
          include "includes/config.php";
          include "includes/header.php"; 
          include "includes/navbar.php";
          
          $account = new Account($connect);
          
          include "includes/handlers/editAddress-handler.php";

          $id = $_SESSION['userLoggedIn'];
          $query = "SELECT * FROM user NATURAL JOIN address WHERE userID = $id";
          $resultProduct = mysqli_query($connect, $query);
          $rowProduct = mysqli_fetch_assoc($resultProduct);
            
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
                        	<h2 class="bradcaump-title">My Account</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.php">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">My Account</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Contact Area -->
 
        <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-3">
          </div>
        <div class="col-sm-6">
        <form role="form" action="" method="post" enctype="multipart/form-data">
            <h1>Edit User</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="firstName">First Name</label>
                  <input type="text" class="form-control" id="firstName" name="firstName" required placeholder="First Name" value =<?php echo $rowProduct['firstName']?>>
                </div>
                <div class="form-group">
                  <label for="lastName">Last Name</label>
                  <input type="text" class="form-control" id="lastName" name="lastName" required placeholder="Last name" value =<?php echo $rowProduct['lastName']?>>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" name="email" required placeholder="Email" value =<?php echo $rowProduct['email']?>>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" class="form-control" id="password" name="password" required placeholder="Password" value =<?php echo $rowProduct['password']?>>
                </div>
                <div class="form-group">
                  <label for="phoneNumber">Phone number</label>
                  <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" required placeholder="Phone number" value =<?php echo $rowProduct['phoneNumber']?>>
                </div>
                <div class="form-group">
                  <label for="birthdate">Birth Date</label>
                  <input type="text" class="form-control" id="birthdate" name="birthdate" required placeholder="month day#, year" value =<?php echo $rowProduct['birthdate']?>>
                </div>
                <div class="form-group">
                  <label for="street1">Address</label>
                  <input type="text" class="form-control" id="address1" name="address1" required placeholder="Address" value =<?php echo $rowProduct['street1']?>>
                </div>
                <div class="form-group">
                  <label for="street2">Address 2</label>
                  <input type="text" class="form-control" id="address2" name="address2" placeholder="Address 2" value =<?php echo $rowProduct['street2']?>>
                </div>
                <div class="form-group">
                  <label for="state">Country</label>
                  <input type="text" class="form-control" id="state" name="state" required placeholder="Country" value =<?php echo $rowProduct['country']?>>
                </div>
                <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" class="form-control" id="city" name="city" required placeholder="City" value =<?php echo $rowProduct['city']?>>
                </div>
                <div class="form-group">
                  <label for="zipcode">Zip Code</label>
                  <input type="text" class="form-control" id="zipcode" name="zipcode" required placeholder="Zip Code" value =<?php echo $rowProduct['postal_code']?>>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="editAddress" value="submit" class="btn btn-primary">Edit</button>
                <button ><a href="account_information.php">Back</a></button>
              </div>

            </form>
            </div>
        </div>
      
        <div class="col-sm-3">
        </div>
    </section>
        <!-- End Contact Area -->

        <!-- Start Contact Area -->
        <!-- <section class="wn_contact_area bg--white" style = "padding-bottom: 4em;">
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
        </section> -->
        <!-- End Contact Area -->

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
		<!-- Footer Area -->
		<?php
            include "includes/footer.php";
        ?>
		<!-- //Footer Area -->

	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script> 
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/parallax.js"></script> 
<script type="text/javascript" src="assets/js/common.js"></script> 
<script type="text/javascript" src="assets/s/jquery.flexslider.js"></script> 
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.mobile-menu.min.js"></script> 
<script type="text/javascript" src="assets/js/cloud-zoom.js"></script>
	
</body>
</html>