<?php 

  if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

  }else{

?>

  <div class="row"><!-- row Start -->

    <div class="col-lg-12"><!-- col-lg-12 Start -->

      <ol class="breadcrumb">

        <li class="active">

          <i class="fa fa-dashboard"></i> Dashboard / View Orders

        </li>

      </ol>

    </div><!-- col-lg-12 Finish -->

  </div><!-- row Finish -->

  <div class="row"><!-- row Start -->

    <div class="col-lg-12"><!-- col-lg-12 Start -->

      <div class="panel panel-default"><!-- panel Start -->

        <div class="panel-heading"><!-- panel-heading Start -->

          <h3 class="panel-title">

            <i class="fa fa-book"></i> View Orders

          </h3>

        </div><!-- panel-heading Finish -->

        <div class="panel-body"><!-- panel-body Start -->

          <div class="table-responsive"><!-- table-responsive Start -->

            <table class="table table-striped table-bordered table-hover">

              <thead>
                <tr>
                  <th> Order No.: </th>
                  <th> Product Name: </th>
                  <th> Customer Name: </th>
                  <th> Due Amount: </th>
                  <th> Invoice No.: </th>
                  <th> Quantity: </th>
                  <th> Size: </th>
                  <th> Order Date: </th>
                  <th> Order Status: </th>
                </tr>
              </thead>

              <tbody>
                
                <?php 

                  $i = 0;
                
                  $get_orders = "select * from customer_orders";

                  $run_orders = mysqli_query($conn,$get_orders);

                  while($row_orders=mysqli_fetch_array($run_orders)){
                    
                    $order_id = $row_orders['order_id'];

                    $customer_id = $row_orders['customer_id'];

                    $due_amount = $row_orders['due_amount'];

                    $invoice_no = $row_orders['invoice_no'];

                    $qty = $row_orders['qty'];

                    $size = $row_orders['size'];
                    
                    $order_date = $row_orders['order_date'];

                    $order_status = $row_orders['order_status'];

                    $i++;
                
                ?>

                <tr>
                  <td><?php echo $order_id; ?></td>
                  <td>
                    <?php 
                  
                      $get_pro_id = "select * from pending_orders where order_id='$order_id'";

                      $run_pro_id = mysqli_query($conn,$get_pro_id);

                      $row_pro_id = mysqli_fetch_array($run_pro_id);

                      $product_id = $row_pro_id['product_id'];

                      $get_product = "select * from products where product_id='$product_id'";

                      $run_product = mysqli_query($conn,$get_product);

                      $row_product = mysqli_fetch_array($run_product);

                      $product_name = $row_product['product_name'];

                      echo $product_name;

                    ?>
                  </td>
                  <td>
                    <?php
                    
                      $get_customer = "select * from customer where customer_id='$customer_id'";

                      $run_customer = mysqli_query($conn,$get_customer);

                      $row_customer = mysqli_fetch_array($run_customer);

                      $customer_name = $row_customer['customer_name'];

                      echo $customer_name;


                    ?>
                  </td>
                  <td><?php echo $due_amount; ?></td>
                  <td><?php echo $invoice_no; ?></td>
                  <td><?php echo $qty; ?></td>
                  <td><?php echo $size; ?></td>
                  <td><?php echo $order_date; ?></td>
                  <td><?php echo $order_status; ?></td>
                </tr>

                <?php
                
                  }

                ?>

              </tbody>

            </table>

          </div><!-- table-responsive Finish -->

        </div><!-- panel-body Finish -->

      </div><!-- panel Finish -->

    </div><!-- col-lg-12 Finish -->

  </div><!-- row Finish -->

<?php

  }

?>