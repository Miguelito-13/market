<?php

  $active='Account';
  include("includes/header.php");

?>

  <div id="content"><!-- content Start -->

    <div class="container"><!-- container Start -->

      <div class="col-md-12"><!-- col-md-12 Start -->

        <ul class="breadcrumb">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            Register
          </li>
        </ul>

      </div><!-- col-md-12 Finish -->

      <div class="col-md-3"><!-- col-md-3 Start -->

        <?php
  
          include("includes/sidebar.php")

        ?>

      </div><!-- col-md-3 Finish -->

      <div class="col-md-9"><!-- col-md-9 Start -->

        <div class="box"><!-- box Start -->

          <div class="box-header"><!-- box-header Start -->

            <center>
              <h2> Register a new account </h2>
            </center>

            <form action="customer_register.php" method="POST" enctype="multipart/form-data">

              <div class="form-group"><!-- form-group Start -->

                <label>Name </label>
                <input type="text" class="form-control" name="c_name" required>

              </div><!-- form-group Finish -->

              <div class="form-group"><!-- form-group Start -->

                <label>Email </label>
                <input type="text" class="form-control" name="c_email" required>

              </div><!-- form-group Finish -->

              <div class="form-group"><!-- form-group Start -->

                <label>Password </label>
                <input type="password" class="form-control" name="c_pass" required>

              </div><!-- form-group Finish -->

              <div class="form-group"><!-- form-group Start -->

                <label>Gender </label>
                <select name="c_gender" id="" class="form-control" required>
                  <option>Please choose</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Others</option>
                </select>

              </div><!-- form-group Finish -->

              <div class="form-group"><!-- form-group Start -->

                <label>City </label>
                <input type="text" class="form-control" name="c_city" required>

              </div><!-- form-group Finish -->

              <div class="form-group"><!-- form-group Start -->

                <label>Complete Address </label>
                <input type="text" class="form-control" name="c_address" required>

              </div><!-- form-group Finish -->

              <div class="form-group"><!-- form-group Start -->

                <label>Zip Code </label>
                <input type="text" class="form-control" name="c_zip" required>

              </div><!-- form-group Finish -->

              <div class="form-group"><!-- form-group Start -->

                <label>Contact no. </label>
                <input type="text" class="form-control" name="c_contact" required>

              </div><!-- form-group Finish -->

              <div class="form-group"><!-- form-group Start -->

                <label>Profile Picture </label>
                <input type="file" class="form-control" name="c_image">

              </div><!-- form-group Finish -->

              <div class="text-center"><!-- text-center Start -->

                <button type="submit" name="submit" class="btn btn-primary">
                  <i class="fa fa-user-md"></i> Send Message
                </button>

              </div><!-- text-center Finish -->

            </form>

          </div><!-- box-header Finish -->

        </div><!-- box Finish -->

      </div><!-- col-md-9 Finish -->

    </div><!-- container Finish -->

  </div><!-- content Finish -->

  <?php
  
    include("includes/footer.php")

  ?>

  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>