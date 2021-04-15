 <!DOCTYPE html>
 <html lang="en" dir="ltr">

 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1" />

     <title>PharmaSys - Dashboard</title>

     <!-- GOOGLE FONTS -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
         rel="stylesheet" />
     <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

     <!-- PLUGINS CSS STYLE -->
     <link href="assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
     <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
     <link href="assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet" />
     <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
     <link href="assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
     <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
     <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

     <!-- SLEEK CSS -->
     <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

     <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

     <script src="assets/plugins/nprogress/nprogress.js"></script>
 </head>

 <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">


     <div class="mobile-sticky-body-overlay"></div>

     <?php 
    include "side-bar.php";
    include "../../../partials/connect.php";
    $month = date('m');
    $year = date('Y');

    ?>

     <div class="content-wrapper">
         <div class="content">
             <!-- Top Statistics -->
             <div class="row">
                 <div class="col-xl-3 col-sm-6">
                     <div class="card card-mini mb-4">
                         <div class="card-body">
                             <!-- Online user numbers -->
                             <?php
                  $link = OpenCon();
                  $sql = "SELECT COUNT(user_id) AS user_count
                  FROM users
                  WHERE role <> 0 and MONTH(account_date) = '$month'";
                   $result = mysqli_query($link, $sql);
                   $row = mysqli_fetch_assoc($result);
                   echo '<h2 class="mb-1">'.$row['user_count'].'</h2>' ;
                  ?>
                  <hr>
                             <p>New Signups (<?php echo date('F'); ?>)</p>
                             
                         </div>
                     </div>
                 </div>
                 <!--  -->


                 <div class="col-xl-3 col-sm-6">
                     <div class="card card-mini  mb-4">
                         <div class="card-body">
                             <!-- Number of logins -->
                             <?php
                                $link = OpenCon();
                                $sql = "SELECT COUNT(user_id) AS user_count
                                FROM users
                                WHERE status = 1 and role <> 0 and MONTH(account_date) = '$month'; ";
                                $result = mysqli_query($link, $sql);
                                $row = mysqli_fetch_assoc($result);
                                echo '<h2 class="mb-1">'.$row['user_count'].'</h2>' ;
                            ?>
                             <hr>
                             <p>Pending Accounts</p>
                            
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-3 col-sm-6">
                     <div class="card card-mini mb-4">
                         <div class="card-body">
                             <!-- Number of orders (Monthly) -->
                             <?php
                  $link = OpenCon();
                  $sql = "SELECT COUNT(ORDER_ID) AS sales
                          FROM ORDERS
                          WHERE MONTH(ORDER_DATE) = '$month' AND YEAR(ORDER_DATE) = '$year' AND status = 3";
                   $result = mysqli_query($link, $sql);
                   $row = mysqli_fetch_assoc($result);
                   echo '<h2 class="mb-1">'.$row['sales'].'</h2>' ;
                  ?>
                            <hr>
                             <p>Total Orders (<?php echo date('F'); ?>)</p>

                            
                         </div>
                     </div>
                 </div>
                

                 <div class="col-xl-3 col-sm-6">
                     <div class="card card-mini mb-4">
                         <div class="card-body">
                             <!-- Number of yearly revenue -->
                             <?php
                  $link = OpenCon();
                  $sql = "SELECT SUM(sold_price * item_quantity) AS total, SUM(cost * item_quantity) AS total_cost
                  FROM orders NATURAL JOIN products NATURAL JOIN order_contains
                  where MONTH(order_date) = '$month' AND YEAR(ORDER_DATE) = '$year' AND status = '3' ";
                   $result = mysqli_query($link, $sql);

                   while($row = mysqli_fetch_assoc($result)){
                    $revenue = number_format($row['total'] + ($row['total']*.115) ,2);
                   }

                   echo '<h2 class="mb-1">$'.$revenue.'</h2>' ;
                  ?>
                  <hr>
                             <p> Total Revenue (<?php echo date('F'); ?>)</p>
                             
                         </div>
                     </div>
                 </div>
             </div>

             <div class="row">
                 <div class="col-xl-8 col-md-12">
                     <!-- Sales Graph -->
                     <div class="card card-default" data-scroll-height="675">
                         <div class="card-header">
                             <h2>Revenue By Month&nbsp;</h2>
                             <?php

                      echo '<h2>('.$year.')</h2>';
                      ?>
                         </div>
                         <div class="card-body">
                             <canvas id="sales_year" style="height:220px; width: 100%;"></canvas>
                         </div>
                         <div class="card-footer d-flex flex-wrap bg-white p-0">
                             <div class="col-6 px-0">
                                 <div class="text-center p-4">
                                     <?php


                  $link = OpenCon();
                  $sql = "SELECT COUNT(ORDER_ID) AS sales
                  FROM ORDERS
                  WHERE YEAR(ORDER_DATE) = '$year' AND status = 3";
                   $result = mysqli_query($link, $sql);
                   $row = mysqli_fetch_assoc($result);
                   echo ' <h4>'.$row['sales'].'</h4>' ;
                  ?>

                                     <p class="mt-2">Total Orders (<?php echo $year ?>)</p>
                                 </div>
                             </div>
                             <div class="col-6 px-0">
                                 <div class="text-center p-4 border-left">
                                     <?php

                  $link = OpenCon();
                  $sql = "SELECT SUM(sold_price * item_quantity) as total
                  FROM orders NATURAL JOIN products NATURAL JOIN order_contains
                  WHERE YEAR(ORDER_DATE) = '$year'
                  AND STATUS = '3' ";
                                 
                   $result = mysqli_query($link, $sql);
                   while($row = mysqli_fetch_assoc($result)){
                    $revenue =  $row['total'] + ($row['total']*.115);
                   }
                   

                   echo ' <h4>$'.number_format($revenue, 2).'</h4>' ;
                  ?>
                                     <p class="mt-2">Total Revenue (<?php echo $year ?>)</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!--  -->
                 <script>
                 var ctx = document.getElementById("sales_year");
                 if (ctx !== null) {
                     var chart = new Chart(ctx, {
                         // The type of chart we want to create
                         type: "line",

                         // The data for our dataset
                         data: {
                             labels: [
                                 "Jan",
                                 "Feb",
                                 "Mar",
                                 "Apr",
                                 "May",
                                 "Jun",
                                 "Jul",
                                 "Aug",
                                 "Sep",
                                 "Oct",
                                 "Nov",
                                 "Dec"
                             ],
                             datasets: [{
                                 label: "",
                                 backgroundColor: "transparent",
                                 borderColor: "rgb(82, 136, 255)",
                                 data: [

                                     <?php
                                     $link = OpenCon();

                                     for ($i = 1; $i < 13; $i++) {
                                         $sql =
                                             "SELECT SUM(sold_price * item_quantity) as total
                                             FROM orders NATURAL JOIN products NATURAL JOIN order_contains
                                             WHERE YEAR(ORDER_DATE) = '$year'
                                             AND MONTH(ORDER_DATE) = '$i'
                                             AND STATUS = '3' 
                                            ";

                                         $result = mysqli_query($link, $sql);
                                         while($row = mysqli_fetch_assoc($result)){
                                            $revenue =  $row['total'] + ($row['total'] * .115);
                                           }

                                         if ($i == 12) {
                                             echo number_format($revenue, 2);
                                         } else {
                                             echo number_format($revenue, 2);
                                             echo ',';
                                         }
                                     } ?>
                                 ],
                                 lineTension: 0.3,
                                 pointRadius: 5,
                                 pointBackgroundColor: "rgba(255,255,255,1)",
                                 pointHoverBackgroundColor: "rgba(255,255,255,1)",
                                 pointBorderWidth: 2,
                                 pointHoverRadius: 8,
                                 pointHoverBorderWidth: 1
                             }]
                         },

                         // Configuration options go here
                         options: {
                             responsive: true,
                             maintainAspectRatio: false,
                             legend: {
                                 display: false
                             },
                             layout: {
                                 padding: {
                                     right: 10
                                 }
                             },
                             scales: {
                                 xAxes: [{
                                     gridLines: {
                                         display: false
                                     }
                                 }],
                                 yAxes: [{
                                     gridLines: {
                                         display: true,
                                         color: "#eee",
                                         zeroLineColor: "#eee",
                                     },
                                     ticks: {
                                         callback: function(value) {
                                             var ranges = [{
                                                     divider: 1e6,
                                                     suffix: "M"
                                                 },
                                                 {
                                                     divider: 1e4,
                                                     suffix: "k"
                                                 }
                                             ];

                                             function formatNumber(n) {
                                                 for (var i = 0; i < ranges.length; i++) {
                                                     if (n >= ranges[i].divider) {
                                                         return (
                                                             (n / ranges[i].divider)
                                                             .toString() +
                                                             ranges[i].suffix
                                                         );
                                                     }
                                                 }
                                                 return n;
                                             }
                                             return formatNumber(value);
                                         }
                                     }
                                 }]
                             },
                             tooltips: {
                                 callbacks: {
                                     title: function(tooltipItem, data) {
                                         return data["labels"][tooltipItem[0]["index"]];
                                     },
                                     label: function(tooltipItem, data) {
                                         return "$" + data["datasets"][0]["data"][tooltipItem["index"]];
                                     }
                                 },
                                 responsive: true,
                                 intersect: false,
                                 enabled: true,
                                 titleFontColor: "#888",
                                 bodyFontColor: "#555",
                                 titleFontSize: 12,
                                 bodyFontSize: 18,
                                 backgroundColor: "rgba(256,256,256,0.95)",
                                 xPadding: 20,
                                 yPadding: 10,
                                 displayColors: false,
                                 borderColor: "rgba(220, 220, 220, 0.9)",
                                 borderWidth: 2,
                                 caretSize: 10,
                                 caretPadding: 15
                             }
                         }
                     });
                 }
                 </script>
                 <!--  -->

                 <div class="col-xl-4 col-md-12">
                     <!-- Doughnut Chart -->
                     <div class="card card-default" data-scroll-height="675">
                         <div class="card-header justify-content-center">
                             <h2>Orders Overview&nbsp;</h2>

                             <?php

                      echo '<h2>('.$year.')</h2>';
                      ?>

                         </div>
                         <div class="card-body">
                             <canvas id="order_status" style="height:220px; width: 100%;"></canvas>
                         </div>
                         <div class="card-footer d-flex flex-wrap bg-white p-0">
                             <div class="col-6">
                                 <div class="py-4 px-4">
                                     <ul class="d-flex flex-column justify-content-between">
                                         <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                                 style="color: #29cc97"></i>Order Delieverd</li>
                                         <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                                 style="color: #fec402 "></i>Order On-Way</li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="col-6 border-left">
                                 <div class="py-4 px-4 ">
                                     <ul class="d-flex flex-column justify-content-between">
                                         <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                                 style="color: #ffa128"></i>Order Pending</li>
                                         <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                                 style="color: #ff0000"></i>Order Canceled</li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--  -->
                     <script>
                     var doughnut = document.getElementById("order_status");
                     if (doughnut !== null) {
                         var myDoughnutChart = new Chart(doughnut, {
                             type: "doughnut",
                             data: {
                                 labels: ["Canceled", "Pending", "On-way", "Delievered"],
                                 datasets: [{
                                     label: ["Canceled", "Pending", "On-way", "Delievered"],
                                     data: [ 
                                         <?php

                                         $link = OpenCon();

                                         for ($i = 0; $i < 4; $i++) {
                                             $sql = "SELECT COUNT(ORDER_ID) AS sales
                                             FROM ORDERS
                                             WHERE YEAR(ORDER_DATE) = '$year'
                                             AND STATUS = '$i'
                                             ";
                                             $result = mysqli_query($link, $sql);
                                             $row = mysqli_fetch_assoc($result);
                                             if ($i == 3) {
                                                 echo number_format($row['sales'],2);
                                             } else {
                                                echo number_format($row['sales'],2);
                                                 echo ',';
                                             }
                                         } 
                                         ?>
                                     ],
                                     backgroundColor: ["#ff0000", "#ffa128", "#fec402", "#29cc97"],
                                     borderWidth: 1
                                     // borderColor: ['#4c84ff','#29cc97','#8061ef','#fec402']
                                     // hoverBorderColor: ['#4c84ff', '#29cc97', '#8061ef', '#fec402']
                                 }]
                             },
                             options: {
                                 responsive: true,
                                 maintainAspectRatio: false,
                                 legend: {
                                     display: false
                                 },
                                 cutoutPercentage: 75,
                                 tooltips: {
                                     callbacks: {
                                         title: function(tooltipItem, data) {
                                             return "Order : " + data["labels"][tooltipItem[0]["index"]];
                                         },
                                         label: function(tooltipItem, data) {
                                             return data["datasets"][0]["data"][tooltipItem["index"]];
                                         }
                                     },
                                     titleFontColor: "#888",
                                     bodyFontColor: "#555",
                                     titleFontSize: 12,
                                     bodyFontSize: 14,
                                     backgroundColor: "rgba(256,256,256,0.95)",
                                     displayColors: true,
                                     borderColor: "rgba(220, 220, 220, 0.9)",
                                     borderWidth: 2
                                 }
                             }
                         });
                     }
                     </script>
                     <!--  -->
                 </div>
             </div>

             <div class="row">
                 <div class="col-12">
                     <!-- Recent Order Table -->
                     <div class="card card-table-border-none" id="recent-orders">
                         <div class="card-header justify-content-between">
                             <h2>Recent Orders</h2>
                             <div class=" widget-dropdown">
                                     <a class="dropdown-toggle icon-burger-mini" href="orders.php" role="button">
                                     </a>
                                 </div>
                         </div>
                         <div class="card-body pt-0 pb-5">
                             <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                                 <thead>
                                     <tr>
                                         <th>Order ID</th>
                                         <th class="d-none d-md-table-cell">Order Date</th>
                                         <th>Customer</th>
                                         <th>Status</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     
                                         <?php
                                            $sql = "SELECT order_id, order_date, first_name, last_name, orders.status AS order_status 
                                            FROM users, orders WHERE users.user_id = orders.user_id ORDER BY order_date DESC LIMIT 10";

                                           $result = mysqli_query($link, $sql);
                                           while ( $row = mysqli_fetch_assoc($result)) {
                                           echo '
                                           <tr>
                                            <td>'.$row['order_id'].'</td>
                                            <td>'.$row['order_date'].'</td>
                                            <td>'.$row['first_name'].' '.$row['last_name'].'</td>';
                                            if ($row['order_status'] == 0) {
                                               echo ' 
                                               <td><span  class="badge" style="background-color:red">Canceled</span></td>
                                               </tr>';
                                            }
                                            else if ($row['order_status'] == 1) {
                                                echo ' 
                                               <td><span class="badge" style="background-color:orange">Pending</span></td>
                                               </tr>';
                                            }
                                            else if ($row['order_status'] == 2) {
                                                echo ' 
                                               <td><span class="badge badge-warning">On-way</span></td>
                                               </tr>';
                                            }
                                            else {
                                                echo ' 
                                               <td><span class="badge badge-success">Completed</span></td>
                                               </tr>';
                                            }
                                           }
                                         ?>
                                   
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>

           

             <div class="row">
                 <div class="col-xl-5">
                     <!-- New Customers -->
                     <div class="card card-table-border-none" data-scroll-height="580">
                         <div class="card-header justify-content-between ">
                             <h2>New Customers</h2>
                             <div>
                                 <div class=" widget-dropdown">
                                     <a class="dropdown-toggle icon-burger-mini" href="users.php" role="button">
                                     </a>
                                 </div>
                             </div>
                         </div>
                         <div class="card-body pt-0">
                             <table class="table ">
                                 <tbody>
                                     <?php
                                         $sql = "SELECT user_id, first_name , last_name , status, account_date 
                                                from users 
                                                where role <> 0
                                                order by account_date desc LIMIT 10";
                                        
                                        $result = mysqli_query($link, $sql);
                                        while ( $row = mysqli_fetch_assoc($result)) {
                                            echo '
                                            <tr>
                                         <td>
                                             <div class="media">
                                                 <div class="media-image mr-3 rounded-circle">
                                                     <!-- <a href="profile.html"><img class="rounded-circle w-45" src="assets/img/user/u1.jpg" alt="customer image"></a> -->
                                                 </div>
                                                 <div class="media-body align-self-center">
                                                     <a href="edit-user.php?edit='.$row['user_id'].'">
                                                         <h6 class="mt-0 text-dark font-weight-medium">'.$row['first_name'].' '.$row['last_name'].'
                                                         </h6>
                                                     </a>
                                                     <small>ID: '.$row['user_id'].'</small>
                                                 </div>
                                             </div>
                                         </td>
                                         <td class="text-dark d-none d-md-block">'.$row['account_date'].'</td>';
                                         if ($row['status'] == 0) {
                                            echo '
                                            <td><span class="badge badge-success">Active</span></td>
                                            </tr>
                                            ';
                                         }
                                         else if ($row['status'] == 1) {
                                            echo '
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            </tr>
                                            ';
                                         }
                                         else {
                                            echo '
                                            <td><span class="badge" style="background-color:red">Pending</span></td>
                                            </tr>
                                            ';
                                         }
                                        }
                                     ?>
                                     
                                    
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>

                 <div class="col-xl-7">
                     <!-- Top Products -->
                     <div class="card card-default" data-scroll-height="580">
                         <div class="card-header justify-content-between mb-4">
                             <h2>Top Products</h2>
                             <div>
                             <div class=" widget-dropdown">
                                     <a class="dropdown-toggle icon-burger-mini" href="manage-products-table.php" role="button">
                                     </a>
                                 </div>
                             </div>
                         </div>
                         <div class="card-body py-0">

                         <?php
                        
                             $sql = "SELECT photo, product_name, category_name, price, sum(item_quantity) as total_quantity 
                             from products natural join categories natural join order_contains 
                             group by product_name 
                             order by total_quantity desc limit 6";
                            
                            $result = mysqli_query($link, $sql);
                            while ( $row = mysqli_fetch_assoc($result)) {

                                echo '<div class="media d-flex mb-5">
                                <div class="media-image align-self-center mr-3 rounded">
                                    <a ><img src="../images/product/sm-img/'.$row['photo'].'" alt="customer image"
                                            width="100"></a>
                                </div>
                                <div class="media-body align-self-center">
                                    <a >
                                        <h6 class="mb-3 text-dark font-weight-medium">'.$row['product_name'].'</h6>
                                    </a>
                                    <p class="float-md-right"><span class="text-dark mr-2">'.$row['total_quantity'].'</span>Units Sold</p>
                                    <p class="d-none d-md-block">'.$row['category_name'].'</p>
                                    <p class="mb-0">
                                        <span class="text-dark ml-3">$'.$row['price'].'</span>
                                    </p>
                                </div>
                            </div>';
                            }
                         ?>
                             
                         </div>
                     </div>
                 </div>
             </div>
         </div>




     </div>

     <footer class="footer mt-auto">
         <div class="copyright bg-white">
             <p>
                 &copy; <span id="copy-year"></span> All rights reserved
                 <a class="text-primary"  target="_blank">PharmaSys</a>.
             </p>
         </div>
         <script>
         var d = new Date();
         var year = d.getFullYear();
         document.getElementById("copy-year").innerHTML = year;
         </script>
     </footer>

     </div>
     </div>


     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
     <script src="assets/plugins/jquery/jquery.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
     <script src="assets/plugins/toaster/toastr.min.js"></script>
     <script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
     <script src="assets/plugins/charts/Chart.min.js"></script>
     <script src="assets/plugins/ladda/spin.min.js"></script>
     <script src="assets/plugins/ladda/ladda.min.js"></script>
     <script src="assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
     <script src="assets/plugins/select2/js/select2.min.js"></script>
     <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
     <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
     <script src="assets/plugins/daterangepicker/moment.min.js"></script>
     <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
     <script src="assets/plugins/jekyll-search.min.js"></script>
     <script src="assets/js/sleek.js"></script>
     <script src="assets/js/chart.js"></script>
     <script src="assets/js/date-range.js"></script>
     <script src="assets/js/map.js"></script>
     <script src="assets/js/custom.js"></script>




 </body>

 </html>