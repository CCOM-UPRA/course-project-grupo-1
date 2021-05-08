<?php
include "includes/config.php";

?>
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
<link rel="stylesheet" type="text/css" href="assets/css/animate.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/revslider.css" >
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mobile-menu.css">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<style>
li{
  color:white;
}

</style>
</head>

<body class="onestepcheckout-index-index inner-page">
<div id="page"> 
  
  <?php
include("includes/header.php");

?>
  <!-- Navbar -->
<?php
include "includes/classes/Account.php";
include("includes/navbar.php");
$account = new Account($connect);
include "includes/handlers/checkoutAddAddress-handler.php";


    
    
    $id = $_SESSION['userLoggedIn'];
          $query = "SELECT * FROM user NATURAL JOIN address WHERE userID = $id";
          $resultProduct = mysqli_query($connect, $query);
          $rowProduct = mysqli_fetch_assoc($resultProduct);
   
  ?>
  <!-- Main Container -->
  <section class="main-container col2-right-layout bounceInUp animated">
    <div class="main container">
    <div id="co-billing-form1" >
      <div class="row">
        <div class="col-main col-sm-9">
          <div class="page-title">
            <h1>Checkout</h1>
          </div>
          <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-3">
          </div>
        <div class="col-sm-6">
        <form role="form" action="" method="post" enctype="multipart/form-data">
            <h3>Billing Address</h3>
              <div class="box-body">
               
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
              <h3>Shipping Address</h3>
              <div class="box-body">
               
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
              <h3>Payment Method</h3>
              <div class="box-body">
               
                <div class="form-group">
                  <label for="card_number">Card Number</label>
                  <input type="text" class="form-control" id="card_number" name="card_number" required placeholder="Card Number" >
                </div>
                <div class="form-group">
                  <label for="secNumber">Security Number</label>
                  <input type="text" class="form-control" id="secNumber" name="secNumber" placeholder="Security Number" >
                </div>
                <div class="form-group">
                  <label for="expDate">Expiration Date</label>
                  <input type="text" class="form-control" id="expDate" name="expDate" required placeholder="Expiration Date">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                <button ><a href="shopping_cart.php">Back</a></button>
              </div>

            </form>
            </div>
        </div>
      
        <div class="col-sm-3">
        </div>
    </section>
        </div>
   
      </div>
      </div>
    </div>
  </section>
  <!-- Main Container End --> 
  
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
<script>

  function openForm(){
    document.getElementById('checkout-step-shipping').style.display = '';
  }
  function openForm2(){
    document.getElementById('checkout-step-payment').style.display = '';
  }
  function openForm3(){
    document.getElementById('checkout-step-review').style.display = '';
  }
  
  function open(){
    document.getElementById('billing-new-address-form').style.display = '';
  }
  function close(){
    document.getElementById('billing-new-address-form').style.display = 'none';
  }
  function open2(){
    document.getElementById('shipping-new-address-form').style.display = '';
  }
  function close2(){
    document.getElementById('shipping-new-address-form').style.display = 'none';
  }
  function openVisa(){
    document.getElementById('shipping-new-address-form').style.display = '';
  }
  function closeVisa(){
    document.getElementById('shipping-new-address-form').style.display = 'none';
  }
  function openCredit(){
    document.getElementById('payment_form_ccsave').style.display = '';
  }
  function closeCredit(){
    document.getElementById('payment_form_ccsave').style.display = 'none';
  }



  function billingAddresSelectHandler(select){
    if(select.value == '1'){
      open();
    } 
    else{
      close();
    }
  }
  function paymentMethod(select){
    if(select.value == '1'){
      openVisa();
      closeCredit();
    } 
    else if(select.value == '3'){
      openVisa();
      closeCredit();
    } 
    else{
      openCredit();
      //closeVisa();
    }
  }
  function shippingAddresSelectHandler(select){
    if(select.value == '1'){
      open2();
    } 
    else{
      close2();
    }
  }
</script>
</body>
</html>