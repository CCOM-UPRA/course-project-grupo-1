 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>PharmaSys - Reports</title>

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


    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

    <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>

<body>

    <?php 
    include "side-bar.php";
    include_once "conn.php";
    $link = OpenCon();

    if (isset($_GET['st']) && isset($_GET['ed'])) {
        $from = $_GET['st'];
        $to = $_GET['ed'];

        $sql = "SELECT product_id, photo, product_name, item_quantity, ((sold_price-cost)*item_quantity) AS revenue  
                FROM orders NATURAL JOIN products NATURAL LEFT OUTER JOIN order_contains 
                WHERE order_date BETWEEN  '$from' AND '$to' 
                GROUP BY product_id ORDER BY revenue DESC,item_quantity";

        $result = mysqli_query($link, $sql);
    }
    else  {
        $sql = "SELECT product_id, photo, product_name, item_quantity, ((sold_price-cost)*item_quantity) AS revenue  
                FROM orders NATURAL JOIN products NATURAL LEFT OUTER JOIN order_contains 
                GROUP BY product_id ORDER BY revenue DESC,item_quantity ";

        $result = mysqli_query($link, $sql);
    }
    ?>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-8 col-lg-6">
            <div class="card card-default">
            <div class="card-header card-header-border-bottom justify-content-between">
                   
                   <div class="col">
                       <h2>Product Sales</h2>
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
                                style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                <i class="mdi mdi-calendar"></i>&nbsp;
                                <span></span> <i class="mdi mdi-arrow"></i>
                            </div>
                        </div>
                        <div class="col">
                            <form action="product-reports.php" method="get">
                                <input id="st" name="st" type="hidden" value="">
                                <input id="ed" name="ed" type="hidden" value="">

                                <button  class="btn btn-primary btn-sm" type="submit">Filter</button>
                            </form>
                        </div>
                    </div>
                    <br>

                    <?php
                    if (isset($_GET['st']) && isset($_GET['ed'])) {
                        echo" <p style='text-align:center'><a href='product-reports.php'><i class='mdi mdi-close'></i></a>Showing results from <span style='color:orange'>$from</span> to <span style='color:orange'>$to</span></p><br>";
                    }
                    ?>
                    <table id="dtBasicExample" class="table table-hover ">

                        <thead>
                            <tr>
                                <th scope="col">Product Image</th>
                                <th scope="col">Product</th>
                                <th scope="col">Quantity Sold</th>
                                <th scope="col">Revenue</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                             if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                 // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
                                                   
                                                    $name =  $row['product_name'];
                                                    $photo =  $row['photo'];
                                                    $quantity = $row['item_quantity'];
                                                    $revenue = $row['revenue'];
                                                    if ($quantity == '') {$quantity = 0;}
                                                    if ($revenue == '') {$revenue = 0.00;}

                                                echo '
                                             
                                                <tr> 
                                                    <td><img src="../images/product/sm-img/'.$row['photo'].'" alt="" width="75"></td>
                                                    <td>'.$name.'</td>
                                                    <td>'.$quantity.'</td>
                                                    <td>$'.$revenue.'</td>                                                        
                                                </tr>
                                                ';
                                                }
                                            }
                                            else {
                                                echo"No results for the given date";
                                            }
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
        var end = moment();

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