<?php require_once("resources/config.php"); ?>
<!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Keyword</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="Type">Type</label>
              <select class="form-control form-select form-control-a" id="Type">
                <option>All Type</option>
                <option>For Rent</option>
                <option>For Sale</option>
                <option>Open House</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="city">City</label>
              <select class="form-control form-select form-control-a" id="city">
                <option>All City</option>
                <option>Alabama</option>
                <option>Arizona</option>
                <option>California</option>
                <option>Colorado</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="bedrooms">Bedrooms</label>
              <select class="form-control form-select form-control-a" id="bedrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="garages">Garages</label>
              <select class="form-control form-select form-control-a" id="garages">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="bathrooms">Bathrooms</label>
              <select class="form-control form-select form-control-a" id="bathrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="price">Min Price</label>
              <select class="form-control form-select form-control-a" id="price">
                <option>Unlimite</option>
                <option>$50,000</option>
                <option>$100,000</option>
                <option>$150,000</option>
                <option>$200,000</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->>

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php">Buy|<span class="color-b">SPACE</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link " href="index.php">Home</a>
          </li>

<!--
          <li class="nav-item">
            <a class="nav-link " href="about.html">About</a>
          </li>
-->

          <li class="nav-item">
            <a class="nav-link " href="browse.php">Browse</a>
          </li>

<!--
          <li class="nav-item">
            <a class="nav-link " href="agents-grid.html">Agents</a>
          </li>
-->

<!--
          <li class="nav-item">
            <a class="nav-link " href="contact.html">Contact</a>
          </li>
-->

           <?php






                    if(isset($_SESSION['loggedin'])){ // I use false condition
                        if($_SESSION['access']=='admin'){
                            echo '<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Management</a>
            <div class="dropdown-menu"><a class="nav-link " href="dashboard.php">Dashboard</a></div>
          </li>';
                        }

            echo '<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
            echo $_SESSION['name'];
            echo'</a>
            <div class="dropdown-menu"><a class="nav-link " href="account.php">Account</a><a class="nav-link " href="logout.php">Logout</a></div>
          </li>';
                    }else{

            echo '<li class="nav-item">
            <a class="nav-link " href="login.php".php">Login</a>
          </li>';
                    }



?>



<!--
          <li class="nav-item">
            <a class="nav-link " href="login.html">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="menu_adm.html">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="account.html">Account</a>
          </li>
-->
        </ul>
      </div>

    <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link " href="browse.php"><span class="bi bi-search"></span></a>
          </li>
        <?php

         if(isset($_SESSION['loggedin']) and $_SESSION['loggedin'] == 'true' and ($_SESSION['access']=='admin' or $_SESSION['access']=='agent' )){ // I use false condition


         }
        else{
        echo '<li class="nav-item">
            <a class="nav-link " href="cart.php"><span class="bi bi-cart"></span></a>
          </li>';
        }
             ?>

        </ul>
<!--

      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>
-->

    </div>
  </nav><!-- End Header/Navbar -->
