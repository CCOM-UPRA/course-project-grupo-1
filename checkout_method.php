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

<title>Superb premium HTML5 &amp; CSS3 template</title>

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
</head>

<body class="onestepcheckout-index-index inner-page">
<div id="page"> 
  
  <?php
include("partials/header.php");

?>
  <!-- Navbar -->
<?php
include("partials/navbar.php");

?> 
  
  <!-- Main Container -->
  <section class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <div class="col-main col-sm-9">
          <div class="page-title">
            <h1>Checkout</h1>
          </div>
          <ol class="one-page-checkout" id="checkoutSteps">
            <li id="opc-login" class="section allow active">
              <div class="step-title"> <span class="number">1</span>
                <h3 class="one_page_heading">Checkout Method</h3>
                <!--<a href="#">Edit</a>--> 
              </div>
              <div id="checkout-step-login" class="step a-item">
                <div class="col2-set">
                  <div class="col-1">
                    <h2>Checkout as a Guest or Register</h2>
                    <p>Register with us for future convenience:</p>
                    <ul class="form-list">
                      <li class="control">
                        <input type="radio" class="radio" value="guest" id="login:guest" name="">
                        <label for="login:guest">Checkout as Guest</label>
                      </li>
                      <li class="control">
                        <input type="radio" class="radio" value="register" id="login:register" name="">
                        <label for="login:register">Register</label>
                      </li>
                    </ul>
                    <br>
                    <h4>Register and save time!</h4>
                    <p>Register with us for future convenience:</p>
                    <ul class="ul">
                      <li>Fast and easy check out</li>
                      <li>Easy access to your order history and status</li>
                    </ul>
                    <div class="buttons-set">
                      <p class="required">&nbsp;</p>
                      <button class="button continue" type="button" id="onepage-guest-register-button"><span><span>Continue</span></span></button>
                    </div>
                  </div>
                  <div class="col-2">
                    <h2>Login</h2>
                    <form method="post" action="#" id="login-form">
                      <fieldset>
                        <h4>Already registered?</h4>
                        <p>Please log in below:</p>
                        <ul class="form-list">
                          <li>
                            <label for="login-email"><em>*</em>Email Address</label>
                            <div class="input-box">
                              <input type="text" name="" id="login-email" class="input-text validate-email">
                            </div>
                          </li>
                          <li>
                            <label for="login-password"><em>*</em>Password</label>
                            <div class="input-box">
                              <input type="password" name="" id="login-password" class="input-text">
                            </div>
                          </li>
                        </ul>
                        <input type="hidden" value="checkout" name="">
                      </fieldset>
                    </form>
                    <div class="buttons-set">
                      <p class="required">* Required Fields</p>
                      <button class="button login" type="submit"><span><span>Login</span></span></button>
                      <a class="f-right" href="#">Forgot your password?</a> </div>
                  </div>
                </div>
              </div>
            </li>
            <li id="opc-billing" class="section">
              <div class="step-title"> <span class="number">2</span>
                <h3 class="one_page_heading">Billing Information</h3>
                <!--<a href="#">Edit</a>--> 
              </div>
            </li>
            <li id="opc-shipping" class="section">
              <div class="step-title"> <span class="number">3</span>
                <h3 class="one_page_heading">Shipping Information</h3>
                <!--<a href="#">Edit</a>--> 
              </div>
              <div id="checkout-step-shipping" class="step a-item" style="display: none;">
                <form id="co-shipping-form">
                  <fieldset class="group-select">
                    <ul>
                      <li id="shipping-new-address-form">
                        <fieldset>
                          <input type="hidden" name="" value="9681" id="shipping:address_id" />
                          <ul>
                            <li>
                              <div class="customer-name">
                                <div class="input-box name-firstname">
                                  <label for="shipping:firstname"> First Name <span class="required">*</span> </label>
                                  <br />
                                  <input type="text" id="shipping:firstname" name="" title="First Name" class="input-text" onChange="shipping.setSameAsBilling(false)" />
                                </div>
                                <div class="input-box name-lastname">
                                  <label for="shipping:lastname"> Last Name <span class="required">*</span> </label>
                                  <br />
                                  <input type="text" id="shipping:lastname" name="" title="Last Name" class="input-text" onChange="shipping.setSameAsBilling(false)" />
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="input-box">
                                <label for="shipping:company">Company</label>
                                <br />
                                <input type="text" id="shipping:company" name="" title="Company" class="input-text" onChange="shipping.setSameAsBilling(false);" />
                              </div>
                            </li>
                            <li>
                              <label for="shipping:street1">Address <span class="required">*</span></label>
                              <br />
                              <input type="text" title="Street Address" name="" id="shipping:street1" class="input-text" onChange="shipping.setSameAsBilling(false);" />
                            </li>
                            <li>
                              <input type="text" title="Street Address 2" name="" id="shipping:street2" class="input-text" onChange="shipping.setSameAsBilling(false);" />
                            </li>
                            <li>
                              <div class="input-box">
                                <label for="shipping:city">City <span class="required">*</span></label>
                                <br />
                                <input type="text" title="City" name="" class="input-text" id="shipping:city" onChange="shipping.setSameAsBilling(false);" />
                              </div>
                              <div id="div" class="input-box">
                                <label for="shipping:region">State/Province <span class="required">*</span></label>
                                <br />
                                <select id="shipping:region_id" name="" title="State/Province" class="validate-select">
                                  <option value="">Please select region, state or province</option>
                                  <option value="1">Alabama</option>
                                  <option value="2">Alaska</option>
                                  <option value="3">American Samoa</option>
                                </select>
                                <input type="text" id="shipping:region" name="shipping[region]" title="State/Province" class="input-text" style="display: none;" />
                              </div>
                            </li>
                            <li>
                              <div class="input-box">
                                <label for="shipping:postcode">Zip/Postal Code <span class="required">*</span></label>
                                <br />
                                <input type="text" title="Zip/Postal Code" name="" id="shipping:postcode" class="input-text validate-zip-international" onChange="shipping.setSameAsBilling(false);" />
                              </div>
                              <div class="input-box">
                                <label for="shipping:country_id">Country <span class="required">*</span></label>
                                <br />
                                <select name="" id="shipping:country_id" class="validate-select" title="Country" onChange="shipping.setSameAsBilling(false);">
                                  <option value=""> </option>
                                  <option value="AF">Afghanistan</option>
                                  <option value="AL">Albania</option>
                                  <option value="DZ">Algeria</option>
                                  <option value="AS">American Samoa</option>
                                  <option value="AD">Andorra</option>
                                  <option value="AO">Angola</option>
                                </select>
                              </div>
                            </li>
                            <li>
                              <div class="input-box">
                                <label for="shipping:telephone">Telephone <span class="required">*</span></label>
                                <br />
                                <input type="text" name="shipping[telephone]" title="Telephone" class="input-text" id="shipping:telephone" />
                              </div>
                              <div class="input-box">
                                <label for="shipping:fax">Fax</label>
                                <br />
                                <input type="text" name="shipping[fax]" title="Fax" class="input-text" id="shipping:fax" onChange="shipping.setSameAsBilling(false);" />
                              </div>
                            </li>
                            <li class="no-display">
                              <input type="hidden" name="shipping[save_in_address_book]" value="1" />
                            </li>
                            <li>
                              <input type="checkbox" name="shipping[same_as_billing]" id="shipping:same_as_billing" value="1" class="checkbox" />
                              <label for="shipping:same_as_billing">Use Billing Address</label>
                            </li>
                          </ul>
                        </fieldset>
                      </li>
                    </ul>
                    <p class="required">* Required Fields</p>
                    <div class="buttons-set1" id="shipping-buttons-container">
                      <button type="button" class="button" ><span>Continue</span></button>
                      <a href="#" class="back-link">« Back</a> </div>
                  </fieldset>
                </form>
              </div>
            </li>
            <li id="opc-shipping_method" class="section">
              <div class="step-title"> <span class="number">4</span>
                <h3 class="one_page_heading">Shipping Method</h3>
                <!--<a href="#">Edit</a>--> 
              </div>
              <div id="checkout-step-shipping_method" class="step a-item" style="display: none;">
                <form id="co-shipping-method-form" >
                  <fieldset>
                    <div id="checkout-shipping-method-load">
                      <p>Sorry, no quotes are available for this order at this time.</p>
                    </div>
                    <div id="onepage-checkout-shipping-method-additional-load">
                      <div class="add-gift-message">
                        <h4>Do you have any gift items in your order?</h4>
                        <p>
                          <input type="checkbox" name="allow_gift_messages" id="allow_gift_messages" value="1" class="checkbox" />
                          <label for="allow_gift_messages">Check this checkbox if you want to add gift messages.</label>
                        </p>
                      </div>
                      <div style="display: none;" class="gift-message-form" id="allow-gift-message-container">
                        <div class="inner-box"> </div>
                      </div>
                    </div>
                    <div class="buttons-set1" id="shipping-method-buttons-container">
                      <button type="button" class="button" ><span>Continue</span></button>
                      <a href="#" class="back-link">« Back</a> </div>
                  </fieldset>
                </form>
              </div>
            </li>
            <li id="opc-payment" class="section">
              <div class="step-title"> <span class="number">5</span>
                <h3 class="one_page_heading">Payment Information</h3>
                <!--<a href="#">Edit</a>--> 
              </div>
              <div id="checkout-step-payment" class="step a-item" style="display: none;">
                <form  id="co-payment-form">
                  <dl id="checkout-payment-method-load">
                    <dt>
                      <input type="radio" id="p_method_checkmo" value="checkmo" name="payment[method]" title="Check / Money order" class="radio" />
                      <label for="p_method_checkmo">Check / Money order</label>
                    </dt>
                    <dd>
                      <fieldset class="form-list">
                      </fieldset>
                    </dd>
                    <dt>
                      <input type="radio" id="p_method_ccsave" value="ccsave" name="payment[method]" title="Credit Card (saved)" class="radio" />
                      <label for="p_method_ccsave">Credit Card (saved)</label>
                    </dt>
                    <dd>
                      <fieldset class="form-list">
                        <ul id="payment_form_ccsave" style="display: none;">
                          <li>
                            <div class="input-box">
                              <label for="ccsave_cc_owner">Name on Card <span class="required">*</span></label>
                              <br />
                              <input type="text" title="Name on Card" class="input-text" id="ccsave_cc_owner" name="payment[cc_owner]" />
                            </div>
                          </li>
                          <li>
                            <div class="input-box">
                              <label for="ccsave_cc_type">Credit Card Type <span class="required">*</span></label>
                              <br />
                              <select disabled="" id="ccsave_cc_type" name="payment[cc_type]" class="required-entry validate-cc-type-select">
                                <option value="">--Please Select--</option>
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
                              <br />
                              <input type="text" disabled="" id="ccsave_cc_number" name="payment[cc_number]" title="Credit Card Number" class="input-text validate-cc-number validate-cc-type" />
                            </div>
                          </li>
                          <li>
                            <div class="input-box">
                              <label for="ccsave_expiration">Expiration Date <span class="required">*</span></label>
                              <br />
                              <div class="v-fix">
                                <select disabled="" id="ccsave_expiration" style="width: 140px;" name="payment[cc_exp_month]" class="required-entry">
                                  <option selected="selected">Month</option>
                                  <option value="1">01 - January</option>
                                  <option value="2">02 - February</option>
                                  <option value="3">03 - March</option>
                                  <option value="4">04 - April</option>
                                </select>
                              </div>
                              <div class="v-fix">
                                <select disabled="" id="ccsave_expiration_yr" style="width: 103px;" name="payment[cc_exp_year]" class="required-entry">
                                  <option selected="selected">Year</option>
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
                              <br />
                              <div class="v-fix">
                                <input type="text" disabled="" title="Card Verification Number" class="input-text" id="ccsave_cc_cid" name="payment[cc_cid]" style="width: 3em;" />
                              </div>
                              <a href="#" class="cvv-what-is-this">What is this?</a> </div>
                          </li>
                        </ul>
                      </fieldset>
                    </dd>
                  </dl>
                </form>
                <p class="required">* Required Fields</p>
                <div class="buttons-set1" id="payment-buttons-container">
                  <button type="button" class="button" ><span>Continue</span></button>
                  <a href="#" class="back-link">« Back</a> </div>
                <div style="clear: both;"></div>
              </div>
            </li>
            <li id="opc-review" class="section">
              <div class="step-title"> <span class="number">6</span>
                <h3 class="one_page_heading">Order Review</h3>
                <!--<a href="#">Edit</a>--> 
              </div>
              <div id="checkout-step-review" class="step a-item" style="display: none;">
                <div class="order-review" id="checkout-review-load"> </div>
                <div class="buttons-set13" id="review-buttons-container">
                  <p class="f-left">Forgot an Item? <a href="#/checkout/cart/">Edit Your Cart</a></p>
                  <button type="submit" class="button"><span>Place Order</span></button>
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
                  John Smith<br>
                  Xyz software co.<br>
                  123 Main Street<br>
                  Windsor<br>
                  Holtsville,  New York, 00501<br>
                  United States<br>
                  T: 1234567890 <br>
                  F: 123456
                  </address>
                </dd>
                <dt class="complete"> Shipping Address <span class="separator">|</span> <a href="#">Change</a> </dt>
                <dd class="complete">
                  <address>
                  Saraha Smith<br>
                  ThemesGround Tech Co<br>
                  123 Main Rd,<br>
                  St Town,  New York, 00501<br>
                  United States<br>
                  T: 1234567890 <br>
                  F: 123456
                  </address>
                </dd>
                <dt class="complete"> Shipping Method <span class="separator">|</span> <a href="#">Change</a> </dt>
                <dd class="complete"> Flat Rate - Fixed <br>
                  <span class="price">$49.00</span> </dd>
                <dt> Payment Method </dt>
              </dl>
            </div>
          </div>
        </aside>
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
            <div class="item"><a href="#"><img src="images/b-logo3.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo2.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo4.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo5.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo6.png" alt="Image"></a> </div>
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
  
  <!-- Footer  --> 
  
