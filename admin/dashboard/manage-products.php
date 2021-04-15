 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>PharmaSys - Manage Products</title>

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

  <script src="assets/plugins/nprogress/nprogress.js"></script>
  
</head>
<body>

    <?php
    include "alerts_handeler.php";
    include "side-bar.php";
    ?>
    <div class="row justify-content-center">
        <div class="col-md-10">
        <div class="card card-default">

        <div class="card-header card-header-border-bottom justify-content-between">
        <div class="col-md-8">
        <h2>Products</h2>
        </div>
        <div class="col-md-4">
        <a href="manage-products.php"> <i style="float:right;font-size:25px" class="text-primary mdi mdi-grid-large" data-toggle="tooltip" data-placement="bottom" title="Grid View"></i></a>
            <a href="manage-products-table.php"> <i style="float:right;font-size:25px" class="text-secondary  mdi mdi-format-align-justify" data-toggle="tooltip" data-placement="bottom" title="Table View"></i></a>
        </div>
</div>

<div class="card-body">
    <div class="row">
        <div class="col-12">
            <p class="mb-5">  </a></p>
        </div>

        <?php
        if (isset($_POST['update_product'])) {
            include "conn.php";
            $link = OpenCon();
            
            $id = mysqli_real_escape_string($link, $_REQUEST['update_product']);
            $name = mysqli_real_escape_string($link, $_REQUEST['name']);
            $category = mysqli_real_escape_string($link, $_REQUEST['category']);
            $quantity = mysqli_real_escape_string($link, $_REQUEST['quantity']);
            $weight_id = mysqli_real_escape_string($link, $_REQUEST['peso']);
            $cost = mysqli_real_escape_string($link, $_REQUEST['cost']);
            $price = mysqli_real_escape_string($link, $_REQUEST['price']);
            $description = mysqli_real_escape_string($link, $_REQUEST['description']);
            $image = mysqli_real_escape_string($link, $_REQUEST['product_image']);
            $valid = mysqli_real_escape_string($link, $_REQUEST['valid']);
             
            //Cheks if the user changes the image, if not the current image stays
            if ($image == '') {
                $sql = "UPDATE `products` SET `product_name`='$name',`category_id`='$category',
                `weight_id`='$weight_id',`price`='$price',`inventory_amount`='$quantity',`inventory_cap`=0,
                `product_text`='$description', `valid_product`='$valid' WHERE `product_id`= '$id'";
            }
            else {
                $sql = "UPDATE `products` SET `product_name`='$name',`category_id`='$category',
                `weight_id`='$weight_id',`price`='$price',`inventory_amount`='$quantity',`inventory_cap`=0,`photo`='$image',
                `product_text`='$description', `valid_product`='$valid' WHERE `product_id`= '$id'";
            }
           
            $result = mysqli_query($link, $sql);
               // Attempt insert query execution
            if(mysqli_query($link, $sql)){
               
               
                alert('success','SUCCESS','Product updated.');
        
            } else{
                alert('danger','ERROR','Product could not updated.');
            }
             
            // Close connection
            mysqli_close($link);
        }
        else if (isset($_POST['remove'])) {
            $id = $_POST['remove'];
            include_once 'conn.php';
            $link = OpenCon();
            $sql = "UPDATE `products` SET `valid_product`= 1 WHERE `product_id`= '$id'";
            // $sql = "DELETE FROM `inventario` WHERE `id` = $id";
            $result = mysqli_query($link, $sql);
    
            alert('warning','WARNING','Product unavailable.');
            mysqli_close($link);
        }
        else if (isset($_POST['add'])) {
            $id = $_POST['add'];
            include_once 'conn.php';
            $link = OpenCon();
            $sql = "UPDATE `products` SET `valid_product`= 0 WHERE `product_id`= '$id'";
            $result = mysqli_query($link, $sql);
        
            alert('success','SUCCESS','Product available.');
            mysqli_close($link);
           
        }
        else if (isset($_POST['edit'])){
            $id = $_POST['edit'];
        
            include_once 'conn.php';
            $prod_id = $_POST['edit'];
            $link = OpenCon();
            $sql = "SELECT * FROM products WHERE `product_id`= '$id'";
        
            $result = mysqli_query($link, $sql);
        
             if (mysqli_num_rows($result) > 0) {
                // output data of each row
                 // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
                    $id = $row['product_id'];
                    $name =  $row['product_name'];
                    $category = $row['category_id'];
                    $price = $row['price'];
                    $weight = $row['weight_id'];
                    $price = number_format($price, 2);
                    $cost = $row['cost'];
                    $description = $row['product_text'];
                    $image = $row['photo'];
                    $quantity = $row['inventory_amount'];
                    $valid = $row["valid_product"];
                }
            }
        
           
            echo '
            <div class="content-wrapper">
            <div class="content">
            <div class="row justify-content-center">
            <div class="col-xl-8">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Edit: <span style="color:orange">Id: '.$id.' Name: '.$name.'</span></h2>
                </div>
                <div class="card-body">
                    <form action="manage-products.php" method="post">
                      
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="exampleFormControlInput1">Product Name</label>
                              <input type="text" class="form-control" name="name" id="exampleFormControlInput1" value= '.$name.' required placeholder="">
                          </div>
                      </div>
        
                      <div class="col-md-6">
                          <div class="form-group">
                          <label for="exampleFormControlPassword">Category</label>
                              <select class="form-control" name="category" id="exampleFormControlSelect12" value= '.$category.' required>';
        
                              $sql = "SELECT * FROM categories";
                              $result = mysqli_query($link, $sql);
                          
                               // Output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                  $id_cat = $row['category_id'];
                                  $categotias =  $row['category_name'];
                                  echo'
                                  <option value="'.$id_cat.'">'.$categotias.'</option>
                                  ';
                              }
                                  echo '
                              </select>
                          </div>
                      </div>
                    </div>
                     
                          <div class="row">
                                <div class="form-group col-md-6">
                                        <div class="form-group">
                                    <label for="exampleFormControlPassword">Weight</label>
                                        <select class="form-control" name="peso" id="exampleFormControlSelect12" value= '.$weight.' required>
                                            <option value="0">None</option> 																	
                                            <option value="1">200mg</option>
                                            <option value="2">500mg</option>
                                        </select>
                                        </div>
                                </div>
                                <div class="form-group col-md-6">
                                   <div class="form-group">
                                      <label for="exampleFormControlSelect12">Quantity</label>
                                      <input type="number" min="1" name="quantity" class="form-control" value= '.$quantity.' required>
                                  </div>
                                </div>	
                          </div>
        
                        <div class="row">
                                <div class="form-group col-md-6">
                                  <div class="form-group">
                                          <label for="exampleFormControlSelect2">Cost</label>
                                          <input type="number" name="cost" min="0.01" step="0.01" class="form-control" placeholder="Ex. 11.98" value= '.$cost.' required>
                                  </div>	
                                </div>
                                
                                <div class="form-group col-md-6">
                                  <div class="form-group">
                                      <label for="exampleFormControlSelect2">Price</label>
                                      <input type="number" name="price" min="0.01" step="0.01" class="form-control" placeholder="Ex. 11.98" value= '.$price.' required>
                                  </div>
                                </div>	
                        </div>
                        
                        
                
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">'.$description.'</textarea>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-4" >
                        <label for="exampleFormControlFile1">Product Image</label>
                        <input type="file" class="form-control-file" name="product_image" id="exampleFormControlFile1" value= '.$image.' >
                        <p><span class="text-primary">* Leave blank to keep current image</span></p>
                        </div>
                        <div class="form-group col-md-4 ml-auto">
                              <label for="exampleFormControlPassword">Availability</label>
                                          <select class="form-control" name="valid" id="exampleFormControlSelect12" required>';
                                          if ($valid == 0) {
                                              print ' <option value="0" selected>Enabled</option>
                                                      <option value="1" >Disabled</option>	
                                             ';
                                          }
                                          else {
                                              print ' <option value="0" >Enabled</option>
                                                      <option value="1" selected>Disabled</option>	
                                              ';
                                          }
                      print '             </select>
                              </div>
                        </div>
        
                        <div class="form-footer pt-4 pt-5 mt-4 border-top">
                            <button type="submit" class="btn btn-primary btn-default" name="update_product" value="'.$prod_id.'">Update</button>
                            <button class="btn"><a href="manage-products.php">Back</a></button>
                        </div>
                    </form>
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
            ';
            mysqli_close($link);
            exit();
        }

        include_once 'conn.php';
            $link = OpenCon();
            $results_per_page = 12;
            

            $sql = "SELECT *  FROM products NATURAL JOIN categories";
            $result = mysqli_query($link, $sql);

            //Number of total results
            $number_of_results = mysqli_num_rows($result);

            $number_of_pages = ceil($number_of_results / $results_per_page);


            if (!isset($_GET['page'])) {
                $page = 1;
            }
            else {
                $page = $_GET['page'];
            }

            $starting_limit_number = ($page - 1) * $results_per_page;

            $sql = "SELECT *  FROM products NATURAL JOIN categories LIMIT $starting_limit_number , $results_per_page";

            $result = mysqli_query($link, $sql);

            //Number of total results
            $number_of_results = mysqli_num_rows($result);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                 // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
                    $id = $row['product_id'];
                    $name =  $row['product_name'];
                    $category = $row['category_name'];
                    $cost = $row['cost'];
                    $price = $row['price'];
                    $price = number_format($price, 2);
                    $description = $row['product_text'];
                    $image = $row['photo'];
                    $valid = $row['valid_product'];
                    $quantity = $row['inventory_amount'];
                



                        //Verifies if the product is active in the inventory and displays the appropriate options
                        if ($valid == 0) {
                            echo'
                            <div class="col-md-6 col-xl-3">
                            <div class="card mb-4">
                            <img class="card-img-top" src="../images/product/sm-img/'.$image.'" height="300" width="100">
                            <div class="card-body">
                            <h4 class="card-title text-primary" style="text-align:center; margin-bottom: 10%">'.$name.'</h4>
                                <table class="table">
                                <tbody>
                                <tr>
                                <th><h5 class="card-title text-secondary">Price:</h5></th>
                                <td><span class="card-title text-primary"> $'.$price.'</span></td>
                                </tr>

                                <tr>
                                <th> <h5 class="card-title text-secondary">Cost:</h5></th>
                                <td><span class="card-title text-primary"> $'.$cost.' </span></td>
                                </tr>

                                <tr>
                                <th><h5 class="card-title text-secondary">Quantity:</h5></th>
                                <td><span class="card-title text-primary"> '.$quantity.' units</span></td>
                                </tr>

                                <tr>
                                <th><h5 class="card-title text-secondary">Category:</h5></th>
                                <td><span class="card-title text-primary"> '.$category.'</span></td>
                                </tr>

                                </tbody>
                                </table>

                                <div class="row justify-content-center">
                                <form action="manage-products.php" method="post">
                                <button type="submit" class="btn btn-primary" name="edit" value="'.$id.'">Edit<input type="hidden" class="btn btn-primary" name="edit" value="'.$id.'"/></button>
                                <button class="btn btn-outline-danger" name="remove" value="'.$id.'">Disable<input type="hidden" class="btn btn-primary" name="edit" value="'.$id.'"/></button>
                                </form>
                                </div>
                                
                                </div>
                                </div>
                                </div>
                                ';
                        }
                        else {
                            echo'
                            <div class="col-md-6 col-xl-3">
                        <div class="card mb-2">
                        <span class="badge badge badge-warning">Unavailable</span><img class="card-img-top" src="../images/product/sm-img/'.$image.'" height="300" width="100">
                            <div class="card-body">
                       <h4 class="card-title text-primary" style="text-align:center">'.$name.'</h4>
                                <table class="table">
                                <tbody>
                                <tr>
                                <th><h5 class="card-title text-secondary">Price:</h5></th>
                                <td><span class="card-title text-primary"> $'.$price.'</span></td>
                                </tr>

                                <tr>
                                <th> <h5 class="card-title text-secondary">Cost:</h5></th>
                                <td><span class="card-title text-primary"> $'.$cost.' </span></td>
                                </tr>

                                <tr>
                                <th><h5 class="card-title text-secondary">Quantity:</h5></th>
                                <td><span class="card-title text-primary"> '.$quantity.' units</span></td>
                                </tr>

                                <tr>
                                <th><h5 class="card-title text-secondary">Category:</h5></th>
                                <td><span class="card-title text-primary"> '.$category.'</span></td>
                                </tr>

                                </tbody>
                                </table>
                                <div class="row justify-content-center">
                                <form action="manage-products.php" method="post">
                                <button type="submit" class="btn btn-primary" name="edit" value="'.$id.'">Edit<input type="hidden" class="btn btn-primary" name="edit" value="'.$id.'"/></button>
                                <button class="btn btn-outline-success" name="add" value="'.$id.'">Enable<input type="hidden" class="btn btn-primary" name="edit" value="'.$id.'"/></button>
                                </form>
                                </div>
                            </div>
                            </div>
                        
                            </div>
                            ';
                        }
                       
                }

            }
        ?>


</div>
<!-- Pagination widget -->
<nav aria-label="...">
   <ul class="pagination justify-content-center">
     <li class="page-item disabled">
       <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
     </li>
<?php
            // Display the number of pages 
            for ($p=1; $p <= $number_of_pages; $p++) { 
                if ($page == $p) {
                    echo '<li class="page-item active"><a class="page-link" href="manage-products.php?page='.$p.'">'.$p.'<span class="sr-only">(current)</span></a></li>';
                }
                else {
                    echo '<li class="page-item"><a class="page-link" href="manage-products.php?page='.$p.'">'.$p.'</a></li> ';
                }

             }
?>
     <li class="page-item">
       <a class="page-link" href="#">Next</a>
     </li>
   </ul>
 </nav>
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

<script>
                $(document).ready(function() {
                    $(function () {
                        $('[data-toggle="tooltip"]').tooltip()
                    });
                  
                });
                </script>
                <script>
                function myFunction() {
                    window.print();
                }
                </script>
</body>
</html>
