<?php
require_once("includes/config.php");
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
<link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://demo.thmthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<title>PRISM - Buy Movies Online</title>
 
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css" media="all">


<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/revslider.css" >
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/newstyle.css" media="all">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body class="inner-page">
<div id="page">

 <?php
include("includes/header.php");

?>
  <!-- Navbar -->
<?php
include("includes/navbar.php");

?> 

  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">FREE Movies</a></li>
            <!-- <li><a href="#">Holiday</a></li>
            <li><a href="#">Jeans</a></li>
            <li><a href="#">Retis lapen casen</a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End -->
  <!-- Main Container -->
  <section class="main-container col2-left-layout bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-main col-sm-9 col-sm-push-3">
          <div class="category-description std">
            <div class="slider-items-products">
              <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col1 owl-carousel owl-theme">

                  <!-- Item -->
                  <div class="item"> <a href="#"><img alt="" src="assets/newImages/Movies/Slide/LevelUpBanner.png"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      <!-- <div class="small-tag"><span>Hot Sale</span> 49% OFF</div> -->
                      <h2 class="cat-heading">FREE Movie Collection</h2>
                      <p>Here are all our free movies, be sure to take everything you like! </p>
                    </div>
                  </div>
                  <!-- End Item -->

                  <!-- Item -->
                  <div class="item"> <a href="#"><img alt="" src="assets/newImages/Movies/Slide/TheJungleBookBanner.png"></a>

                    <!-- End Item -->

                  </div>
                </div>
              </div>
            </div>
          </div>
          <article class="col-main">
            <div class="page-title">
              <h1>Free Movies</h1>
            </div>
            <div class="toolbar">
              <div class="sorter">
                <div class="view-mode"> <span title="Grid" class="button button-active button-grid">&nbsp;</span><a href="list.php" title="List" class="button-list">&nbsp;</a> </div>
              </div>
              <div id="sort-by">
              <form>
                <label class="left">Sort By: </label>
                <select id="sorting" onchange="selectionChange()">
                    <option  value="Sort By" selected>Sort Products</option>
                    <option value="Sort By Price" id="price" >Sort By Price</option>
                    <option value="Sort By A-Z" id="az" >Sort By A-Z</option>
                    <option value="Sort By Z-A" id="az" >Sort By Z-A</option>
                  </select>
                  <a class="button-asc left" href="" title="Set Descending Direction"><span class="top_arrow"></span></a> </div>
                </form>
               
  
            </div>
            <div class="category-products">
            <?php
            $sql = "Select * from products  where category = 'Free' order by product_name ASC";
            $results = $connect->query($sql);
            


            while($final = $results->fetch_assoc()){ ?>

             <form action="partials/addToCart.php" method="post">

              <ul class="products-grid">
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner"> 
                    <div class="item-img"> 
                      <div class="item-img-info"><img src="<?php echo $final['photo']?>" alt="Iron Man 2" title="Iron Man 2">
                        <div class="actions">
                          <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                          <div class="link-compare"><a href="<?php echo $final['trailer']?>" data-toggle="tooltip" data-placement="right" title="" data-original-title="Watch Trailer"><span>Watch Trailer</span></a></div>
                          <div class="add_cart">
                            <button class="button btn-cart" onclick =" "   type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                          </div>
                        </div>
      
                      </div>
                    </div>

                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"><?php echo $final['product_name']?> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">FREE</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                </ul>
                </form>
                <?php } ?>
                <!-- <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="Grown Ups" class="product-image"><img src="newImages/Free/GrownUps.png" alt="Grown Ups" title="Grown Ups"></a>
                        <div class="actions">
                          <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                          <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Watch Trailer"><span>Watch Trailer</span></a></div>
                          <div class="add_cart">
                            <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                          </div>
                        </div>
            
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"><a href="#" title="Avengers Infinity War">Grown Ups</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">FREE</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="Avatar" class="product-image"><img src="newImages/Free/Avatar.png" alt="Avatar" title="Avatar"></a>
                        <div class="actions">
                          <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                          <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Watch Trailer"><span>Watch Trailer</span></a></div>
                          <div class="add_cart">
                            <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                          </div>
                        </div>
                 
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"><a href="#" title="Avatar">Avatar</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">FREE</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="Tangled" class="product-image"><img src="newImages/Free/tangled.png" alt="Tangled" title="Tangled"></a>
                        <div class="actions">
                          <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                          <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Watch Trailer"><span>Watch Trailer</span></a></div>
                          <div class="add_cart">
                            <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"><a href="unnamed.png" title="Tangled">Tangled</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">FREE</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="The Blind Side" class="product-image"><img src="newImages/Free/TheBlindSide.png" alt="The Blind Side" title="The Blind Side"></a>
                        <div class="actions">
                          <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                          <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Watch Trailer"><span>Watch Trailer</span></a></div>
                          <div class="add_cart">
                            <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"><a href="#" title="The Blind Side">The Blind Side</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">FREE</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="Gahoole The Legend of the Guardians" class="product-image"><img src="newImages/Free/gahooleLegendOfTheGuardians.png" alt="Gahoole The Legend of the Guardians" title="Gahoole The Legend of the Guardians"></a>
                        <div class="actions">
                          <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                          <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Watch Trailer"><span>Watch Trailer</span></a></div>
                          <div class="add_cart">
                            <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"><a href="#" title="Wonder Woman">Gahoole Legend of the Guardians</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">Free</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="Tooth Fairy" class="product-image"><img src="newImages/Free/Tooth%20Fairy.png" alt="Tooth Fairy" title="Tooth Fairy"></a>
                        <div class="actions">
                          <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                          <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Watch Trailer"><span>Watch Trailer</span></a></div>
                          <div class="add_cart">
                            <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"><a href="#" title="Tooth Fairy">Tooth Fairy</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">FREE</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="Alpha and Omega" class="product-image"><img src="newImages/Free/AlphaandOmega.png" alt="Alpha and Omega" title="Alpha and Omega"></a>
                        <div class="actions">
                          <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                          <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Watch Trailer"><span>Watch Trailer</span></a></div>
                          <div class="add_cart">
                            <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"><a href="#" title="Alpha and Omega">Alpha and Omega</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">FREE</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="Marmaduke" class="product-image"><img src="newImages/Free/Marmaduke.png" alt="Marmaduke" title="Marmaduke"></a>
                        <div class="new-label new-top-left">New</div>
                        <div class="actions">
                          <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                          <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Watch Trailer"><span>Watch Trailer</span></a></div>
                          <div class="add_cart">
                            <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"><a href="#" title="Marmaduke">Marmaduke</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">FREE</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="Despicable Me" class="product-image"><img src="newImages/Free/DespicableMe.png" alt="Despicable Me" title="Despicable Me"></a>
                        <div class="new-label new-top-left">New</div>
                        <div class="actions">
                          <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                          <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Watch Trailer"><span>Watch Trailer</span></a></div>
                          <div class="add_cart">
                            <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"><a href="#" title="Despicable Me">Despicable Me</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">FREE</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="Yogi Bear 2" class="product-image"><img src="newImages/Free/YogiBear2.png" alt="Yogi Bear 2" title="Yogi Bear 2"></a>
                         <div class="actions">
                          <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                          <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Watch Trailer"><span>Watch Trailer</span></a></div>
                          <div class="add_cart">
                            <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"><a href="#" title="Yogi Bear 2">Yogi Bear 2</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">FREE</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="Cats vs Dogs" class="product-image"><img src="newImages/Free/CatsVsDogs.png" alt="Cats vs Dogs" title="Deadpool 2"></a>
                        <div class="actions">
                          <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                          <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Watch Trailer"><span>Watch Trailer</span></a></div>
                          <div class="add_cart">
                            <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"><a href="#" title="Cats vs Dogs">Cats vs Dogs</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">FREE</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li> -->
              </ul>
            </div>
          </article>
          <!--	///*///======    End article  ========= //*/// 
        </div>
        <div class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
          <aside class="col-left sidebar">
            <div class="side-nav-categories">
            </div>
            <div class="block block-layered-nav">
              <div class="block-title">Shop By</div>
              <div class="block-content">
                <p class="block-subtitle">Shopping Options</p>
                <dl id="narrow-by-list">
                  <dt class="odd">Price</dt>
                  <dd class="odd">
                    <ol>
                      <li> <a href="#"><span class="price">$0.00</span> - <span class="price">$24.99</span></a> (6) </li>
                      <li> <a href="#"><span class="price">$30.00</span> and above</a> (6) </li>
                    </ol>
                  </dd>
                 <!-- <dt class="even">Manufacturer</dt>
                  <dd class="even">
                    <ol>
                      <li> <a href="#">Superb</a> (9) </li>
                      <li> <a href="#">Nexus</a> (4) </li>
                      <li> <a href="#">Xperia</a> (1) </li>
                    </ol>
                  </dd>
                  <dt class="odd">Color</dt>
                  <dd class="odd">
                    <ol>
                      <li> <a href="#">Green</a> (1) </li>
                      <li> <a href="#">White</a> (5) </li>
                      <li> <a href="#">Black</a> (5) </li>
                      <li> <a href="#">Gray</a> (4) </li>
                      <li> <a href="#">Dark Gray</a> (3) </li>
                      <li> <a href="#">Blue</a> (1) </li>
                    </ol>
                  </dd>

                  <dt class="last even">Rating</dt>
                  <dd class="last even">
                    <ol>
                      <li> <a href="#">PG</a> (6) </li>
                      <li> <a href="#">PG-13</a> (6) </li>
                      <li> <a href="#">R</a> (4) </li>
                      
                    </ol>
                  </dd>
                </dl>
              </div>
            </div>
           <div class="block block-cart">
              <div class="block-title ">My Cart</div>
              <div class="block-content">
                <div class="summary">
                  <p class="amount">There are <a href="#">2 items</a> in your cart.</p>
                  <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price">$20.98</span> </p>
                </div>
                <div class="ajax-checkout">
                  <button class="button button-checkout" href="checkout.php" title="Submit" type="submit" ><span>Checkout</span></button>
                </div>
                <p class="block-subtitle">Recently added item(s) </p>
                <ul>
                  <li class="item"> <a href="#" title="Retis lapen casen" class="product-image"><img src="newImages/CartMovieImages/IncrediblesMini.jpeg" alt="Incredibles 2"></a>
                    <div class="product-details">
                      <div class="access"> <a href="#" title="Remove This Item" class="btn-remove1"> <span class="icon"></span> Remove </a> </div>
                      <strong>1</strong> x <span class="price">$9.99</span>
                      <p class="product-name"> <a href="#">The Incredibles 2</a> </p>
                    </div>
                  </li>
                  <li class="item last"> <a href="#" title="Retis lapen casen" class="product-image"><img src="newImages/CartMovieImages/FarFromHomeMini.jpeg" alt="Spiderman Far From Home"></a>
                    <div class="product-details">
                      <div class="access"> <a href="#" title="Remove This Item" class="btn-remove1"> <span class="icon"></span> Remove </a> </div>
                      <strong>1</strong> x <span class="price">$10.99</span>
                      <p class="product-name"> <a href="#">Spiderman Far From Home</a> </p>
                      
                      <!--access clearfix 
                    </div>
                  </li>
                </ul>
              </div>
            </div>
              
                   
            <!--<div class="block block-compare">
              <div class="block-title ">Compare Products (2)</div>
              <div class="block-content">
                <ol id="compare-items">
                  <li class="item odd">
                    <input type="hidden" value="2173" class="compare-item-id">
                    <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#" class="product-name"> Office Colored Ladies Shirt</a> </li>
                  <li class="item last even">
                    <input type="hidden" value="2174" class="compare-item-id">
                    <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#" class="product-name"> Office Colored Ladies Shirt</a> </li>
                </ol>
                <div class="ajax-checkout">
                  <button type="submit" title="Submit" class="button button-compare"><span>Compare</span></button>
                  <button type="submit" title="Submit" class="button button-clear"><span>Clear</span></button>
                </div>
              </div>
            </div>
            <div class="block block-list block-viewed">
              <div class="block-title"> Recently Viewed </div>
              <div class="block-content">
                <ol id="recently-viewed-items">
                  <li class="item odd">
                    <p class="product-name"><a href="#"> -</a></p>
                  </li>
                  <li class="item even">
                    <p class="product-name"><a href="#"> -</a></p>
                  </li>
                  <li class="item last odd">
                    <p class="product-name"><a href="#"> -</a></p>
                  </li>
                </ol>
              </div>
            </div>
           <!-- <div class="block block-poll">
              <div class="block-title">Community Poll </div>
              <form id="pollForm" action="#" method="post" onSubmit="return validatePollAnswerIsSelected();">
                <div class="block-content">
                  <p class="block-subtitle">What is your favorite Magento feature?</p>
                  <ul id="poll-answers">
                    <li class="odd">
                      <input type="radio" name="vote" class="radio poll_vote" id="vote_5" value="5">
                      <span class="label">
                      <label for="vote_5">Layered Navigation</label>
                      </span> </li>
                    <li class="even">
                      <input type="radio" name="vote" class="radio poll_vote" id="vote_6" value="6">
                      <span class="label">
                      <label for="vote_6">Price Rules</label>
                      </span> </li>
                    <li class="odd">
                      <input type="radio" name="vote" class="radio poll_vote" id="vote_7" value="7">
                      <span class="label">
                      <label for="vote_7">Category Management</label>
                      </span> </li>
                    <li class="last even">
                      <input type="radio" name="vote" class="radio poll_vote" id="vote_8" value="8">
                      <span class="label">
                      <label for="vote_8">Compare Products</label>
                      </span> </li>
                  </ul>
                  <div class="actions">
                    <button type="submit" title="Vote" class="button button-vote"><span>Vote</span></button>
                  </div>
                </div>
              </form>
            </div>
            <div class="block block-tags">
              <div class="block-title"> Popular Tags</div>
              <div class="block-content">
                <ul class="tags-list">
                  <li><a href="#" style="font-size:98.3333333333%;">Camera</a></li>
                  <li><a href="#" style="font-size:86.6666666667%;">Hohoho</a></li>
                  <li><a href="#" style="font-size:145%;">SEXY</a></li>
                  <li><a href="#" style="font-size:75%;">Tag</a></li>
                  <li><a href="#" style="font-size:110%;">Test</a></li>
                  <li><a href="#" style="font-size:86.6666666667%;">bones</a></li>
                  <li><a href="#" style="font-size:110%;">cool</a></li>
                  <li><a href="#" style="font-size:86.6666666667%;">cool t-shirt</a></li>
                  <li><a href="#" style="font-size:86.6666666667%;">crap</a></li>
                  <li><a href="#" style="font-size:86.6666666667%;">good</a></li>
                  <li><a href="#" style="font-size:86.6666666667%;">green</a></li>
                  <li><a href="#" style="font-size:86.6666666667%;">hip</a></li>
                  <li><a href="#" style="font-size:75%;">laptop</a></li>
                  <li><a href="#" style="font-size:75%;">mobile</a></li>
                  <li><a href="#" style="font-size:75%;">nice</a></li>
                  <li><a href="#" style="font-size:86.6666666667%;">phone</a></li>
                  <li><a href="#" style="font-size:98.3333333333%;">red</a></li>
                  <li><a href="#" style="font-size:86.6666666667%;">tight</a></li>
                  <li><a href="#" style="font-size:75%;">trendy</a></li>
                  <li><a href="#" style="font-size:86.6666666667%;">young</a></li>
                </ul>
                <div class="actions"> <a href="#" class="view-all">View All Tags</a> </div>
              </div>
            </div> 

          </aside>
        </div>
      </div>-->
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

   <!-- Footer  --> 
  
<?php
include("includes/footer.php");

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
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="assets/images/english.png" alt="language"> English </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="assets/images/francais.png" alt="language"> French </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="assets/images/german.png" alt="language"> German </a></li>
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
<!-- End Footer -->

<!-- JavaScript -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/parallax.js"></script>
<script type="text/javascript" src="assets/js/revslider.js"></script>
<script type="text/javascript" src="assets/js/common.js"></script>
<script type="text/javascript" src="assets/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.mobile-menu.min.js"></script>
<script type='text/javascript'>
        jQuery(document).ready(function(){
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 0,
                startheight: 800,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,

                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>
