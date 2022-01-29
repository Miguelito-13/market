<?php 

  if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

  }else{

?>

<div class="row"><!-- row Start -->

  <div class="col-lg-12"><!-- col-lg-12 Start -->

    <ol class="breadcrumb">

      <li>

        <i class="fa fa-dashboard"></i> Dashboard / View Product Category

      </li>

    </ol>

  </div><!-- col-lg-12 Finish -->

</div><!-- row Finish -->

<div class="row"><!-- row Start -->

  <div class="col-lg-12"><!-- col-lg-12 Start -->

    <div class="panel panel-default"><!-- panel Start -->

      <div class="panel-heading"><!-- panel-heading Start -->

        <h3 class="panel-title">

          <i class="fa fa-tags fa-fw"></i> View Product Category

        </h3>

      </div><!-- panel-heading Finish -->

      <div class="panel-body"><!-- panel-body Start -->

        <div class="table-responsive"><!-- table-responsive Start -->

          <table class="table table-hover table-striped table-bordered">

            <thead>
              <tr>
                <th>Product Category ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Edit Product Category</th>
                <th>Delete Product Category</th>
              </tr>
            </thead>

            <tbody>

              <?php
              
                $i = 0;

                $get_p_cats = "select * from product_categories";

                $run_p_cats = mysqli_query($conn,$get_p_cats);

                while($row_p_cats=mysqli_fetch_array($run_p_cats)){

                  $p_cat_id = $row_p_cats['p_cat_id'];

                  $p_cat_name = $row_p_cats['p_cat_name'];

                  $p_cat_desc = $row_p_cats['p_cat_desc'];

                  $i++;

              ?>

              <tr>
                <td><?php echo $p_cat_id; ?></td>
                <td><?php echo $p_cat_name; ?></td>
                <td width="300"><?php echo $p_cat_desc; ?></td>
                <td>
                  <a href="index.php?edit_p_cat=<?php echo $p_cat_id; ?>">
                    <i class="fa fa-pencil"></i> Edit
                  </a>
                </td>
                <td>
                  <a href="index.php?delete_p_cat=<?php echo $p_cat_id; ?>">
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