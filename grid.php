﻿<!DOCTYPE html>
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
<style>
  option{
    color:black;
  }
  select {
	width: 100px;
	margin: 10px;
  height: 33px;
}
#sorting{
  color:black;
}

</style>

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="css/simple-line-icons.css" media="all">


<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="css/simple-line-icons.css" media="all">
<link rel="stylesheet" type="text/css" href="css/revslider.css" >
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="css/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="css/style.css" media="all">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body class="inner-page">
<div id="page"> 
  
<?php
include("partials/header.php");

?>
  <!-- Navbar -->
<?php
include("partials/navbar.php");

?> 
  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Movies</a></li>
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
                  <div class="item"> <a href="#"><img alt="" src="newImages/Movies/Slide/classic.jpg"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      <!-- <div class="small-tag"><span>Hot Sale</span> 49% OFF</div> -->
                      <h2 class="cat-heading">Movie Collection</h2>
                      <p>Here you can find the bests movies on the market. </p>
                    </div>
                  </div>
                  <!-- End Item --> 
                  
                  <!-- Item -->
                  <div class="item"> <a href="#"><img alt="" src="newImages/Movies/Slide/collage.png"></a> 
                    
                    <!-- End Item --> 
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <article class="col-main">
            <div class="page-title">
              <h1>Movies</h1>
            </div>
            <div class="toolbar">
              <div class="sorter">
                <div class="view-mode"> <span title="Grid" class="button button-active button-grid">&nbsp;</span><a href="list.php" title="List" class="button-list">&nbsp;</a> </div>
              </div>
              <div id="sort-by" style="";>
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
            $sql = "Select * from products NATURAL JOIN categories where category_type = 'Movie'";
            $results = $connect->query($sql);
            

            while($final = $results->fetch_assoc()){ ?>

              








              <ul class="products-grid">
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info">
                      <img class = "product-img" src="<?php echo $final['photo']?>" alt="Avengers Endgame" title="Avengers Endgame" class="product-image">
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
                        <div class="item-title"><?php echo $final['product_name']?> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price"> $ <?php echo $final['price']?></span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                
                <?php } ?>
                <!-- <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="Avengers Infinity War" class="product-image"><img src="newImages/Movies/movies/Infinity.jpg" alt="Avengers Infinity War" title="Avengers Infinity War"></a>
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
                        <div class="item-title"><a href="#" title="Avengers Infinity War">Avengers Infinity War</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">$19.99</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="Avengers Age of Ultron" class="product-image"><img src="newImages/Movies/movies/ultron.jpg" alt="Avengers Age of Ultron" title="Avengers Age of Ultron"></a>
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
                        <div class="item-title"><a href="#" title="Avengers Age of Ultron">Avengers Age of Ultron</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">$19.99</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="Star Wars The Rise of the Skywalker" class="product-image"><img src="newImages/Movies/movies/starwars.jpg" alt="Star Wars The Rise of the Skywalker" title="Star Wars The Rise of the Skywalker"></a>
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
                        <div class="item-title"><a href="unnamed.png" title="Star Wars The Rise of the Skywalker">The Rise of the Skywalker</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">$19.99</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="Jumanji" class="product-image"><img src="newImages/Movies/movies/Jumanji.jpg" alt="Jumanji" title="Jumanji"></a>
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
                        <div class="item-title"><a href="#" title="Jumanji">Jumanji</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">$14.99</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="Wonder Woman" class="product-image"><img src="newImages/Movies/movies/wonder.jpg" alt="Wonder Woman" title="Wonder Woman"></a>
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
                        <div class="item-title"><a href="#" title="Wonder Woman">Wonder Woman</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">$19.99</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="Justice League" class="product-image"><img src="newImages/Movies/movies/justic.jpg" alt="Justice League" title="Justice League"></a>
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
                        <div class="item-title"><a href="#" title="Justice League">Justice League</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">$14.99</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="Joker" class="product-image"><img src="newImages/Movies/movies/joker.jpg" alt="Joker" title="Joker"></a>
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
                        <div class="item-title"><a href="#" title="Joker">Joker</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">$14.99</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="Sonic The Hedgehog" class="product-image"><img src="newImages/Movies/movies/sonic.jpeg" alt="Sonic The Hedgehog" title="Sonic The Hedgehog"></a>
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
                        <div class="item-title"><a href="#" title="Sonic The Hedgehog">Sonic The Hedgehog</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">$7.99</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="Beauty and The Beast" class="product-image"><img src="newImages/Movies/movies/beauty.jpg" alt="Beauty and The Beast" title="Beauty and The Beast"></a>
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
                        <div class="item-title"><a href="#" title="Beauty and The Beast">Beauty and The Beast</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">$19.99</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="The Conjuring 2" class="product-image"><img src="newImages/Movies/movies/TheConjuring.jpg" alt="The Conjuring 2" title="The Conjuring 2"></a>
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
                        <div class="item-title"><a href="#" title="The Conjuring 2">The Conjuring 2</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">$14.99</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="Deadpool 2" class="product-image"><img src="newImages/Movies/movies/deadpool.jpg" alt="Deadpool 2" title="Deadpool 2"></a>
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
                        <div class="item-title"><a href="#" title="Deadpool 2">Deadpool 2</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">$14.99</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul> -->

              
            </div>
          </article>
          <!--	///*///======    End article  ========= //*/// --> 
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
                      
                      <!--access clearfix--> 
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
            </div>-->
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
            </div> -->

          </aside>
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
  
       <!-- Footer  --> 
  
<?php
include("partials/footer.php");

?>
    <!-- Footer  -->
</div>
<!-- End Footer --> 

<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/revslider.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script> 
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