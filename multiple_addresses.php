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

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body class="inner-page">
<div id="inner-page"> 
  
<?php
include("partials/header.php");

?>
  <!-- Navbar -->
<?php
include("partials/navbar.php");

?> 
  
  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="state_bar">
          <ul id="checkout-progress-state" class="checkout-progress">
            <li class="active first" title="Select Addresses">Select Addresses</li>
            <li title="Shipping Information">Shipping Information</li>
            <li title="Billing Information">Billing Information</li>
            <li title="Place Order">Place Order</li>
            <li title="Order Success" class="last">Order Success</li>
          </ul>
        </div>
        <div class="multiple_addresses">
          <form method="post" action="#" id="checkout_multishipping_form">
            <div class="page-title_multi">
              <h1>Ship to Multiple Addresses</h1>
            </div>
            <!--page-title_multi-->
            <div class="title-buttons pull-right">
              <button class="button new-address" title="" ><span>Enter a New Address</span></button>
            </div>
            <!--title-buttons-->
            <div class="addresses"> Please select shipping address for applicable items
              <div class="table-responsive">
                <fieldset class="multiple-checkout">
                  <input type="hidden" id="can_continue_flag" value="0" name="">
                  <input type="hidden" id="add_new_address_flag" value="0" name="">
                  <table id="multiship-addresses-table" class="data-table">
                    <colgroup>
                    <col width="60%">
                    <col width="10%">
                    <col width="30%">
                    <col width="10%">
                    </colgroup>
                    <thead>
                      <tr class="first last">
                        <th>Product</th>
                        <th class="a-left">Qty</th>
                        <th>Send to</th>
                        <th>Remove</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr class="first last">
                        <td class="a-right last" colspan="100"><button class="button btn-update" type="submit"><span>Update Qty &amp; Addresses</span></button></td>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr class="first odd">
                        <td><h4 class="product-name"><a href="#">Ocean Premium Saline Nasal Spray - 1.5 fl oz</a></h4></td>
                        <td><input type="text" class="input-text qty" size="2" value="1" name="ship[0][43][qty]"></td>
                        <td><select title="" class="" id="ship_0_43_address" name="">
                            <option selected="selected" value="1">pranali d, aundh, tyyrt, Alabama 46532, United States</option>
                          </select></td>
                        <td class="a-center last"><a href="#" title="Remove item" class="btn-remove btn-remove2"><span>Remove item</span></a></td>
                      </tr>
                      <tr class="even">
                        <td><h4 class="product-name"><a href="#">Apple iPod classic 160 GB Silver (7th Generation) NEWEST MODEL</a></h4></td>
                        <td><input type="text" class="input-text qty" size="2" value="1" name=""></td>
                        <td><select title="" class="" id="ship_1_63_address" name="">
                            <option selected="selected" value="1">pranali d, aundh, tyyrt, Alabama 46532, United States</option>
                          </select></td>
                        <td class="a-center last"><a href="#" title="Remove item" class="btn-remove btn-remove2"><span>Remove item</span></a></td>
                      </tr>
                      <tr class="odd">
                        <td><h4 class="product-name"><a href="#">Apple iPod classic 160 GB Silver (7th Generation) NEWEST MODEL</a></h4></td>
                        <td><input type="text" class="input-text qty" size="2" value="1" name=""></td>
                        <td><select title="" class="" id="ship_2_63_address" name="">
                            <option selected="selected" value="1">pranali d, aundh, tyyrt, Alabama 46532, United States</option>
                          </select></td>
                        <td class="a-center last"><a href="#" title="" class="btn-remove btn-remove2"><span>Remove item</span></a></td>
                      </tr>
                      <tr class="even">
                        <td><h4 class="product-name"><a href="#">Nautilus T514 Treadmill</a></h4></td>
                        <td><input type="text" class="input-text qty" size="2" value="1" name=""></td>
                        <td><select title="" class="" id="ship_3_121_address" name="">
                            <option selected="selected" value="1">pranali d, aundh, tyyrt, Alabama 46532, United States</option>
                          </select></td>
                        <td class="a-center last"><a href="#" title="" class="btn-remove btn-remove2"><span>Remove item</span></a></td>
                      </tr>
                      <tr class="odd">
                        <td><h4 class="product-name"><a href="#">14k White and Rose Gold Pink Diamond Flower Pendant (.07 Ct)</a></h4></td>
                        <td><input type="text" class="input-text qty" size="2" value="1" name=""></td>
                        <td><select title="" class="" id="ship_4_762_address" name="">
                            <option selected="selected" value="1">pranali d, aundh, tyyrt, Alabama 46532, United States</option>
                          </select></td>
                        <td class="a-center last"><a href="#" title="" class="btn-remove btn-remove2"><span>Remove item</span></a></td>
                      </tr>
                      <tr class="even">
                        <td><h4 class="product-name"><a href="#">KR Tools 11414 Pro Series 14-Inch Heavy Duty Bolt Cutter</a></h4></td>
                        <td><input type="text" class="input-text qty" size="2" value="1" name=""></td>
                        <td><select title="" class="" id="ship_5_1283_address" name="">
                            <option selected="selected" value="1">pranali d, aundh, tyyrt, Alabama 46532, United States</option>
                          </select></td>
                        <td class="a-center last"><a href="#" title="" class="btn-remove btn-remove2"><span>Remove item</span></a></td>
                      </tr>
                      <tr class="odd">
                        <td><h4 class="product-name"><a href="#">Little Noses Saline Spray/Drops for Dry for Stuffy Noses, 1-Ounce (30 ml) (Pack of 6)</a></h4></td>
                        <td><input type="text" class="input-text qty" size="2" value="1" name=""></td>
                        <td><select title="" class="" id="ship_6_1926_address" name="">
                            <option selected="selected" value="1">pranali d, aundh, tyyrt, Alabama 46532, United States</option>
                          </select></td>
                        <td class="a-center last"><a href="#" title="" class="btn-remove btn-remove2"><span>Remove item</span></a></td>
                      </tr>
                      <tr class="even">
                        <td><h4 class="product-name"><a href="#">Dell 3.0 Ghz. Super Fast GX Computer with Dell 19 LCD Flat Panel Monitor, Big 500GB Hard Drive, 2GB RAM, DVD Burner (DVD-RW), and New Licensed Windows XP with Genuine Microsoft Authorized CD</a></h4></td>
                        <td><input type="text" class="input-text qty" size="2" value="1" name=""></td>
                        <td><select title="" class="" id="ship_7_4206_address" name="">
                            <option selected="selected" value="1">pranali d, aundh, tyyrt, Alabama 46532, United States</option>
                          </select></td>
                        <td class="a-center last"><a href="#" title="Title" class="btn-remove btn-remove2"><span>Remove item</span></a></td>
                      </tr>
                      <tr class="odd">
                        <td><h4 class="product-name"><a href="#">Dell 3.0 Ghz. Super Fast GX Computer with Dell 19 LCD Flat Panel Monitor, Big 500GB Hard Drive, 2GB RAM, DVD Burner (DVD-RW), and New Licensed Windows XP with Genuine Microsoft Authorized CD</a></h4></td>
                        <td><input type="text" class="input-text qty" size="2" value="1" name=""></td>
                        <td><select title="" class="" id="ship_8_4206_address" name="">
                            <option selected="selected" value="1">pranali d, aundh, tyyrt, Alabama 46532, United States</option>
                          </select></td>
                        <td class="a-center last"><a href="#" title="" class="btn-remove btn-remove2"><span>Remove item</span></a></td>
                      </tr>
                      <tr class="even">
                        <td><h4 class="product-name"><a href="#">Dell 3.0 Ghz. Super Fast GX Computer with Dell 19 LCD Flat Panel Monitor, Big 500GB Hard Drive, 2GB RAM, DVD Burner (DVD-RW), and New Licensed Windows XP with Genuine Microsoft Authorized CD</a></h4></td>
                        <td><input type="text" class="input-text qty" size="2" value="1" name=""></td>
                        <td><select title="" class="" id="ship_9_4206_address" name="">
                            <option selected="selected" value="1">pranali d, aundh, tyyrt, Alabama 46532, United States</option>
                          </select></td>
                        <td class="a-center last"><a href="#" title="" class="btn-remove btn-remove2"><span>Remove item</span></a></td>
                      </tr>
                      <tr class="odd">
                        <td><h4 class="product-name"><a href="#">Dell 3.0 Ghz. Super Fast GX Computer with Dell 19 LCD Flat Panel Monitor, Big 500GB Hard Drive, 2GB RAM, DVD Burner (DVD-RW), and New Licensed Windows XP with Genuine Microsoft Authorized CD</a></h4></td>
                        <td><input type="text" class="input-text qty" size="2" value="1" name=""></td>
                        <td><select title="" class="" id="ship_10_4206_address" name="">
                            <option selected="selected" value="1">pranali d, aundh, tyyrt, Alabama 46532, United States</option>
                          </select></td>
                        <td class="a-center last"><a href="#" title="" class="btn-remove btn-remove2"><span>Remove item</span></a></td>
                      </tr>
                      <tr class="even">
                        <td><h4 class="product-name"><a href="#">Dell 3.0 Ghz. Super Fast GX Computer with Dell 19 LCD Flat Panel Monitor, Big 500GB Hard Drive, 2GB RAM, DVD Burner (DVD-RW), and New Licensed Windows XP with Genuine Microsoft Authorized CD</a></h4></td>
                        <td><input type="text" class="input-text qty" size="2" value="1" name=""></td>
                        <td><select title="" class="" id="ship_11_4206_address" name="">
                            <option selected="selected" value="1">pranali d, aundh, tyyrt, Alabama 46532, United States</option>
                          </select></td>
                        <td class="a-center last"><a href="#" title="" class="btn-remove btn-remove2"><span>Remove item</span></a></td>
                      </tr>
                      <tr class="odd">
                        <td><h4 class="product-name"><a href="#">Fantasy Furniture Fancy Sofa, Black</a></h4></td>
                        <td><input type="text" class="input-text qty" size="2" value="1" name="ship[12][4207][qty]"></td>
                        <td><select title="" class="" id="ship_12_4207_address" name="ship[12][4207][address]">
                            <option selected="selected" value="1">pranali d, aundh, tyyrt, Alabama 46532, United States</option>
                          </select></td>
                        <td class="a-center last"><a href="#" title="" class="btn-remove btn-remove2"><span>Remove item</span></a></td>
                      </tr>
                      <tr class="even">
                        <td><h4 class="product-name"><a href="#">Fantasy Furniture Fancy Sofa, Black</a></h4></td>
                        <td><input type="text" class="input-text qty" size="2" value="1" name=""></td>
                        <td><select title="" class="" id="ship_13_4207_address" name="">
                            <option selected="selected" value="1">pranali d, aundh, tyyrt, Alabama 46532, United States</option>
                          </select></td>
                        <td class="a-center last"><a href="#" title="" class="btn-remove btn-remove2"><span>Remove item</span></a></td>
                      </tr>
                      <tr class="odd">
                        <td><h4 class="product-name"><a href="#">Dell Super Fast Optiplex Computer With LCD Flat Panel Monitor Included, Big 40 GB (Gigabyte) Hard Drive, 1 GB RAM, P4 Desktop PC, Single Core 2.8Ghz. Processor, XP</a></h4></td>
                        <td><input type="text" class="input-text qty" size="2" value="1" name=""></td>
                        <td><select title="" class="" id="ship_14_4208_address" name="">
                            <option selected="selected" value="1">pranali d, aundh, tyyrt, Alabama 46532, United States</option>
                          </select></td>
                        <td class="a-center last"><a href="#" title="" class="btn-remove btn-remove2"><span>Remove item</span></a></td>
                      </tr>
                      <tr class="last even">
                        <td><h4 class="product-name"><a href="#">Apple MacBook MC516LL/A 13.3-Inch Laptop</a></h4></td>
                        <td><input type="text" class="input-text qty" size="2" value="1" name=""></td>
                        <td><select title="" class="" id="ship_15_4212_address" name="">
                            <option selected="selected" value="1">pranali d, aundh, tyyrt, Alabama 46532, United States</option>
                          </select></td>
                        <td class="a-center last"><a href="#" title="" class="btn-remove btn-remove2"><span>Remove item</span></a></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="buttons-set"> <a href="#" class="back-link"><small>« </small>Back to Shopping Cart</a>
                    <button class="button btn-continue" title="Continue to Shipping Information" type="submit"><span>Continue to Shipping Information</span></button>
                  </div>
                </fieldset>
              </div>
              <!--multiple-checkout--> 
            </div>
          </form>
          <!--addresses--> 
          
        </div>
      </div>
    </div>
  </section>
  
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