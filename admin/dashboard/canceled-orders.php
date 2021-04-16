 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>PharmaSys - Canceled Orders</title>

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

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>
<body>
    
    <?php 
    include "side-bar.php";
    ?>
<div class="row justify-content-center">
<div class="col-lg-8"style="margin-top: 50px;">

									<div class="card card-default">
                  <div class="card-header card-header-border-bottom justify-content-between">
                   
                   <div class="col">
                       <h2>Canceled Orders</h2>
                   </div>
                   <div class="col"> 
                   <button type="button" style="float:right" class="btn btn-primary btn-md" onclick="myFunction()">Print</button>
                   </div>
                    <br><br>
                </div>
            <div class="card-body">
                <table id="dtBasicExample" class="table table-hover ">
                    <thead>
                        <tr>
                            <th scope="col">Order #</th>
                            <th scope="col">User ID</th>
                            <th scope="col">Order Date</th>
                            <th scope="col">Order Total</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                    
                    include_once 'conn.php';
                      $link = OpenCon(); // Opens connection to the database

                      // Query: Gets the data from an the join of the table "users" and the table "orders" where the "user_id" columns are the same
                      $sql_orders= "SELECT *, SUM(sold_price * item_quantity) as total FROM users, orders natural join order_contains WHERE orders.user_id = users.user_id AND orders.status = 0 ORDER BY order_date DESC";

                      $result_orders = mysqli_query($link, $sql_orders);

                      // Gets the data from the order
                      if (mysqli_num_rows($result_orders) > 0) {
                          // output data of each row
                          $subtotal = 0;
                          while($row = mysqli_fetch_assoc($result_orders)) {

                            $subtotal =  number_format ($subtotal + $row['total'], 2);
                            $shipping_cost =  number_format (10, 2);
                            $taxes = number_format (($subtotal + 10) * 0.115, 2);
                            $final_total = $subtotal + $shipping_cost + $taxes;

                              $id_user = $row['user_id'];
                              $lastname_user = $row['last_name'];
                              $name_user = $row['first_name'];
                              $num_order =  $row['order_id'];
                              $status = 'Canaceled';
                              $date = $row['order_date'];

                            echo '
                                </tr>
                                    <td>'.$num_order.'</td>
                                    <td>'.$name_user.' '.$lastname_user.'</td>
                                    <td>'.$date.'</td>
                                    <td>$'.$final_total.'</td>
                                    <td>'.$status.'</td>
                                    
                                    <td><form action="order_detail.php">
                                    <input type="hidden" name="user" value="'.$id_user.'">
                                    <input type="hidden" name="order" value="'.$num_order.'">
                                    <button type="submit" href="order_deteil.php?" class="btn btn-outline-primary btn-sm">Details</button>
                                    </form></td>
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
    </div>
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