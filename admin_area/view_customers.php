<?php 

  if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

  }else{

?>

  <div class="row"><!-- row Start -->

    <div class="col-lg-12"><!-- col-lg-12 Start -->

      <ol class="breadcrumb">

        <li class="active">

          <i class="fa fa-dashboard"></i> Dashboard / View Customers

        </li>

      </ol>

    </div><!-- col-lg-12 Finish -->

  </div><!-- row Finish -->

  <div class="row"><!-- row Start -->

    <div class="col-lg-12"><!-- col-lg-12 Start -->

      <div class="panel panel-default"><!-- panel Start -->

        <div class="panel-heading"><!-- panel-heading Start -->

          <h3 class="panel-title">

            <i class="fa fa-users"></i> View Customers

          </h3>

        </div><!-- panel-heading Finish -->

        <div class="panel-body"><!-- panel-body Start -->

          <div class="table-responsive"><!-- table-responsive Start -->

            <table class="table table-striped table-bordered table-hover">

              <thead>
                <tr>
                  <th> Customer ID: </th>
                  <th> Customer Name: </th>
                  <th> Image: </th>
                  <th> Customer Email: </th>
                  <th> Gender: </th>
                  <th> Age: </th>
                  <th> City: </th>
                  <th> Address: </th>
                  <th> ZIP Code: </th>
                  <th> Contact No.: </th>
                  <th> Pending Orders: </th>
                  <th> Compeleted Orders: </th>
                  <th> Delete Customer: </th>
                </tr>
              </thead>

              <tbody>
                
                <?php 

                  $i = 0;
                
                  $get_customer = "select * from customer";

                  $run_customer = mysqli_query($conn,$get_customer);

                  while($row_customer=mysqli_fetch_array($run_customer)){
                    
                    $customer_id = $row_customer['customer_id'];

                    $customer_name = $row_customer['customer_name'];

                    $customer_email = $row_customer['customer_email'];

                    $customer_gender = $row_customer['customer_gender'];

                    $customer_age = $row_customer['customer_age'];

                    $customer_city = $row_customer['customer_city'];

                    $customer_address = $row_customer['customer_address'];

                    $customer_zip = $row_customer['customer_zip'];

                    $customer_contact = $row_customer['customer_contact'];

                    $customer_image = $row_customer['customer_image'];

                    $i++;
                
                ?>

                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $customer_name; ?></td>
                  <td><img src="../customer/customer_images/<?php echo $customer_image; ?>" width="60" height="60"></td>
                  <td><?php echo $customer_email; ?></td>
                  <td><?php echo $customer_gender; ?></td>
                  <td><?php echo $customer_age; ?></td>
                  <td><?php echo $customer_city; ?></td>
                  <td width="300"><?php echo $customer_address; ?></td>
                  <td><?php echo $customer_zip; ?></td>
                  <td><?php echo $customer_contact; ?></td>
                  <td>
                    <?php 
                    
                      $get_orders = "select * from pending_orders where customer_id='$customer_id'";

                      $run_orders = mysqli_query($conn,$get_orders);

                      $get_pending_orders = "select * from pending_orders where customer_id='$customer_id' AND order_status='Pending'";

                      $run_pending_orders = mysqli_query($conn,$get_pending_orders);

                      $count_pending_orders = mysqli_num_rows($run_pending_orders);

                      echo $count_pending_orders;
                    
                    ?>
                  </td>   
                  <td>
                    <?php 
                    
                      $get_orders = "select * from pending_orders where customer_id='$customer_id'";

                      $run_orders = mysqli_query($conn,$get_orders);

                      $get_complete_orders = "select * from pending_orders where customer_id='$customer_id' AND order_status='Complete'";

                      $run_complete_orders = mysqli_query($conn,$get_complete_orders);

                      $count_complete_orders = mysqli_num_rows($run_complete_orders);

                      echo $count_complete_orders;
                    
                    ?>
                  </td>
                  <td>
                  <a href="index.php?delete_customer=<?php echo $customer_id; ?>">
                    <i class="fa fa-trash-o"></i> Delete
                  </a> 
                </td>
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