<?php
include("partials/footer.php");

?>
    <!-- Footer  -->
</div>
<div id="mobile-menu">
  <ul>
    <li>
      <div class="mm-search">
        <form id="search_mob" name="search">
          <div class="input-group">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
            </div>
            <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
          </div>
        </form>
      </div>
    </li>
    <li>
      <div class="home"><a href="#"><i class="icon-home"></i>Home</a> </div>
    </li>
    <li><a href="#">Pages</a>
      <ul>
        <li><a href="grid.php">Grid</a> </li>
        <li> <a href="list.php">List</a> </li>
        <li> <a href="product_detail.php">Product Detail</a> </li>
        <li> <a href="shopping_cart.php">Shopping Cart</a> </li>
        <li><a href="checkout.php">Checkout</a>
          <ul>
            <li><a href="checkout_method.php">Checkout Method</a> </li>
            <li><a href="checkout_billing_info.php">Checkout Billing Info</a> </li>
          </ul>
        </li>
        <li> <a href="wishlist.php">Wishlist</a> </li>
        <li> <a href="dashboard.php">Dashboard</a> </li>
        <li> <a href="multiple_addresses.php">Multiple Addresses</a> </li>
        <li> <a href="about_us.php">About us</a> </li>
        <li><a href="blog.php">Blog</a>
          <ul>
            <li><a href="blog-detail.php">Blog Detail</a> </li>
          </ul>
        </li>
        <li><a href="contact_us.php">Contact us</a> </li>
        <li><a href="404error.php">404 Error Page</a> </li>
      </ul>
    </li>
    <li><a href="#">Women</a>
      <ul>
        <li> <a href="#" class="">Stylish Bag</a>
          <ul>
            <li> <a href="#" class="">Clutch Handbags</a> </li>
            <li> <a href="#l" class="">Diaper Bags</a> </li>
            <li> <a href="#" class="">Bags</a> </li>
            <li> <a href="#" class="">Hobo handbags</a> </li>
          </ul>
        </li>
        <li> <a href="#">Material Bag</a>
          <ul>
            <li> <a href="#">Beaded Handbags</a> </li>
            <li> <a href="#">Fabric Handbags</a> </li>
            <li> <a href="#">Handbags</a> </li>
            <li> <a href="#">Leather Handbags</a> </li>
          </ul>
        </li>
        <li> <a href="#">Shoes</a>
          <ul>
            <li> <a href="#">Flat Shoes</a> </li>
            <li> <a href="#">Flat Sandals</a> </li>
            <li> <a href="#">Boots</a> </li>
            <li> <a href="#">Heels</a> </li>
          </ul>
        </li>
        <li> <a href="#">Jwellery</a>
          <ul>
            <li> <a href="#">Bracelets</a> </li>
            <li> <a href="#">Necklaces &amp; Pendent</a> </li>
            <li> <a href="#l">Pendants</a> </li>
            <li> <a href="#">Pins &amp; Brooches</a> </li>
          </ul>
        </li>
        <li> <a href="#">Dresses</a>
          <ul>
            <li> <a href="#">Casual Dresses</a> </li>
            <li> <a href="#">Evening</a> </li>
            <li> <a href="#">Designer</a> </li>
            <li> <a href="#">Party</a> </li>
          </ul>
        </li>
        <li> <a href="#">Swimwear</a>
          <ul>
            <li> <a href="#">Swimsuits</a> </li>
            <li> <a href="#">Beach Clothing</a> </li>
            <li> <a href="#">Clothing</a> </li>
            <li> <a href="#">Bikinis</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Men</a>
      <ul>
        <li> <a href="#" class="">Shoes</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Sport Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Casual Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Leather Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">canvas shoes</a> </li>
          </ul>
        </li>
        <li> <a href="#">Dresses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Casual Dresses</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Evening</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Designer</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Party</a> </li>
          </ul>
        </li>
        <li> <a href="#">Jackets</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Coats</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Formal Jackets</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Leather Jackets</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Blazers</a> </li>
          </ul>
        </li>
        <li> <a href="#">Watches</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Fasttrack</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Casio</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Titan</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Tommy-Hilfiger</a> </li>
          </ul>
        </li>
        <li> <a href="#">Sunglasses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Ray Ban</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Fasttrack</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Police</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Oakley</a> </li>
          </ul>
        </li>
        <li> <a href="#">Accesories</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Backpacks</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Wallets</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Laptops Bags</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Belts</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Electronics</a>
      <ul>
        <li> <a href="#"><span>Mobiles</span></a>
          <ul>
            <li> <a href="#"><span>Samsung</span></a> </li>
            <li> <a href="#"><span>Nokia</span></a> </li>
            <li> <a href="#"><span>IPhone</span></a> </li>
            <li> <a href="#"><span>Sony</span></a> </li>
          </ul>
        </li>
        <li> <a href="#" class=""><span>Accesories</span></a>
          <ul>
            <li> <a href="#"><span>Mobile Memory Cards</span></a> </li>
            <li> <a href="#"><span>Cases &amp; Covers</span></a> </li>
            <li> <a href="#"><span>Mobile Headphones</span></a> </li>
            <li> <a href="#"><span>Bluetooth Headsets</span></a> </li>
          </ul>
        </li>
        <li> <a href="#"><span>Cameras</span></a>
          <ul>
            <li> <a href="#"><span>Camcorders</span></a> </li>
            <li> <a href="#"><span>Point &amp; Shoot</span></a> </li>
            <li> <a href="#"><span>Digital SLR</span></a> </li>
            <li> <a href="#"><span>Camera Accesories</span></a> </li>
          </ul>
        </li>
        <li> <a href="#"><span>Audio &amp; Video</span></a>
          <ul>
            <li> <a href="#"><span>MP3 Players</span></a> </li>
            <li> <a href="#"><span>IPods</span></a> </li>
            <li> <a href="#"><span>Speakers</span></a> </li>
            <li> <a href="#"><span>Video Players</span></a> </li>
          </ul>
        </li>
        <li> <a href="#"><span>Computer</span></a>
          <ul>
            <li> <a href="#"><span>External Hard Disk</span></a> </li>
            <li> <a href="#"><span>Pendrives</span></a> </li>
            <li> <a href="#"><span>Headphones</span></a> </li>
            <li> <a href="#"><span>PC Components</span></a> </li>
          </ul>
        </li>
        <li> <a href="#"><span>Appliances</span></a>
          <ul>
            <li> <a href="#"><span>Vaccum Cleaners</span></a> </li>
            <li> <a href="#"><span>Indoor Lighting</span></a> </li>
            <li> <a href="#"><span>Kitchen Tools</span></a> </li>
            <li> <a href="#"><span>Water Purifier</span></a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Furniture</a> </li>
    <li><a href="#">Kids</a> </li>
    <li><a href="contact-us.php">Contact Us</a> </li>
  </ul>
  <div class="dropdown block-language-wrapper">
                <ul>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/english.png" alt="language"> English </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/francais.png" alt="language"> French </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/german.png" alt="language"> German </a></li>
                </ul>
              </div>
              <div class="dropdown block-currency-wrapper"> 
                <ul>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li>
                </ul>
              </div>
</div>
<!-- JavaScript --> 
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