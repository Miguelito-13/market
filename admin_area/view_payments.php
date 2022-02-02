<?php 

  if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

  }else{

?>

  <div class="row"><!-- row Start -->

    <div class="col-lg-12"><!-- col-lg-12 Start -->

      <ol class="breadcrumb">

        <li class="active">

          <i class="fa fa-dashboard"></i> Dashboard / View Payments

        </li>

      </ol>

    </div><!-- col-lg-12 Finish -->

  </div><!-- row Finish -->

  <div class="row"><!-- row Start -->

    <div class="col-lg-12"><!-- col-lg-12 Start -->

      <div class="panel panel-default"><!-- panel Start -->

        <div class="panel-heading"><!-- panel-heading Start -->

          <h3 class="panel-title">

            <i class="fa fa-money"></i> View Payments

          </h3>

        </div><!-- panel-heading Finish -->

        <div class="panel-body"><!-- panel-body Start -->

          <div class="table-responsive"><!-- table-responsive Start -->

            <table class="table table-striped table-bordered table-hover">

              <thead>
                <tr>
                  <th> Payment No.: </th>
                  <th> Invoice No.: </th>
                  <th> Customer Name: </th>
                  <th> Amount: </th>
                  <th> Payment Mode: </th>
                  <th> Reference No.: </th>
                  <th> Payment Date: </th>
                </tr>
              </thead>

              <tbody>
                
                <?php 

                  $i = 0;
                
                  $get_payments = "select * from dlpp_payments";

                  $run_payments = mysqli_query($conn,$get_payments);

                  while($row_payments=mysqli_fetch_array($run_payments)){
                    
                    $payment_no = $row_payments['payment_no'];

                    $invoice_no = $row_payments['invoice_no'];

                    $amount = $row_payments['amount'];

                    $payment_mode = $row_payments['payment_mode'];

                    $ref_no = $row_payments['ref_no'];

                    $payment_date = $row_payments['payment_date'];

                    $i++;
                
                ?>

                <tr>
                  <td><?php echo $payment_no; ?></td>
                  <td><?php echo $invoice_no; ?></td>
                  <td>
                    <?php 
                  
                      $get_customer_id = "select * from dlpp_pending_orders where invoice_no='$invoice_no'";

                      $run_customer_id = mysqli_query($conn,$get_customer_id);

                      $row_customer_id = mysqli_fetch_array($run_customer_id);

                      $customer_id = $row_customer_id['customer_id'];

                      $get_customer_name = "select * from dlpp_customer where customer_id='$customer_id'";

                      $run_customer_name = mysqli_query($conn,$get_customer_name);

                      $row_customer_name = mysqli_fetch_array($run_customer_name);

                      $customer_name = $row_customer_name['customer_name'];

                      echo $customer_name;

                    ?>
                  </td>
                  <td><?php echo $amount; ?></td>
                  <td><?php echo $payment_mode; ?></td>
                  <td><?php echo $ref_no; ?></td>
                  <td><?php echo $payment_date; ?></td>
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