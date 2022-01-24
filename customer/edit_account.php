<?php 

  $customer_session = $_SESSION['customer_email'];

  $get_customer = "select * from customer where customer_email='$customer_session'";

  $run_customer = mysqli_query($conn,$get_customer);

  $row_customer = mysqli_fetch_array($run_customer);

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

?>

<h1 align="center"> Edit your Account </h1>

<form action="" method="post" enctype="multipart/form-data">

  <div class="form-group"><!-- form-group Start -->

    <label> Customer Name: </label>

    <input type="text" class="form-control" name="c_name" value="<?php echo $customer_name; ?>" required>

  </div><!-- form-group Finish -->

  <div class="form-group"><!-- form-group Start -->

    <label> Customer Email: </label>

    <input type="text" class="form-control" name="c_email" value="<?php echo $customer_email; ?>" required>

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

    <label>Age </label>
    <input type="int" class="form-control" name="c_age" value="<?php echo $customer_age; ?>"required>

  </div><!-- form-group Finish -->

  <div class="form-group"><!-- form-group Start -->

    <label>City </label>
    <input type="text" class="form-control" name="c_city"  value="<?php echo $customer_city; ?>" required>

  </div><!-- form-group Finish -->

  <div class="form-group"><!-- form-group Start -->

    <label>Complete Address </label>
    <input type="text" class="form-control" name="c_address" value="<?php echo $customer_address; ?>" required>

  </div><!-- form-group Finish -->

  <div class="form-group"><!-- form-group Start -->

    <label>Zip Code </label>
    <input type="text" class="form-control" name="c_zip" value="<?php echo $customer_zip; ?>" required>

  </div><!-- form-group Finish -->

  <div class="form-group"><!-- form-group Start -->

    <label>Contact no. </label>
    <input type="text" class="form-control" name="c_contact" value="<?php echo $customer_contact; ?>" required>

  </div><!-- form-group Finish -->

  <div class="form-group"><!-- form-group Start -->

    <label>Profile Picture </label>
    <input type="file" class="form-control form-height-custom" name="c_image">
    <img class="img-responsive" src="customer_images/<?php echo $customer_image; ?>" alt="Customer Image">

  </div><!-- form-group Finish -->

  <div class="text-center"><!-- text-center Start -->

    <button name="update" class="btn btn-primary">
      <i class="fa fa-user-md"></i> Update account
    </button>

  </div><!-- text-center Finish -->

</form>

<?php

  if(isset($_POST['update'])){

    $update_id = $customer_id;

    $c_name = $_POST['c_name'];

    $c_email = $_POST['c_email'];

    $c_gender = $_POST['c_gender'];

    $c_age = $_POST['c_age'];

    $c_city = $_POST['c_city'];

    $c_address = $_POST['c_address'];

    $c_zip = $_POST['c_zip'];

    $c_contact = $_POST['c_contact'];

    $c_image = $_FILES['c_image']['name'];

    $c_image_temp = $_FILES['c_image']['tmp_name'];

    move_uploaded_file($c_image_temp,"customer_images/$c_image");

    $update_customer = "update customer set customer_name='$c_name',customer_email='$c_email',customer_gender='$c_gender',customer_age='$c_age',customer_city='$c_city',customer_address='$c_address',customer_zip='$c_zip',customer_contact='$c_contact',customer_image='$c_image' where customer_id='$update_id'";

    $run_customer = mysqli_query($conn,$update_customer);

    if($run_customer){

      echo "<script>alert('Your account has been updated.')</script>";

      echo "<script>window.open('logout.php','_self')</script>";

    }

  }

?>