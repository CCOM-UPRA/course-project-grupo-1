 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>PharmaSys - Sales Report</title>

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
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />


    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

    <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>

<body>

    <?php 
    include "side-bar.php";
    include_once "conn.php";
    $link = OpenCon();

    if (isset($_GET['st']) && isset($_GET['ed']) && $_GET['group'] == 0) {
        $from = $_GET['st'];
        $to = $_GET['ed'];


        $sql = "SELECT SUM((sold_price - cost) * item_quantity) AS net_revenue, SUM((sold_price) * item_quantity) AS gross_revenue  
                FROM orders NATURAL JOIN products NATURAL JOIN order_contains 
                WHERE order_date BETWEEN  '$from' AND '$to' and status = 3 ";
        
        $result = mysqli_query($link, $sql);
    }
    else if (isset($_GET['st']) && isset($_GET['ed']) && $_GET['group'] != 0) {
        $from = $_GET['st'];
        $to = $_GET['ed'];

        if($_GET['group'] == 1){
            $group_by = 'DAY';
        }
        else {
            $group_by = 'MONTH';
        }
        $sql = "SELECT order_date, {$group_by}(order_date) as date,SUM((sold_price - cost) * item_quantity) AS net_revenue, SUM(sold_price * item_quantity) AS gross_revenue  
                FROM orders NATURAL JOIN products NATURAL JOIN order_contains 
                WHERE order_date BETWEEN  '$from' AND '$to' and status = 3 GROUP BY {$group_by}(order_date)";

        $result = mysqli_query($link, $sql);
    }
    else  {
        $sql = "SELECT SUM((sold_price - cost) * item_quantity) AS net_revenue, SUM(sold_price * item_quantity) AS gross_revenue 
                FROM orders NATURAL JOIN products NATURAL JOIN order_contains 
                WHERE status = 3 ";

        $result = mysqli_query($link, $sql);
    }
    ?>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-8 col-lg-6">
            <div class="card card-default">
            <div class="card-header card-header-border-bottom justify-content-between">
                   
                   <div class="col">
                       <h2>Sales Report</h2>
                   </div>
                   <div class="col"> 
                   <button type="button" style="float:right" class="btn btn-primary btn-md" onclick="myFunction()">Print</button>
                   </div>
                    <br><br>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div id="reportrange"
                                style="background: #fff; cursor: pointer; padding: 9px 10px; border: 1px solid lightgrey; width: 100%; border-radius:4px">
                                <i class="mdi mdi-calendar"></i>&nbsp;
                                <span></span> <i style="float:right" class="mdi mdi-menu-down"></i>
                            </div>
                        </div>
                        <div class="col form-group">
                            <form action="sales-reports.php" method="get">
                                <input id="st" name="st" type="hidden" value="">
                                <input id="ed" name="ed" type="hidden" value="">
                                <select style="border: 1px solid lightgrey;" name="group" class="form-control" >
                                    <option value="0">None</option>
                                    <option value="1">Day</option>
                                    <option value="2">Month</option>
                                </select>
                               
                            

                        </div>
                        <div class="col">
                        <button  class="btn btn-primary btn-md" type="submit">Filter</button></div>
                        </form>
                    </div>
                    <br>

                    <?php
                    if (isset($_GET['st']) && isset($_GET['ed'])) {
                        echo" <p style='text-align:center'><a href='sales-reports.php'><i class='mdi mdi-close'></i></a> Report: <span style='color:orange'>$from</span> to <span style='color:orange'>$to</span></p><br>";
                    }
                    else{
                        echo" <p style='text-align:center'> Report: <span style='color:orange'>All</span></p><br>";

                    }
                    ?>
                      <!-- Doughnut Chart -->
                      <div class="card card-default" data-scroll-height="675">
                         <div class="card-header justify-content-center">
                             <h2>Orders Overview&nbsp;</h2>

                         </div>
                         <div class="card-body">
                         <?php
                            $link = OpenCon();

                            if (isset($_GET['st']) && isset($_GET['ed']) && isset($_GET['group'])) {
                                $sql_oder_complete = "SELECT COUNT(order_id) AS sales
                                FROM orders
                                WHERE order_date BETWEEN '{$_GET['st']}' AND '{$_GET['ed']}'
                                AND STATUS = 3";

                                $sql_oder_canceled = "SELECT COUNT(order_id) AS sales
                                FROM orders
                                WHERE order_date BETWEEN '{$_GET['st']}' AND '{$_GET['ed']}'
                                AND STATUS = 0";
                            }
                            else {
                                $sql_oder_complete = "SELECT COUNT(order_id) AS sales
                                FROM orders
                                WHERE STATUS = 3";

                                $sql_oder_canceled = "SELECT COUNT(order_id) AS sales
                                FROM orders
                                WHERE STATUS = 0";
                            }

                            $result_oder_complete = mysqli_query($link, $sql_oder_complete);
                            $result_oder_canceled = mysqli_query($link, $sql_oder_canceled);

                            if (mysqli_num_rows($result_oder_canceled) > 0 || mysqli_num_rows($result_oder_complete) > 0) {
                                echo '<canvas id="order_status" style="height:220px; width: 100%;"></canvas>';
                            }
                            else{
                                echo '<p class="text-center">No sesults to display for the given date.</p>';
                            }
                         ?>
                             
                         </div>
                         <div class="card-footer d-flex flex-wrap bg-white p-0">
                             <div class="col-6">
                                 <div class="py-4 px-4">
                                     <ul class="d-flex flex-column justify-content-between">
                                         <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                                 style="color: #29cc97"></i>Order Delieverd</li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="col-6 border-left">
                                 <div class="py-4 px-4 ">
                                     <ul class="d-flex flex-column justify-content-between">
                                         <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                                 style="color: #ff0000"></i>Order Canceled</li>
                                     </ul>
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
                                 labels: ["Canceled","Completed"],
                                 datasets: [{
                                     label: ["Canceled","Completed"],
                                     data: [ 
                                         <?php

 
                                            
                                             if (mysqli_num_rows($result_oder_canceled) > 0 || mysqli_num_rows($result_oder_complete) > 0) {
                                                
                                             $row_oder_complete = mysqli_fetch_assoc($result_oder_complete);
                                             $row_oder_canceled = mysqli_fetch_assoc($result_oder_canceled);
                                                    echo $row_oder_canceled['sales'];
                                                    echo ',';
                                                    echo $row_oder_complete['sales'];
                                             }
                                             else{
                                                 echo'0, 0'; 
                                             }
                                         ?>
                                     ],
                                     backgroundColor: ["#ff0000", "#29cc97"],
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
             
                    <table id="" class="table table-hover ">

                        <thead>
                        <?php
                        if (isset($_GET['st']) && isset($_GET['ed']) && $_GET['group'] != 0) {
                            echo '
                            <tr>
                                <th scope="col">Order Date</th>
                               
                                <th scope="col">Revenue</th>
                                <th scope="col">Profit</th>
                            </tr>';                            
                        }
                        else {
                            echo '
                            <tr>
                                <th scope="col">Completed Sales</th>
                                <th scope="col">Canceled Sales</th>
                                <th scope="col">Revenue</th>
                                <th scope="col">Profit</th>
                            </tr>';
                        }
                        ?>
                            
                        </thead>

                        <tbody>
                            <?php
                                             if (mysqli_num_rows($result) > 0) {
                                                $total_gross_revenue = 0;
                                                $total_net_revenue = 0;

                                                 // Output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $gross_revenue = number_format( $row['gross_revenue'] + ($row['gross_revenue'] * 0.115), 2);
                                                    $net_revenue =  number_format( $row['net_revenue'], 2);
                                                    
                                                    $total_gross_revenue = number_format($total_gross_revenue + $gross_revenue, 2);
                                                    $total_net_revenue = number_format($total_net_revenue + $net_revenue, 2);

                                                    $completed_orders = $row_oder_complete['sales'];
                                                    $canceled_orders = $row_oder_canceled['sales'];

                                                    if ($gross_revenue == '') {$gross_revenue = '0.00';}
                                                    if ($net_revenue == '') {$net_revenue = '0.00';}

                                                    if (isset($_GET['st']) && isset($_GET['ed']) && $_GET['group'] != 0) {

                                                        $date_to_format = $row['order_date'];
                                                        if ($_GET['group'] == 2) {
                                                            $date = date_create($date_to_format);
                                                            $display_date = date_format($date,"F (Y)");
                                                        }
                                                        else {
                                                            $display_date = $row['order_date'];
                                                        }
                                                       

                                                        echo '
                                                        <tr> 
                                                            <td>'.$display_date.'</td>
                                                            <td>$'.$gross_revenue.'</td>
                                                            <td>$'.$net_revenue.'</td>                                                        
                                                        </tr>
                                                        ';
                                                    }
                                                    else{
                                                        echo '
                                                <tr> 
                                                    <td>'.$completed_orders.'</td>
                                                    <td>'.$canceled_orders.'</td>
                                                    <td>$'.$gross_revenue.'</td>
                                                    <td>$'.$net_revenue.'</td>                                                        
                                                </tr>
                                                ';
                                                    }
                                                   
                                                
                                                }
                                                if (isset($_GET['st']) && isset($_GET['ed']) && $_GET['group'] != 0 ) {
                                                    echo "
                                                       <tr></tr>
                                                       <tr>
                                                           <th>Total:</th>
                                                           <th>$$total_gross_revenue</th>
                                                           <th>$$total_net_revenue</th>
                                                       </tr>
                                                    ";
                                                }
                                            }
                                            else {
                                                echo"No results for the given date";
                                            }
                                            ?>
                                            <?php
                                            
                                            ?>
                                            
                        </tbody>
                    </table>
                </div>
            </div>


            <!-- Daily Sales End -->
        </div>
    </div>




    <script type="text/javascript">
    $(function() {
        var start = moment();
        var end = moment() ;

        function cb(start, end) {
            $('#reportrange span').html(start.format('MM-DD-YYYY') + ' - ' + end.format('MM-DD-YYYY'));
            document.getElementById('st').value  = start.format('YYYY-MM-DD');
            document.getElementById('ed').value  = end.format('YYYY-MM-DD');
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            autoUpdateInput: false,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                    'month').endOf('month')],
                'This Year': [moment().startOf('year'), moment().endOf('year')],
                'Last Year': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1,
                    'year').endOf('year')]
            }
        }, cb);

        cb(start, end);

    });
    </script>


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

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

                <script>
                $(document).ready(function() {
                    $('#dtBasicExample').DataTable({
                       
                    });
                    $('.dataTables_length').addClass('bs-select');
                });
                </script>
                <script>
                function myFunction() {
                    window.print();
                }
                </script>

</body>

</html>