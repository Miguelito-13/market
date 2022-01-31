<?php 

  if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

  }else{

?>

<div class="row"><!-- row Start -->

  <div class="col-lg-12"><!-- col-lg-12 Start -->

    <h1 class="page-header"><i class="fa fa-dashboard"></i> Dashboard</h1>

  </div><!-- col-lg-12 Finish -->

</div><!-- row Finish -->

<div class="row"><!-- row Start -->

  <div class="col-lg-3 col-md-6"><!-- col-lg-3 Start -->

    <div class="panel panel-primary"><!-- panel Start -->

      <div class="panel-heading"><!-- panel-heading Start -->

        <div class="row"><!-- row Start -->

          <div class="col-xs-3"><!-- col-xs-3 Start -->

            <i class="fa fa-tasks fa-5x"></i>
        
          </div><!-- col-xs-3 Finish -->

          <div class="col-xs-9 text-right"><!-- col-xs-9 Start -->

            <div class="huge"><!-- huge Start -->

              <?php echo $count_products; ?>

            </div><!-- huge Finish -->

              <div> Products </div>

          </div><!-- col-xs-9 Finish -->

        </div><!-- row Finish -->

      </div><!-- panel-heading Finish -->

      <a href="index.php?view_products">
        <div class="panel-footer"><!-- panel-footer Start -->
          <span class="pull-left">
             View Details 
          </span>

          <span class="pull-right"> 
            <i class="fa fa-arrow-circle-right"></i> 
          </span>

          <div class="clearfix"></div>
        </div><!-- panel-footer Finish -->
      </a>

    </div><!-- panel Finish -->

  </div><!-- col-lg-3 Finish -->

  <div class="col-lg-3 col-md-6"><!-- col-lg-3 Start -->

    <div class="panel panel-green"><!-- panel Start -->

      <div class="panel-heading"><!-- panel-heading Start -->

        <div class="row"><!-- row Start -->

          <div class="col-xs-3"><!-- col-xs-3 Start -->

            <i class="fa fa-users fa-5x"></i>
        
          </div><!-- col-xs-3 Finish -->

          <div class="col-xs-9 text-right"><!-- col-xs-9 Start -->

            <div class="huge"><!-- huge Start -->

              <?php echo $count_customers; ?>

            </div><!-- huge Finish -->

            <div> Customers </div>

          </div><!-- col-xs-9 Finish -->

        </div><!-- row Finish -->

      </div><!-- panel-heading Finish -->

      <a href="index.php?view_customers">
        <div class="panel-footer"><!-- panel-footer Start -->
          <span class="pull-left">
             View Details 
          </span>
          
          <span class="pull-right"> 
            <i class="fa fa-arrow-circle-right"></i> 
          </span>

          <div class="clearfix"></div>
        </div><!-- panel-footer Finish -->
      </a>

    </div><!-- panel Finish -->

  </div><!-- col-lg-3 Finish -->

  <div class="col-lg-3 col-md-6"><!-- col-lg-3 Start -->

    <div class="panel panel-orange"><!-- panel Start -->

      <div class="panel-heading"><!-- panel-heading Start -->

        <div class="row"><!-- row Start -->

          <div class="col-xs-3"><!-- col-xs-3 Start -->

            <i class="fa fa-tags fa-5x"></i>
        
          </div><!-- col-xs-3 Finish -->

          <div class="col-xs-9 text-right"><!-- col-xs-9 Start -->

            <div class="huge"><!-- huge Start -->

              <?php echo $count_p_cats; ?>

            </div><!-- huge Finish -->

            <div> Product Categories </div>

          </div><!-- col-xs-9 Finish -->

        </div><!-- row Finish -->

      </div><!-- panel-heading Finish -->

      <a href="index.php?view_p_cats">
        <div class="panel-footer"><!-- panel-footer Start -->
          <span class="pull-left">
             View Details 
          </span>
          
          <span class="pull-right"> 
            <i class="fa fa-arrow-circle-right"></i> 
          </span>

          <div class="clearfix"></div>
        </div><!-- panel-footer Finish -->
      </a>

    </div><!-- panel Finish -->

  </div><!-- col-lg-3 Finish -->

  <div class="col-lg-3 col-md-6"><!-- col-lg-3 Start -->

    <div class="panel panel-red"><!-- panel Start -->

      <div class="panel-heading"><!-- panel-heading Start -->

        <div class="row"><!-- row Start -->

          <div class="col-xs-3"><!-- col-xs-3 Start -->

            <i class="fa fa-shopping-cart fa-5x"></i>
        
          </div><!-- col-xs-3 Finish -->

          <div class="col-xs-9 text-right"><!-- col-xs-9 Start -->

            <div class="huge"><!-- huge Start -->

              <?php echo $count_pending_orders; ?>

            </div><!-- huge Finish -->

            <div> Orders </div>

          </div><!-- col-xs-9 Finish -->

        </div><!-- row Finish -->

      </div><!-- panel-heading Finish -->

      <a href="index.php?view_orders">
        <div class="panel-footer"><!-- panel-footer Start -->
          <span class="pull-left">
             View Details 
          </span>
          
          <span class="pull-right"> 
            <i class="fa fa-arrow-circle-right"></i> 
          </span>

          <div class="clearfix"></div>
        </div><!-- panel-footer Finish -->
      </a>

    </div><!-- panel Finish -->

  </div><!-- col-lg-3 Finish -->

</div><!-- row Finish -->

<div class="row"><!-- row Start -->

  <div class="col-lg-8"><!-- col-lg-8 Start -->

    <div class="panel panel-primary"><!-- panel Start -->

      <div class="panel-heading"><!-- panel-heading Start -->

        <h3 class="panel-title">
          <i class="fa fa-money fa-fw"></i> New Orders
        </h3>

      </div><!-- panel-heading Finish -->

      <div class="panel-body"><!-- panel-body Start -->

        <div class="table-responsive"><!-- table-responsive Start -->

          <table class="table table-hover table-striped table-bordered">

            <thead>
              <tr>
                <th>Order no:</th>
                <th>Customer email:</th>
                <th>Invoice no:</th>
                <th>Product ID:</th>
                <th>Product qty:</th>
                <th>Product size:</th>
                <th>Status:</th>
              </tr>
            </thead>

            <tbody>

              <?php 
              
                $i=0;

                $get_order = "select * from pending_orders order by 1 LIMIT 0,5";

                $run_order = mysqli_query($conn,$get_order);

                while($row_order=mysqli_fetch_array($run_order)){

                  $order_id = $row_order['order_id'];

                  $c_id = $row_order['customer_id'];

                  $invoice_no = $row_order['invoice_no'];

                  $product_id = $row_order['product_id'];

                  $qty = $row_order['qty'];

                  $size = $row_order['size'];

                  $order_status = $row_order['order_status'];

                  $i++;
              
              ?>

              <tr>
                <td><?php echo $order_id; ?></td>
                <td>
                  
                  <?php  
                  
                    $get_customer = "select * from customer where customer_id='$c_id'";

                    $run_customer = mysqli_query($conn,$get_customer);

                    $row_customer = mysqli_fetch_array($run_customer);

                    $customer_email = $row_customer['customer_email'];

                    echo $customer_email;

                  ?>

                </td>
                <td><?php echo $invoice_no; ?></td>
                <td><?php echo $order_id; ?></td>
                <td><?php echo $qty; ?></td>
                <td><?php echo $size; ?></td>
                <td><?php echo $order_status; ?></td>
              </tr>

              <?php 
              
                }

              ?>

            </tbody>

          </table>

        </div><!-- table-responsive Finish -->

        <div class="text-right"><!-- text-right Start -->

          <a href="index.php?view_orders">
            View All Orders <i class="fa fa-arrow-circle-right"></i>
          </a>

        </div><!-- text-right Finish -->

      </div><!-- panel-body Finish -->

    </div><!-- panel Finish -->

  </div><!-- col-lg-8 Finish -->

  <div class="col-md-4"><!-- col-md-4 Start -->

    <div class="panel"><!-- panel Start -->

      <div class="panel-body"><!-- panel-body Start -->

        <div class="mb-md thumb-info"><!-- mb-md Start -->

          <img src="admin_images/<?php echo $admin_image; ?>" alt="admin-thumb-info" class="rounded img-responsive">

          <div class="thumb-info-title"><!-- thumb-info-title Start -->

            <span class="thumb-info-inner"> <?php echo $admin_name ?> </span>
            <span class="thumb-info-type"> Administrator </span>

          </div><!-- thumb-info-title Finish -->

        </div><!-- mb-md Finish -->

      </div><!-- panel-body Finish -->

    </div><!-- panel Finish -->

  </div><!-- col-md-4 Finish -->

</div><!-- row Finish -->

<?php 

  }

?>