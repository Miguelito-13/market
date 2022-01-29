<?php 

  if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

  }else{

?>

  <div class="row"><!-- row Start -->

    <div class="col-lg-12"><!-- col-lg-12 Start -->

      <ol class="breadcrumb">

        <li class="active">

          <i class="fa fa-dashboard"></i> Dashboard / View Products

        </li>

      </ol>

    </div><!-- col-lg-12 Finish -->

  </div><!-- row Finish -->

  <div class="row"><!-- row Start -->

    <div class="col-lg-12"><!-- col-lg-12 Start -->

      <div class="panel panel-default"><!-- panel Start -->

        <div class="panel-heading"><!-- panel-heading Start -->

          <h3 class="panel-title">

            <i class="fa fa-tags"></i> View products

          </h3>

        </div><!-- panel-heading Finish -->

        <div class="panel-body"><!-- panel-body Start -->

          <div class="table-responsive"><!-- table-responsive Start -->

            <table class="table table-striped table-bordered table-hover">

              <thead>
                <tr>
                  <th> Product ID: </th>
                  <th> Product Name: </th>
                  <th> Product Image: </th>
                  <th> Product Price: </th>
                  <th> Product Sold: </th>
                  <th> Product Keywords: </th>
                  <th> Product Date: </th>
                  <th> Product Edit: </th>
                  <th> Product Delete: </th>
                </tr>
              </thead>

              <tbody>
                
                <?php 

                  $i = 0;
                
                  $get_pro = "select * from products";

                  $run_pro = mysqli_query($conn,$get_pro);

                  while($row_pro=mysqli_fetch_array($run_pro)){
                    
                    $pro_id = $row_pro['product_id'];

                    $pro_name = $row_pro['product_name'];

                    $pro_img1 = $row_pro['product_img1'];

                    $pro_price = $row_pro['product_price'];

                    $pro_keywords = $row_pro['product_keywords'];

                    $pro_date = $row_pro['date'];

                    $i++;
                
                ?>

                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $pro_name; ?></td>
                  <td><img src="product_images/<?php echo $pro_img1; ?>" width="60" height="60"></td>
                  <td>P<?php echo $pro_price; ?></td>
                  <td>

                    <?php  
                    
                      $get_sold = "select * from pending_orders where product_id='$pro_id'";

                      $run_sold = mysqli_query($conn,$get_sold);

                      $count = mysqli_num_rows($run_sold);

                      echo $count;

                    ?>

                  </td>
                  <td><?php echo $pro_keywords; ?></td>
                  <td><?php echo $pro_date; ?></td
                  <td>
                    <a href="index.php?edit_product=<?php echo $pro_id; ?>">
                      <i class="fa fa-pencil"></i> Edit
                    </a> 
                  </td>
                  <td> 
                    <a href="index.php?delete_product=<?php echo $pro_id; ?>">
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