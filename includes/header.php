<?php 
if(isset($_SESSION['userLoggedIn'])){
        $userLoggedIn = $_SESSION['userLoggedIn'];
}
?>

<header>
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row"> 
            <!-- Header Language -->
            <div class="col-xs-7 col-sm-6">
              <div class="dropdown block-language-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="assets/images/english.png" alt="language"> English <span class="caret"></span> </a>
                <ul class="dropdown-menu" role="menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="assets/images/english.png" alt="language"> English </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="assets/images/francais.png" alt="language"> French </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="assets/images/german.png" alt="language"> German </a></li>
                </ul>
              </div>
              <!-- End Header Language --> 
              
              <!-- Header Currency -->
              <div class="dropdown block-currency-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> USD <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li>
                </ul>
              </div>
              <!-- End Header Currency -->
              
              <div class="welcome-msg hidden-xs"> Welcome to our site! </div>
            </div>
            <div class="col-xs-5 col-sm-6"> 
              


<div class="top-search">
            <div class="block-icon pull-right"> <a data-target=".bs-example-modal-lg" data-toggle="modal" class="search-focus dropdown-toggle links"> <i class="fa fa-search"></i> </a>
              <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button aria-label="Close" data-dismiss="modal" class="close" type="button"><img src="assets/images/close_icon.png" alt="close"> </button>
                    </div>
                    <div class="modal-body">
                      <form class="navbar-form">
                        <div id="search">
                          <div class="input-group">
                            <input name="search" placeholder="Search" class="form-control" type="text">
                            <button type="submit" class="btn-search"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



    


          
          
              <!-- Header Top Links -->
              <div class="toplinks">
                <div class="links">
                
                
                  <div class="check"><a title="Checkout" href="checkout.php"><span class="hidden-xs">Checkout</span></a></div>
                  <div class="login"><a href="shopping_cart.php"><span class="hidden-xs">My Cart</span></a></div>
                  <!-- Header Company -->
                  <?php 
                 if(isset($_GET["search"])){
                      $sr=$_GET['search'];
                     header("location: searchclutch.php?searchreq=".$sr);
                 }
                    
                    
                 if(isset($_SESSION['userLoggedIn'])){ // I use false condition
                     echo '<div class="login"><a href="account_information.php"><span class="hidden-xs">';
                     echo "My Account";
                     echo'</span></a></div>';
                     echo'<div class="login"><a href="logout.php"><span class="hidden-xs">Log out</span></a></div>
                     </div> ';
                 }
                 else{
                     echo '<div class="login"><a href="login.php"><span class="hidden-xs">Log In</span></a></div>
                     </div> ';
                 }
                    
                    
                 ?>
        
                </div> 
                
              </div>
              <!-- End Header Top Links --> 
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
