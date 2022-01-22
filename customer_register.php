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
                  <option disabled selected>Please choose</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Others</option>
                </select>

              </div><!-- form-group Finish -->

              <div class="form-group"><!-- form-group Start -->

                <label>Age </label>
                <input type="int" class="form-control" name="c_age" required>

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

                <button type="submit" name="register" class="btn btn-primary">
                  <i class="fa fa-user-md"></i> Register
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

<?php 

  if(isset($_POST['register'])){

    $c_name = $_POST['c_name'];

    $c_email = $_POST['c_email'];

    $c_pass = $_POST['c_pass'];

    $c_gender = $_POST['c_gender'];

    $c_age = $_POST['c_age'];
    
    $c_city = $_POST['c_city'];

    $c_address = $_POST['c_address'];

    $c_zip = $_POST['c_zip'];

    $c_contact = $_POST['c_contact'];

    $c_image = $_FILES['c_image']['name'];

    $c_image_tmp = $_FILES['c_image']['tmp_name'];

    $c_ip = getRealIpUser();

    move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");

    $insert_customer = "insert into customer (customer_name,customer_email,customer_pass,customer_gender,customer_age,customer_city,customer_address,customer_zip,customer_contact,customer_image,customer_ip) 
    values ('$c_name','$c_email','$c_pass','$c_gender','$c_age','$c_city','$c_address','$c_zip','$c_contact','$c_image','$c_ip')";

    $run_customer = mysqli_query($conn,$insert_customer);

    $sel_cart = "select * from cart where ip_add='$c_ip'";

    $run_cart = mysqli_query($conn,$sel_cart);

    $check_cart = mysqli_num_rows($run_cart);

    if($check_cart>0){

      $_SESSION['customer_email'] = $c_email;

      echo "<script>alert('Account Registered Successfully')</script>";
      echo "<script>window.open('index.php','_self')</script>";

    }

  }

?>