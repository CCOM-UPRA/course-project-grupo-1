<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
} ?>
<!DOCTYPE html>
<html lang="en">
<head>

        <title>PharmaSys - Dashboard</title>

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
        <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

        <!-- PLUGINS CSS STYLE -->
        <link href="assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
        <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
        <link href="assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
        <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
        <link href="assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
        <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />


        <!-- Date Range Picker -->

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

        <!-- SLEEK CSS -->
        <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

        <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>
<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">

  <div class="mobile-sticky-body-overlay"></div>

  <div class="wrapper">


    <!--
====================================
——— LEFT SIDEBAR WITH FOOTER
=====================================
-->
<aside class="left-sidebar bg-sidebar">
<div id="sidebar" class="sidebar sidebar-with-footer">
  <!-- Aplication Brand -->
  <div class="app-brand">
    <a href="index.php">
      <svg
        class="brand-icon"
        xmlns="http://www.w3.org/2000/svg"
        preserveAspectRatio="xMidYMid"
        width="30"
        height="33"
        viewBox="0 0 30 33"
      >
        <g fill="none" fill-rule="evenodd">
        </g>
      </svg>
      <span class="brand-name">PharmaSys</span>
    </a>
  </div>
  <!-- begin sidebar scrollbar -->
  <div class="sidebar-scrollbar">

    <!-- sidebar menu -->
    <ul class="nav sidebar-inner" id="sidebar-menu">



        <li  class="has-sub active expand" >
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
            aria-expanded="false" aria-controls="dashboard">
            <i class="mdi mdi-view-dashboard-outline"></i>
            <span class="nav-text">Dashboard</span> <b class="caret"></b>
          </a>
          <ul  class="collapse show"  id="dashboard"
            data-parent="#sidebar-menu">
            <div class="sub-menu">
                  <li  class="active" >
                    <a class="sidenav-item-link" href="index.php">
                      <span class="nav-text">Overview</span>

                    </a>
                  </li>
            </div>
          </ul>
        </li>

        <li  class="has-sub" >
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#products"
            aria-expanded="false" aria-controls="products">
            <i class="mdi mdi-store"></i>
            <span class="nav-text">Products</span> <b class="caret"></b>
          </a>
          <ul  class="collapse"  id="products"
            data-parent="#sidebar-menu">
            <div class="sub-menu">

              <li  class="has-sub" >
                <a class="sidenav-item-link" href="" data-toggle="collapse" data-target="#icons"
                  aria-expanded="false" aria-controls="icons">
                  <span class="nav-text"><a href="manage-products.php">Manage Products</a></span>
                </a>
              </li>

              <li  class="has-sub" >
                  <a class="sidenav-item-link" href="" data-toggle="collapse" data-target="#components"
                    aria-expanded="false" aria-controls="components">
                    <span class="nav-text"><a href="add.php">Add Products</a></span>
                  </a>
                </li>

                <li  class="has-sub" >
                  <a class="sidenav-item-link" href="" data-toggle="collapse" data-target="#components"
                    aria-expanded="false" aria-controls="components">
                    <span class="nav-text"><a href="add-category.php">Product Categories</a></span>
                  </a>
                </li>

                <li  class="has-sub" >
                  <a class="sidenav-item-link" href="" data-toggle="collapse" data-target="#components"
                    aria-expanded="false" aria-controls="components">
                    <span class="nav-text"><a href="add-weight.php">Product Weights</a></span>
                  </a>
                </li>


            </div>
          </ul>
        </li>

        <li  class="has-sub" >
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
          aria-expanded="false" aria-controls="ui-elements">
            <i class="mdi mdi-account-group"></i>
            <span class="nav-text">Users</span> <b class="caret"></b>
          </a>
          <ul  class="collapse"  id="ui-elements"
            data-parent="#sidebar-menu">
            <div class="sub-menu">


              <li  class="has-sub" >
                <a class="sidenav-item-link" href="" data-toggle="collapse" data-target="#components"
                  aria-expanded="false" aria-controls="components">
                  <span class="nav-text"><a href="users.php">Manage Users</a></span>
                </a>
              </li>



              <li  class="has-sub" >
                <a class="sidenav-item-link" href="" data-toggle="collapse" data-target="#icons"
                  aria-expanded="false" aria-controls="icons">
                  <span class="nav-text"><a href="add-user.php">Add User</a></span>
                </a>
              </li>


            </div>
          </ul>
        </li>


        <li  class="has-sub" >
          <a class="sidenav-item-link" href="orders.php"
            aria-expanded="false" aria-controls="">
            <i class="mdi mdi-cart"></i>
            <span class="nav-text">Orders</span> <b class=""></b>
          </a>
        </li>

        <li  class="has-sub" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#reports"
            aria-expanded="false" aria-controls="reports">
              <i class="mdi mdi-chart-bar"></i>
              <span class="nav-text">Reports</span> <b class="caret"></b>
            </a>
            <ul  class="collapse"  id="reports"
              data-parent="#sidebar-menu">
              <div class="sub-menu">

              <li  class="has-sub" >
                  <a class="sidenav-item-link" href="" data-toggle="collapse" data-target="#icons"
                    aria-expanded="false" aria-controls="icons">
                    <span class="nav-text"><a href="sales-reports.php?st=<?php echo date('Y-m-d') ?>&ed=<?php echo date('Y-m-d') ?>&group=0">Sales Report</a></span>
                  </a>
                </li>
  
                <li  class="has-sub" >
                  <a class="sidenav-item-link" href="" data-toggle="collapse" data-target="#icons"
                    aria-expanded="false" aria-controls="icons">
                    <span class="nav-text"><a href="product-reports.php">Product Sales</a></span>
                  </a>
                </li>

                <li  class="has-sub" >
                  <a class="sidenav-item-link" href="" data-toggle="collapse" data-target="#icons"
                    aria-expanded="false" aria-controls="icons">
                    <span class="nav-text"><a href="canceled-orders.php">Canceled Orders</a></span>
                  </a>
                </li>

                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="" data-toggle="collapse" data-target="#icons"
                      aria-expanded="false" aria-controls="icons">
                      <span class="nav-text"><a href="inventory.php">Inventory</a></span>
                    </a>
                  </li>
  
  
              </div>
            </ul>
          </li>

            </div>
          </ul>
        </li>
</div>
</aside>



<div class="page-wrapper">
        <!-- Header -->
<header class="main-header " id="header">
  <nav class="navbar navbar-static-top navbar-expand-lg">
    <!-- Sidebar toggle button -->
    <button id="sidebar-toggler" class="sidebar-toggle">
      <span class="sr-only">Toggle navigation</span>
    </button>
    <!-- search form -->
    <div class="search-form d-none d-lg-inline-block">
      <div class="input-group">
      </div>
      <div id="search-results-container">
        <ul id="search-results"></ul>
      </div>
    </div>

    <div class="navbar-right ">
      <ul class="nav navbar-nav">
        
        <!-- User Account -->
        <li class="dropdown user-menu">
          <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
           
            <span class="d-none d-lg-inline-block">Account</span>
          </button>
          <ul class="dropdown-menu dropdown-menu-right">
            <!-- User image -->
            <li class="dropdown-header">
              <div class="d-inline-block">
              </div>
            </li>


            <li class="dropdown-footer">
              <a href="../logout.php"> <i class="mdi mdi-logout"></i> Log Out </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>


</header>
</body>
</html>
