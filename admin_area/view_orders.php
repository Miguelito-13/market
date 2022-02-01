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

            <i class="fa fa-book"></i> Pending Orders

          </h3>

        </div><!-- panel-heading Finish -->

        <div class="panel-body"><!-- panel-body Start -->

          <div class="table-responsive"><!-- table-responsive Start -->

            <table class="table table-striped table-bordered table-hover">

              <thead>
                <tr>
                  <th width="90"> Order No.: </th>
                  <th> Product Name: </th>
                  <th> Customer Name: </th>
                  <th> Invoice No.: </th>
                  <th> Quantity: </th>
                  <th> Size: </th>
                  <th> Order Date: </th>
                  <th> Due Amount: </th>
                </tr>
              </thead>

              <tbody>
                
                <?php 

                  $i = 0;
                
                  $get_pending_orders = "select * from customer_orders where order_status='Pending'";

                  $run_pending_orders = mysqli_query($conn,$get_pending_orders);

                  while($row_pending_orders=mysqli_fetch_array($run_pending_orders)){
                    
                    $order_id = $row_pending_orders['order_id'];

                    $customer_id = $row_pending_orders['customer_id'];

                    $due_amount = $row_pending_orders['due_amount'];

                    $invoice_no = $row_pending_orders['invoice_no'];

                    $qty = $row_pending_orders['qty'];

                    $size = $row_pending_orders['size'];
                    
                    $order_date = $row_pending_orders['order_date'];

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
                  <td><?php echo $invoice_no; ?></td>
                  <td><?php echo $qty; ?></td>
                  <td><?php echo $size; ?></td>
                  <td><?php echo $order_date; ?></td>
                  <td><?php echo $due_amount; ?></td>
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

  <br/>
  <br/>

  <div class="row"><!-- row Start -->

    <div class="col-lg-12"><!-- col-lg-12 Start -->

      <div class="panel panel-default"><!-- panel Start -->

        <div class="panel-heading"><!-- panel-heading Start -->

          <h3 class="panel-title">

            <i class="fa fa-book"></i> Completed Orders

          </h3>

        </div><!-- panel-heading Finish -->

        <div class="panel-body"><!-- panel-body Start -->

          <div class="table-responsive"><!-- table-responsive Start -->

            <table class="table table-striped table-bordered table-hover">

              <thead>
                <tr>
                  <th width="90"> Order No.: </th>
                  <th> Product Name: </th>
                  <th> Customer Name: </th>
                  <th> Invoice No.: </th>
                  <th> Quantity: </th>
                  <th> Size: </th>
                  <th> Order Date: </th>
                  <th> Amount Paid: </th>
                </tr>
              </thead>

              <tbody>
                
                <?php 

                  $i = 0;

                  $total = 0;
                
                  $get_complete_orders = "select * from customer_orders where order_status='Complete'";

                  $run_complete_orders = mysqli_query($conn,$get_complete_orders);

                  while($row_complete_orders=mysqli_fetch_array($run_complete_orders)){
                    
                    $order_id = $row_complete_orders['order_id'];

                    $customer_id = $row_complete_orders['customer_id'];

                    $due_amount = $row_complete_orders['due_amount'];

                    $invoice_no = $row_complete_orders['invoice_no'];

                    $qty = $row_complete_orders['qty'];

                    $size = $row_complete_orders['size'];
                    
                    $order_date = $row_complete_orders['order_date'];

                    $total += $due_amount;

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
                  <td><?php echo $invoice_no; ?></td>
                  <td><?php echo $qty; ?></td>
                  <td><?php echo $size; ?></td>
                  <td><?php echo $order_date; ?></td>
                  <td><?php echo $due_amount; ?></td>
                </tr>

                <?php
                
                  }

                ?>

              </tbody>

              <tr>
                <th colspan="7">Total Profit</th>
                <th colspan="1">P<?php echo $total; ?></th>
              </tr>

            </table>

          </div><!-- table-responsive Finish -->

        </div><!-- panel-body Finish -->

      </div><!-- panel Finish -->

    </div><!-- col-lg-12 Finish -->

  </div><!-- row Finish -->

<?php

  }

?>