<?php 

  if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

  }else{

?>

  <div class="row"><!-- row Start -->

    <div class="col-lg-12"><!-- col-lg-12 Start -->

      <ol class="breadcrumb">

        <li class="active">

          <i class="fa fa-dashboard"></i> Dashboard / View Users

        </li>

      </ol>

    </div><!-- col-lg-12 Finish -->

  </div><!-- row Finish -->

  <div class="row"><!-- row Start -->

    <div class="col-lg-12"><!-- col-lg-12 Start -->

      <div class="panel panel-default"><!-- panel Start -->

        <div class="panel-heading"><!-- panel-heading Start -->

          <h3 class="panel-title">

            <i class="fa fa-users"></i> View Users

          </h3>

        </div><!-- panel-heading Finish -->

        <div class="panel-body"><!-- panel-body Start -->

          <div class="table-responsive"><!-- table-responsive Start -->

            <table class="table table-striped table-bordered table-hover">

              <thead>
                <tr>
                  <th> User Admin ID: </th>
                  <th> Admin Name: </th>
                  <th> Admin Email: </th>
                  <th> Image: </th>
                </tr>
              </thead>

              <tbody>
                
                <?php 

                  $i = 0;
                
                  $get_admin = "select * from admins";

                  $run_admin = mysqli_query($conn,$get_admin);

                  while($row_admin=mysqli_fetch_array($run_admin)){
                    
                    $admin_id = $row_admin['admin_id'];

                    $admin_name = $row_admin['admin_name'];

                    $admin_email = $row_admin['admin_email'];

                    $admin_image = $row_admin['admin_image'];
                    
                    $i++;
                
                ?>

                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $admin_name; ?></td>
                  <td><?php echo $admin_email; ?></td>
                  <td><img src="admin_images/<?php echo $admin_image; ?>" width="60" height="60"></td>
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