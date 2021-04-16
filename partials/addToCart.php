<? php

function addToCart($product_id,$product_name, $price, $photo){






             $sql = "SELECT photo, product_id, product_name, price FROM products";
            $products = $connect->query($sql);
            $totalPrice = 0;
            $totalPrice = $totalPrice + $price;

            while($final = $products->fetch_assoc()){ ?>




                <table class="data-table cart-table" id="shopping-cart-table">
                  <thead>
                    <tr class="first last">
                      <th rowspan="1">&nbsp;</th>
                      <th rowspan="1"><span class="nobr">Product Name</span></th>
                      <th rowspan="1" class="hidden-phone"></th>
                      <th rowspan="1" class="hidden-phone"><span class="nobr">Move to Wishlist</span></th>
                      <th colspan="1" class="a-center"><span class="nobr">Unit Price</span></th>
                      <th class="a-center " rowspan="1">Qty</th>
                      <th colspan="1" class="a-center">Subtotal</th>
                      <th class="a-center" rowspan="1">&nbsp;</th>
                    </tr>
                  </thead>
                 <!-- <tfoot>
                    <tr class="first last">
                      <td class="a-right last" colspan="50"><button  class="button btn-continue" onclick = "index.php" title="Continue Shopping" type="submit"><span>Continue Shopping</span></button>

                       <!-- <button class="button btn-update" title="Update Cart" value="update_qty" name="update_cart_action" type="submit"><span>Update Cart</span></button>
                        <button id="empty_cart_button" class="button" title="Clear Cart" value="empty_cart" name="update_cart_action" onclick = "$('#shopping-cart-table tbody tr').remove()" type="submit"><span>Clear Cart</span></button></td>
                    </tr>
                  </tfoot> -->

                  <!-- Scripts para anadir y remover -->

                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                  <tbody>
                    <tr class="first odd">
                      <td class="image"><a class="product-image" title="" href="#"><img width="75" height="75" alt="Women's Crepe Printed Black" src="newImages/CartMovieImages/IncrediblesMini.jpeg"></a></td>
                        <td><h2 class="product-name"> <a href="#"><?php echo product_id?></a> </h2></td>
                      <td class="a-center hidden-table"><a title="Edit item parameters" class="edit-bnt" href="#"></a></td>
                      <td class="a-center hidden-table"><a class="link-wishlist1 use-ajax" href="#">Move</a></td>
                      <td class="a-center hidden-table"><span class="cart-price"> <span class="price"><?php echo price?></span> </span></td>
                      <td class="a-center movewishlist"><input maxlength="12" class="input-text qty" title="Qty" size="4" value="1" name=""></td>
                      <td class="a-center movewishlist"><span class="cart-price"> <span class="price">$totalPrice</span> </span></td>
                      <td class="a-center last"><a class="button remove-item" title="Remove item" onClick="$(this).closest('tr').remove()"><span><span>Remove item</span></span></a></td>
                    </tr>
                    <!--
                    <tr class="last even">
                      <td class="image"><a class="product-image" title="" href="#"><img width="75" height="75" alt="Women's Crepe Printed Black" src="newImages/CartMovieImages/FarFromHomeMini.jpeg"></a></td>
                      <td><h2 class="product-name"> <a id = "remove1" href="#">Stylish Girl- Fashion Closet and Style Shopping</a> </h2></td>
                      <td class="a-center hidden-table"><a title="Edit item parameters" class="edit-bnt" href="#"></a></td>
                      <td class="a-center hidden-table"><a class="link-wishlist1 use-ajax" href="#">Move</a></td>
                      <td class="a-center hidden-table"><span class="cart-price"> <span class="price"><?php echo $final['price'] ?></span> </span></td>
                      <td class="a-center movewishlist"><input maxlength="12" class="input-text qty" title="Qty" size="4" value="1" name=""></td>
                      <td class="a-center movewishlist"><span class="cart-price"> <span class="price">$10.99</span> </span></td>
                      <td class="a-center last"><a class="button remove-item" title="Remove item" href="#" onClick="$(this).closest('tr').remove()"><span><span>Remove item</span></span></a></td>
                    </tr>-->

                  </tbody>
                  <?php } ?>
}






    ?>
