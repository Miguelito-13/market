<?php 

  if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

  }else{

?>

<div class="row"><!-- row Start -->

  <div class="col-lg-12"><!-- col-lg-12 Start -->

    <ol class="breadcrumb">

      <li>

        <i class="fa fa-dashboard"></i> Dashboard / View Category

      </li>

    </ol>

  </div><!-- col-lg-12 Finish -->

</div><!-- row Finish -->

<div class="row"><!-- row Start -->

  <div class="col-lg-12"><!-- col-lg-12 Start -->

    <div class="panel panel-default"><!-- panel Start -->

      <div class="panel-heading"><!-- panel-heading Start -->

        <h3 class="panel-title">

          <i class="fa fa-tags fa-fw"></i> View Category

        </h3>

      </div><!-- panel-heading Finish -->

      <div class="panel-body"><!-- panel-body Start -->

        <div class="table-responsive"><!-- table-responsive Start -->

          <table class="table table-hover table-striped table-bordered">

            <thead>
              <tr>
                <th>Category ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Edit Category</th>
                <th>Delete Category</th>
              </tr>
            </thead>

            <tbody>

              <?php
              
                $i = 0;

                $get_cats = "select * from categories";

                $run_cats = mysqli_query($conn,$get_cats);

                while($row_cats=mysqli_fetch_array($run_cats)){

                  $cat_id = $row_cats['cat_id'];

                  $cat_name = $row_cats['cat_name'];

                  $cat_desc = $row_cats['cat_desc'];

                  $i++;

              ?>

              <tr>
                <td><?php echo $cat_id; ?></td>
                <td><?php echo $cat_name; ?></td>
                <td width="300"><?php echo $cat_desc; ?></td>
                <td>
                  <a href="index.php?edit_cat=<?php echo $cat_id; ?>">
                    <i class="fa fa-pencil"></i> Edit
                  </a>
                </td>
                <td>
                  <a href="index.php?delete_cat=<?php echo $cat_id; ?>">
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