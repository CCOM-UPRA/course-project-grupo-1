 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1" />

     <title>PharmaSys - Manage Products</title>

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
    $link2 = OpenCon();
    $sql2 = "SELECT * FROM categories";
    $result2 = mysqli_query($link2, $sql2);
    ?>

     <div class="row justify-content-center mt-5">
         <div class="col-lg-8 col-lg-6">
             <div class="card card-default">
                 <div class="card-header card-header-border-bottom justify-content-between">

                     <div class="col">
                         <h2>Inventory Report</h2>
                     </div>
                     <div class="col">
                         <button type="button" style="float:right" class="btn btn-primary btn-md"
                             onclick="myFunction()">Print</button>
                     </div>


                 </div>
                 <div class="card-body">
                     <div class="form-group">
                         <div class="col-md-12">
                             <div class="row justify-content-center">
                                 <form action="inventory.php" method="POST">
                                     <div class="input-group">
                                         <div class="input-group-prepend">
                                             <label class="input-group-text"
                                                 for="exampleFormControlPassword">Category:</label>
                                             <select class="" name="category" id="inputGroupSelect01">
                                                 <option value="0">All</option>
                                                 <?php
																	 while($row2 = mysqli_fetch_assoc($result2)) {
																		$id2 = $row2['category_id'];
                                                                        $categotias =  $row2['category_name'];
                                                                        
																		echo'
																		<option value="'.$id2.'">'.$categotias.'</option>
																		';
																	}
																?>
                                             </select>
                                             <label class="input-group-text" for="exampleFormControlPassword">Quantity:
                                                 0
                                                 -</label>
                                             <input class="input-group-lg" type="number" name="quantity" min="0"
                                                 step="1" placeholder="Max Quantity">
                                             <button class="btn btn-primary" type="submit" name=""
                                                 value="<?php echo $id2; ?>">Filter</button>
                                         </div>
                                     </div>
                             </div>
                             </form>
                         </div>
                     </div>

                     <table id="dtBasicExample" class="table table-hover ">

                         <thead>
                             <tr>
                                 <th scope="col">Image</th>
                                 <th scope="col">Product</th>
                                 <th scope="col">Wheight (mg)</th>
                                 <th scope="col">Category</th>
                                 <th scope="col">Quantity</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                            $link = OpenCon();
                                            if (isset($_POST['category']) && is_numeric($_POST['category']) && !($_POST['category'] == 0) && !is_numeric($_POST['quantity'])) {
                                                $sql = "SELECT photo, product_name, weight, inventory_amount, category_name
                                                        FROM products LEFT OUTER JOIN weight  USING(weight_id) NATURAL JOIN categories  
                                                        WHERE category_id = {$_POST['category']}
                                                        ORDER BY inventory_amount, product_name;";
                                            }
                                            else if (isset($_POST['category']) && ($_POST['category'] == 0) && is_numeric($_POST['quantity'])) {
                                                $sql = "SELECT photo, product_name, weight, inventory_amount, category_name
                                                        FROM products LEFT OUTER JOIN weight  USING(weight_id) NATURAL JOIN categories  
                                                        WHERE inventory_amount BETWEEN '0' AND '{$_POST['quantity']}' 
                                                        ORDER BY inventory_amount, product_name;";
                                            }
                                            else if (isset($_POST['category']) && is_numeric($_POST['category']) && !($_POST['category'] == 0) && is_numeric($_POST['quantity'])) {
                                                $sql = "SELECT photo, product_name, weight, inventory_amount, category_name
                                                        FROM products LEFT OUTER JOIN weight  USING(weight_id) NATURAL JOIN categories  
                                                        WHERE category_id = {$_POST['category']} AND inventory_amount BETWEEN '0' AND '{$_POST['quantity']}' 
                                                        ORDER BY inventory_amount, product_name;";
                                            }
                                            else {
                                                $sql = "SELECT photo, product_name, weight, inventory_amount, category_name
                                                        FROM products LEFT OUTER JOIN weight  USING(weight_id) NATURAL JOIN categories 
                                                        ORDER BY inventory_amount, product_name;";
                                            }
                                           
                                            $result = mysqli_query($link, $sql);
                                            

                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                 // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
                                                   
                                                    $image= $row['photo'];
                                                    $name =  $row['product_name'];
                                                    $quantity = $row['inventory_amount'];
                                                    $category = $row['category_name'];
                                                    $weight = $row['weight'];



                                                
                                                echo '
                                             
                                                <tr>
                                                    <td><img src="../images/product/sm-img/'.$image.'" alt="" width="75"></td>
                                                    <td>'.$name.'</td>
                                                    <td>'.$weight.'</td>
                                                    <td>'.$category.'</td>
                                                    <td>'.$quantity.'</td>                                                          
                                                </tr>
                                                ';
                                                }
                                            }
                                            else {
                                                echo '<p>No results under that category</p>';
                                            }
    ?>
                 </div>
             </div>
         </div>






         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer>
         </script>
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