<?php 

  if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

  }else{

?>

<div class="row"><!-- row Start -->

  <div class="col-lg-12"><!-- col-lg-12 Start -->

    <ol class="breadcrumb">

      <li>

        <i class="fa fa-dashboard"></i> Dashboard / View Slides

      </li>

    </ol>

  </div><!-- col-lg-12 Finish -->

</div><!-- row Finish -->

<div class="row"><!-- row Start -->

  <div class="col-lg-12"><!-- col-lg-12 Start -->

    <div class="panel panel-default"><!-- panel Start -->

      <div class="panel-heading"><!-- panel-heading Start -->

        <h3 class="panel-title">

          <i class="fa fa-gear fa-fw"></i> View Slides

        </h3>

      </div><!-- panel-heading Finish -->

      <div class="panel-body"><!-- panel-body Start -->

        <div class="table-responsive"><!-- table-responsive Start -->

          <table class="table table-hover table-striped table-bordered">

            <thead>
              <tr>
                <th>Slide ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Edit Category</th>
                <th>Delete Category</th>
              </tr>
            </thead>

            <tbody>

              <?php
              
                $i = 0;

                $get_slides = "select * from carousel";

                $run_slides = mysqli_query($conn,$get_slides);

                while($row_slides=mysqli_fetch_array($run_slides)){

                  $carousel_id = $row_slides['carousel_id'];

                  $carousel_name = $row_slides['carousel_name'];

                  $carousel_img = $row_slides['carousel_img'];

                  $i++;

              ?>

              <tr>
                <td><?php echo $carousel_id; ?></td>
                <td><?php echo $carousel_name; ?></td>
                <td><img class="img-responsive" src="slides_images/<?php echo $carousel_img; ?>" alt="<?php echo $carousel_img; ?>"></td>
                <td>
                  <a href="index.php?edit_slide=<?php echo $carousel_id; ?>">
                    <i class="fa fa-pencil"></i> Edit
                  </a>
                </td>
                <td>
                  <a href="index.php?delete_slide=<?php echo $carousel_id ?>">
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