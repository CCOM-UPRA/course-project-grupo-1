<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>PharmaSys - Orders</title>

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

    <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>

<body>

    <?php 
    include "alerts_handeler.php";
    include_once "conn.php";
    $link = OpenCon();

    if (isset($_POST['tracking_num'])) {
        $sql="UPDATE orders SET tracking_number = '{$_POST['tracking_num']}' WHERE order_id = {$_POST['get_order']}";
        mysqli_query($link, $sql);
        include "orders.php";
        exit();
    }

    if (isset($_REQUEST['update'])) {
        $new_status = mysqli_real_escape_string($link, $_REQUEST['status_update']);
        $order_id = mysqli_real_escape_string($link, $_REQUEST['update']);

        $sql = "UPDATE orders SET status = '$new_status' WHERE order_id = '$order_id'";
        mysqli_query($link,$sql);
        if($new_status == 0){
			
			$sql_get_quantities="SELECT * FROM orders NATURAL JOIN order_contains WHERE order_id = '$order_id'";
			$result = mysqli_query($link,$sql_get_quantities);

			while ($row_order_details = mysqli_fetch_assoc($result)) {

				$product = $row_order_details['product_id'];
				$quantity = $row_order_details['item_quantity'];
				$sql_sum_quantities = "UPDATE products SET inventory_amount = (inventory_amount + '$quantity') WHERE product_id = '$product'";
				mysqli_query($link,$sql_sum_quantities);
				
			}
        }
        unset($_REQUEST['update']);
        include "orders.php";
        exit();
    }

    else if (isset($_REQUEST['order']) && isset($_REQUEST['user'])) {
        $order_id = mysqli_real_escape_string($link, $_REQUEST['order']);
        $user_id = mysqli_real_escape_string($link, $_REQUEST['user']);

        $sql = "SELECT * , orders.status as order_status, users.status as user_status
                FROM users, orders NATURAL JOIN addresses NATURAL JOIN 
                payment 
                WHERE users.user_id = orders.user_id AND order_id = '$order_id'";

    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];
        $order_date = $row['order_date'];
        $address1 = $row['address1'];
        $address2 = $row['address2'];
        $city = $row['city'];
        $country = $row['country'];
        $shipping_phone = $row['shipping_phone'];
        $tracking_number = $row['tracking_number'];
        $name_on_card = $row['name_on_card'];
        $card_number = substr($row['card_number'], -4);

        $users_status = $row['user_status'];
            switch ($users_status) {
                case '0':
                    $users_status = 'Active';
                    break;
                case '1':
                    $users_status = 'Pending';
                    break;
                case '2':
                    $users_status = 'Inactive';
                    break;
            }
        $order_status = $row['order_status'];
            
    }
    ?>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card-header card-header-border-bottom">
                <div class="row">
                    <div class="col align-self-center">
                        <h4 class="text-center">Order ID: <span style='color:orange'>#<?php echo $order_id;?></span>
                        </h4>
                    </div>
                    <div class="col align-self-center">
                        <h4 class="text-center"> Order Date: <span style='color:orange'><?php echo $order_date;?></span>
                        </h4>
                    </div>
                    <div class="col align-self-center">
                        <form class="form-inline" action="order_detail.php" method="post">

                            <h4 class="text-center">Status:</h4>

                            <div class="input-group col" style="margin-bottom:0px">
                                <select class="form-control " name="status_update" id="inputGroupSelect04"
                                    aria-label="Example select with button addon">
                                    <?php
                                        if ($order_status == 0) {
                                            echo '
                                                <option value="0" selected>Canceled</option>
                                                <option value="1">Pending</option>
                                                <option value="2">On-way</option>
                                                <option value="3">Delievered</option>';
                                        }
                                        else if ($order_status == 1) {
                                            echo '
                                                <option value="0" >Canceled</option>
                                                <option value="1"selected>Pending</option>
                                                <option value="2">On-way</option>
                                                <option value="3">Delievered</option>';
                                        }
                                        else if ($order_status == 2) {
                                            echo '
                                                
                                                <option value="1">Pending</option>
                                                <option value="2"selected>On-way</option>
                                                <option value="3">Delievered</option>';
                                        }
                                        else if ($order_status == 3) {
                                            echo '
                                                
                                                <option value="1">Pending</option>
                                                <option value="2">On-way</option>
                                                <option value="3"selected>Delievered</option>';
                                        }
                                    ?>
                                </select>

                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" name="update"
                                        value="<?php echo $order_id; ?>" type="submit">Update</button>
                                </div>

                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>

    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Customer Information</h2>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>Name:</td>
                                <td><?php echo "$first_name $last_name"; ?></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><?php echo "$email"; ?></td>
                            </tr>
                            <tr>
                                <td>Status:</td>
                                <td><?php echo "$users_status"; ?></td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Shipping Details</h2>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>Address 1:</td>
                                <td><?php echo "$address1"; ?></td>
                            </tr>
                            <?php
                            if ($address2 != '') {
                               echo " 
                                <tr>
                                    <td>Address 2:</td>
                                    <td> $address2 </td>
                                </tr>";
                            }
                            ?>
                            <tr>
                                <td>Contact:</td>
                                <td><?php echo "$shipping_phone"; ?></td>
                            </tr>
                            <?php
                            if ($tracking_number != '') {
                               echo " 
                                <tr>
                                    <td>Tracking Number:</td>
                                    <td> $tracking_number </td>
                                </tr>";
                            }
                            else{
                                echo'
                                <tr>
                               <td>
                               <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                               Add Tracking Number
                                </button>
                               </td>
                                </tr>
                                ';
                            }
                            ?>

                            <!-- Modal for adding tracking number -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Add Tracking Number
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="order_detail.php" method="POST">
                                        <div class="modal-body ">
                                            <input class="form-control type=" text" name="tracking_num">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" name="get_order" value="<?php echo $order_id; ?>" class="btn btn-primary">Add Tracking Number</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>



                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Payment Details</h2>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>Name on Card:</td>
                                <td><?php echo "$name_on_card"; ?></td>
                            </tr>
                            <tr>
                                <td>Card Number:</td>
                                <td><?php echo "$card_number"; ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>

        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Order Details</h2>
                </div>

                <div class="card-body">

                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th scope="col">Product Image</th>
                                <th scope="col">Product</th>
                                <th scope="col">Category</th>
                                <th scope="col">Weight</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql_products = "SELECT *, (sold_price * item_quantity) as total 
                            FROM orders NATURAL JOIN order_contains NATURAL JOIN products NATURAL JOIN categories NATURAL LEFT OUTER JOIN weight
                            WHERE order_id = '$order_id'";

                             $result_product = mysqli_query($link, $sql_products);
                             $subtotal = 0;

                          while($row = mysqli_fetch_assoc($result_product)) {
                            $subtotal =  number_format ($subtotal + $row['total'], 2);
                            $shipping_cost =  number_format (10, 2);
                            $taxes = number_format (($subtotal + 10) * 0.115, 2);
                            $final_total = number_format ($subtotal + $shipping_cost + $taxes,2);
                          
                        print '
                      
                        <tr>
                        <td> <img src="../images/product/sm-img/'.$row['photo'].'" alt="" width="75"></td>  
                        <td>'.$row['product_name'].'</td>
                        <td>'.$row['category_name'].'</td>
                        <td>'.$row['weight'].'mg</td>
                        <td>'.$row['item_quantity'].'</td>
                        <td>$'.$row['sold_price'].'</td>
                        </tr>
                        ';
                          }
                        ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Subtotal:</td>
                                <td>$<?php echo $subtotal; ?></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Taxes:</td>
                                <td>$<?php echo $taxes; ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Shipping Cost:</td>
                                <td>$<?php echo $shipping_cost; ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <th>Total:</th>
                                <th>$<?php echo $final_total; ?></th>
                            </tr>


                        </tbody>
                    </table>
                    <div class="row justify-content-center">
                        <div>
                            <button type="button" class="btn btn-primary btn-md mr-3"
                                onclick="myFunction()">Print</button>
                        </div>
                        <div>
                            <button class="btn btn-outline-primary btn-md "
                                onclick="location.href='orders.php'">Back</button>
                        </div>

                    </div>
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
     <!-- Print functionality -->
    <script>
    function myFunction() {
        window.print();
    }
    </script>

</body>

</html>