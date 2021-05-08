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
  color:black;
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
      <div class="row">
        <div class="col-main col-sm-9">
          <div class="page-title">
            <h1>Checkout</h1>
          </div>
          <ol class="one-page-checkout" id="checkoutSteps">
            <li id="opc-billing" class="section allow active">
              <div class="step-title"> <span class="number">1</span>
                <h3>Checkout Method</h3>
                <!--<a href="#">Edit</a> --> 
              </div>
              <div id="checkout-step-billing" class="step a-item" >
                <form id="co-billing-form" method="POST">
                  <fieldset class="group-select">
                    <ul>
                      <li>
                        <label for="billing-address-select">Select a billing address from your address book or enter a new address.</label>
                        <br>
                        <select name="" id="billing-address-select" class="address-select" title="" onchange="billingAddresSelectHandler(this)">
                          <option value="1" selected="selected"><?php echo $rowProduct['street1']; echo $rowProduct['street2']; echo "   ";echo $rowProduct['postal_code']; echo "   ";echo $rowProduct['city']; echo "   ";echo $rowProduct['country'];?></option>
                          <option value ="2">New Address</option>
                        </select>
                      </li>
                      <li id="billing-new-address-form" style="display: none;">
                        <fieldset>
                          <legend>New Address</legend>
                          <input type="hidden" name="" value="4269" id="billing:address_id">
                          <ul>
                            <li>
                              <label for="street1">Address <span class="required">*</span></label>
                              <br>
                              <input type="text" title="Street Address" id="street1" name="address1" class="input-text">
                            </li>
                            <li>
                            <label for="street2">Address 2</label>
                              <input type="text" title="Street Address 2" id="street2" name="address2" class="input-text">
                            </li>
                            <li>
                              <div class="input-box">
                                <label for="city">City <span class="required">*</span></label>
                                <br>
                                <input type="text" title="City" name="city" id="city" class="input-text" >
                              </div>
                              <div class="input-box">
                                <label for="country">Country <span class="required">*</span></label>
                                <br>
                                <input type="text" title="City" name="state" id="country"class="input-text" >
                                
                              </div>
                            </li>
                            <li>
                              <div class="input-box">
                                <label for="postal_code">Zip/Postal Code <span class="required">*</span></label>
                                <br>
                                <input type="text" title="Zip/Postal Code" name="zipcode" id="postal_code"  class="input-text validate-zip-international">
                              </div>
                          
                            </li>
                            
                            <li>
                             
                              <button  type="submit" name="address"  class="button continue" ><span>Save</span></button>
                            </li>
                          </ul>
                        </fieldset>
                      </li>
                     
                    </ul>
                    <p class="require"><em class="required">* </em>Required Fields</p>
                    <button onClick = "openForm();hideForm();" type="button" class="button continue" ><span>Continue</span></button>
                  </fieldset>
                </form>
              </div>
            </li>
            <li id="opc-shipping" class="section">
              <div class="step-title"> <span class="number">2</span>
                <h3 class="one_page_heading"> Shipping Information</h3>
                <!--<a href="#">Edit</a>--> 
              </div>
              <div id="checkout-step-shipping" class="step a-item" style="display: none;">
                <form  id="co-shipping-form">
                  <fieldset class="group-select">
                    <ul>
                      <li>
                        <label for="shipping-address-select">Select a shipping address from your address book or enter a new address.</label>
                        <br>
                        <select name="" id="shipping-address-select" class="address-select" title="" onchange="shippingAddresSelectHandler(this)">
                          <option value="1" selected="selected"><?php echo $rowProduct['street1']; echo $rowProduct['street2']; echo "   ";echo $rowProduct['postal_code']; echo "   ";echo $rowProduct['city']; echo "   ";echo $rowProduct['country'];?></option>
                          <option value="2">New Address</option>
                        </select>
                      </li>
                      <li id="shipping-new-address-form" style="display: none;">
                      <fieldset>
                          <legend>New Address</legend>
                          <input type="hidden" name="" value="4269" id="billing:address_id">
                          <ul>
                            <li>
                              <label for="street1">Address <span class="required">*</span></label>
                              <br>
                              <input type="text" title="Street Address" id="street1" name="address1" class="input-text">
                            </li>
                            <li>
                            <label for="street2">Address 2</label>
                              <input type="text" title="Street Address 2" id="street2" name="address2" class="input-text">
                            </li>
                            <li>
                              <div class="input-box">
                                <label for="city">City <span class="required">*</span></label>
                                <br>
                                <input type="text" title="City" name="city" id="city" class="input-text" >
                              </div>
                              <div class="input-box">
                                <label for="country">Country <span class="required">*</span></label>
                                <br>
                                <input type="text" title="City" name="state" id="country"class="input-text" >
                                
                              </div>
                            </li>
                            <li>
                              <div class="input-box">
                                <label for="postal_code">Zip/Postal Code <span class="required">*</span></label>
                                <br>
                                <input type="text" title="Zip/Postal Code" name="zipcode" id="postal_code"  class="input-text validate-zip-international">
                              </div>
                          
                            </li>
                            
                            <li>
                             
                              <button  type="submit" name="address"  class="button continue" ><span>Save</span></button>
                            </li>
                          </ul>
                        </fieldset>
                      </li>
                    </ul>
                    <p class="require"><em class="required">* </em>Required Fields</p>
                    <div class="buttons-set1" id="shipping-buttons-container">
                      <button  onClick="openForm2();hideForm2();" type="button" class="button" ><span>Continue</span></button>
                      <a href="#" class="back-link">« Back</a> </div>
                  </fieldset>
                </form>
              </div>
            </li>
           
            <li id="opc-payment" class="section">
              <div class="step-title"> <span class="number">3</span>
                <h3 class="one_page_heading">Payment Information</h3>
                <!--<a href="#">Edit</a>--> 
              </div>
              <div id="checkout-step-payment" class="step a-item" style="display: none;">
                <form id="co-payment-form">
                  <dl id="checkout-payment-method-load">
                    <dt>
                      <input type="radio" id="p_method_checkmo" value="checkmo" name="" title="Check / Money order" class="radio">
                      <label for="p_method_checkmo">Paypal</label>
                    </dt>
                    <dd>
                      <fieldset class="form-list">
                      </fieldset>
                    </dd>
                    <dt>
                      <input type="radio" id="p_method_ccsave" value="ccsave" name="" title="Credit Card (saved)" class="radio">
                      <label for="p_method_ccsave">Credit Card (saved)</label>
                    </dt>
                    <dd>
                      <fieldset class="form-list">
                        <ul id="payment_form_ccsave" style="display: none;">
                          <li>
                            <div class="input-box">
                              <label for="ccsave_cc_owner">Name on Card <span class="required">*</span></label>
                              <br>
                              <input type="text" disabled="" title="Name on Card" class="input-text" id="ccsave_cc_owner" name="" >
                            </div>
                          </li>
                          <li>
                            <div class="input-box">
                              <label for="ccsave_cc_type">Credit Card Type <span class="required">*</span></label>
                              <br>
                              <select disabled="" id="ccsave_cc_type" name="" class="required-entry validate-cc-type-select">
                                <option >--Please Select--</option>
                                <option value="AE">American Express</option>
                                <option value="VI">Visa</option>
                                <option value="MC">MasterCard</option>
                                <option value="DI">Discover</option>
                              </select>
                            </div>
                          </li>
                          <li>
                            <div class="input-box">
                              <label for="ccsave_cc_number">Credit Card Number <span class="required">*</span></label>
                              <br>
                              <input type="text" disabled="" id="ccsave_cc_number" name="" title="Credit Card Number" class="input-text validate-cc-number validate-cc-type" >
                            </div>
                          </li>
                          <li>
                            <div class="input-box">
                              <label for="ccsave_expiration">Expiration Date <span class="required">*</span></label>
                              <br>
                              <div class="v-fix">
                                <select disabled="" id="ccsave_expiration" style="width: 140px;" name="" class="required-entry">
                                  <option  selected="selected">Month</option>
                                  <option value="1">01 - January</option>
                                  <option value="2">02 - February</option>
                                  <option value="3">03 - March</option>
                                  <option value="4">04 - April</option>
                                  <option value="5">05 - May</option>
                                  <option value="6">06 - June</option>
                                  <option value="7">07 - July</option>
                                  <option value="8">08 - August</option>
                                  <option value="9">09 - September</option>
                                  <option value="10">10 - October</option>
                                  <option value="11">11 - November</option>
                                  <option value="12">12 - December</option>
                                </select>
                              </div>
                              <div class="v-fix">
                                <select disabled="" id="ccsave_expiration_yr" style="width: 103px;" name="" class="required-entry">
                                  <option  selected="selected">Year</option>
                                  <option value="2011">2011</option>
                                  <option value="2012">2012</option>
                                  <option value="2013">2013</option>
                                  <option value="2014">2014</option>
                                  <option value="2015">2015</option>
                                  <option value="2016">2016</option>
                                  <option value="2017">2017</option>
                                  <option value="2018">2018</option>
                                  <option value="2019">2019</option>
                                  <option value="2020">2020</option>
                                  <option value="2021">2021</option>
                                </select>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="input-box">
                              <label for="ccsave_cc_cid">Card Verification Number <span class="required">*</span></label>
                              <br>
                              <div class="v-fix">
                                <input type="text" title="Card Verification Number" class="input-text" id="ccsave_cc_cid" name="" style="width: 3em;" >
                              </div>
                              <a href="#" class="cvv-what-is-this">What is this?</a> </div>
                          </li>
                        </ul>
                      </fieldset>
                    </dd>
                  </dl>
                </form>
                <p class="require"><em class="required">* </em>Required Fields</p>
                <div class="buttons-set1" id="payment-buttons-container">
                  <button onClick="openForm3();hideForm3();" type="button" class="button"><span>Continue</span></button>
                  <a href="#" class="back-link">« Back</a> </div>
                <div style="clear: both;"></div>
              </div>
            </li>
            <li id="opc-review" class="section">
              <div class="step-title"> <span class="number">4</span>
                <h3 class="one_page_heading">Order Review</h3>
              </div>
              <div style="float: right;"><button type="button" class="button continue" ><a href="recibo.php" style="color: #FFF;"><span>Submit</span></a></button></div>
              <div id="checkout-step-review" class="step a-item" style="display: none;">
                <div class="order-review" id="checkout-review-load"> </div>
                <div class="buttons-set13" id="review-buttons-container">
                  <p class="f-left">Forgot an Item? <a href="shopping-cart.php">Edit Your Cart</a></p>
                  <button type="submit" class="button" ><span>Place Order</span></button>
                </div>
              </div>
            </li>
          </ol>
        </div>
        <aside class="col-right sidebar col-sm-3">
          <div class="block block-progress">
            <div class="block-title ">Your Checkout</div>
            <div class="block-content">
              <dl>
                <dt class="complete"> Billing Address <span class="separator">|</span> <a href="#">Change</a> </dt>
                <dd class="complete">
                  <address>
                  No Information
                  </address>
                </dd>
                <dt class="complete"> Shipping Address <span class="separator">|</span> <a href="#">Change</a> </dt>
                <dd class="complete">
                  <address>
                  No Information
                  </address>
                </dd>
                <dt class="complete"> Shipping Method <span class="separator">|</span> <a href="#">Change</a> </dt>
                <dd class="complete"> Flat Rate - Fixed <br>
                  <span class="price">$0.00</span> </dd>
                <dt> Payment Method </dt>
              </dl>
            </div>
          </div>
        </aside>
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

  function hideForm(){
    document.getElementById('checkout-step-billing').style.display = 'none';
  }
  function openForm(){
    document.getElementById('checkout-step-shipping').style.display = '';
  }
  function hideForm2(){
    document.getElementById('checkout-step-shipping').style.display = 'none';
  }
  function openForm2(){
    document.getElementById('checkout-step-payment').style.display = '';
  }
  function hideForm3(){
    document.getElementById('checkout-step-payment').style.display = 'none';
  }
  function openForm3(){
    document.getElementById('checkout-step-review').style.display = '';
  }
  
  function open(){
    document.getElementById('billing-new-address-form').style.display = '';
  }
  function open2(){
    document.getElementById('shipping-new-address-form').style.display = '';
  }
  function billingAddresSelectHandler(select){
    if(select.value == '2'){
      open();
    } 
  }
  function shippingAddresSelectHandler(select){
    if(select.value == '2'){
      open2();
    } 
  }
</script>
</body>
</html>