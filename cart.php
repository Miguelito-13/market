<?php

  $active='Cart';
  include("includes/header.php");

  $session_email = $_SESSION['customer_email'];

  $select_customer = "select * from customer where customer_email='$session_email'";

  $run_customer = mysqli_query($conn,$select_customer);

  $row_customer = mysqli_fetch_array($run_customer);

  $customer_id = $row_customer['customer_id'];

?>

  <div id="content"><!-- content Start -->

    <div class="container"><!-- container Start -->

      <div class="col-md-12"><!-- col-md-12 Start -->

        <ul class="breadcrumb">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            Cart
          </li>
        </ul>

      </div><!-- col-md-12 Finish -->

      <div id="cart" class="col-md-9"><!-- col-md-9 Start -->

        <div class="box"><!-- box Start -->

          <form action="cart.php" method="post" enctype="multipart/form-data">

            <h1>Shopping Cart</h1>

            <?php 
            
              $ip_add = getRealIpUser();

              $select_cart = "select * from cart where ip_add='$ip_add'";

              $run_cart = mysqli_query($conn,$select_cart);

              $count = mysqli_num_rows($run_cart);
            
            ?>

            <p class="text-muted">You currently have <?php echo $count; ?> item(s)</p>

            <div class="table-responsive"><!-- table-responsive Start -->

              <table class="table">

                <thead>
                  <tr>
                    <th colspan="2">Product</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Size</th>
                    <th colspan="1">Delete</th>
                    <th colspan="2">Sub-Total</th>
                  </tr>
                </thead>

                <tbody>

                  <?php 
                  
                    $total = 0;

                    while($row_cart=mysqli_fetch_array($run_cart)){

                      $pro_id = $row_cart['p_id'];

                      $pro_size = $row_cart['size'];

                      $pro_qty = $row_cart['qty'];

                      $get_products = "select * from products where product_id='$pro_id'";

                      $run_products = mysqli_query($conn,$get_products);

                      while($row_products=mysqli_fetch_array($run_products)){

                        $product_name = $row_products['product_name'];

                        $product_img1 = $row_products['product_img1'];

                        $only_price = $row_products['product_price'];

                        $sub_total = $row_products['product_price'] * $pro_qty;

                        $total += $sub_total;
                  
                  ?>

                        <tr>
                          <td>
                            <img class="img-responsive" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="product 1">
                          </td>
                          <td><!-- Product -->
                            <a href="details.php?pro_id=<?php echo $pro_id;?>"><?php echo $product_name; ?></a>
                          </td>
                          <td><!-- Quantity -->
                            <?php echo $pro_qty; ?>
                          </td>
                          <td><!-- Price -->
                            P<?php echo $only_price; ?>
                          </td>
                          <td><!-- Size -->
                            <?php echo $pro_size; ?>
                          </td>
                          <td><!-- Delete -->
                            <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                          </td>
                          <td>
                            P<?php echo $sub_total; ?>
                          </td>
                        </tr>

                  <?php 
                  
                    } 
                  
                  }
                  ?>

                </tbody>

                <tfoot>
                  <tr>
                    <th colspan="6">Total</th>
                    <th colspan="2">P<?php echo $total; ?></th>
                  </tr>
                </tfoot>

              </table>

            </div><!-- table-responsive Finish -->

            <div class="box-footer"><!-- box-footer Start -->

              <div class="pull-left"><!-- pull-left Start -->

                <a href="index.php" class="btn btn-default">
                  <i class="fa fa-chevron-left"></i> Continue Shopping
                </a>

              </div><!-- pull-left Finish -->

              <div class="pull-right"><!-- pull-left Start -->

                <button type="submit" name="update" value="Update Cart" class="btn btn-default">
                  <i class="fa fa-refresh"></i> Update Cart
                </button>

                <a href="order.php?c_id=<?php echo $customer_id ?>" class="btn btn-primary">
                  Proceed Checkout 
                  <i class="fa fa-chevron-right"></i>
                </a>

              </div><!-- pull-left Finish -->

            </div><!-- box-footer Finish -->

          </form>

        </div><!-- box Finish -->

        <?php 
        
          function update_cart(){

            global $conn;

            if(isset($_POST['update'])){

              foreach($_POST['remove'] as $remove_id){

                $delete_product = "delete from cart where p_id='$remove_id'";

                $run_delete = mysqli_query($conn,$delete_product);

                if($run_delete){

                  echo "<script>window.open('cart.php','_self')</script>";

                }

              }

            }

          }

          echo $up_cart = update_cart();

        ?>

        <div id="row same-height-row"><!-- row Start -->

          <div class="col-md-3 col-sm-6"><!-- col-md-3 Start -->

            <div class="box same-height headline"><!-- box Start -->

              <h3 class="text-center">Products you might also like</h3>

            </div><!-- box Finish -->

          </div><!-- col-md-3 Sinish -->

          <?php 
          
            $get_products = "select * from products order by rand() LIMIT 0,3";

            $run_products = mysqli_query($conn,$get_products);

            while($row_products=mysqli_fetch_array($run_products)){

              $pro_id = $row_products['product_id'];

              $pro_name = $row_products['product_name'];

              $pro_price = $row_products['product_price'];

              $pro_img1 = $row_products['product_img1'];

              echo "

                <div class='col-md-3 col-sm-6 center-responsive'><!-- col-md-3 Start -->

                  <div class='product same-height'><!-- product Start -->

                    <a href='details.php?pro_id=$pro_id'>
                      <img class='img-responsive' src='admin_area/product_images/$pro_img1' alt='product 2'>
                    </a>

                    <div class='text'><!-- text Start -->
                      <h3><a href='details.php?pro_id=$pro_id'>$pro_name</a></h3>
                      <p class='price'>P$pro_price</p>
                    </div><!-- text Finish -->

                  </div><!-- product Finish -->

                </div><!-- col-md-3 Finish -->

              ";

            }

          ?>

        </div><!-- row Finish -->

      </div><!-- col-md-9 Finish -->

      <div class="col-md-3"><!-- col-md-3 Start -->

        <div id="order-summary" class="box"><!-- box Start -->

          <div class="box-header"><!-- box-header Start -->

            <h3>Order Summary</h3>

            <p class="text-muted">
              Shipping and additional costs are calculated based on value you have entered
            </p>

            <div class="table-responsive"><!-- table-responsive Start -->

              <table class="table">

                <tbody>
                  <tr>
                    <td> Order Sub-Total </td>
                    <th> P<?php echo $total; ?> </th>
                  </tr>

                  <tr>
                    <td> Shipping and Handling </td>
                    <th> P0 </th>
                  </tr>

                  <tr>
                    <td> Tax </td>
                    <th> P0 </th>
                  </tr>

                  <tr class="total">
                    <td> Total </td>
                    <th> P<?php echo $total; ?> </th>
                  </tr>
                </tbody>

              </table>

            </div><!-- table-responsive Finish -->

          </div><!-- box-header Finish -->

        </div><!-- box Finish -->

      </div><!-- col-md-3 Finish -->

    </div><!-- container Finish -->

  </div><!-- content Finish -->

  <?php

    include("includes/footer.php")

  ?>

  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>
  
  
</body>
</html>