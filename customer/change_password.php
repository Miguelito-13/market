<h1 align="center"> Change Password </h1>

<form action="" method="post" >

  <div class="form-group"><!-- form-group Start -->

    <label>Current Password: </label>

    <input type="text" class="form-control" name="old_pass" required>

  </div><!-- form-group Finish -->

  <div class="form-group"><!-- form-group Start -->

    <label>New Password: </label>

    <input type="text" class="form-control" name="new_pass" required>

  </div><!-- form-group Finish -->

  <div class="form-group"><!-- form-group Start -->

    <label>Confirm New Password: </label>
    <input type="text" class="form-control" name="c_new_pass_again" required>

  </div><!-- form-group Finish -->

  <div class="text-center"><!-- text-center Start -->

    <button type="submit" name="submit" class="btn btn-primary">
      <i class="fa fa-user-md"></i> Update password
    </button>

  </div><!-- text-center Finish -->

</form>

<?php 

  if(isset($_POST['submit'])){

    $c_email = $_SESSION['customer_email'];

    $c_old_pass = $_POST['old_pass'];

    $c_new_pass = $_POST['new_pass'];

    $c_new_pass_again = $_POST['c_new_pass_again'];

    $sel_c_old_pass = "select * from customer where customer_pass='$c_old_pass'";

    $run_c_old_pass = mysqli_query($conn,$sel_c_old_pass);

    $check_c_old_pass = mysqli_fetch_array($run_c_old_pass);

    if($check_c_old_pass==0){

      echo "<script>alert('The old password didn't match the existing one.')</script>";

      exit();

    }
    if($c_new_pass!=$c_new_pass_again){

      echo "<script>alert('The new password didn't match with each other.')</script>";

      exit();

    }

    $update_c_pass = "update customer set customer_pass='$c_new_pass' where customer_email='$c_email'";

    $run_c_pass = mysqli_query($conn,$update_c_pass);

    if($run_c_pass){

      echo "<script>alert('Your password has been updated.')</script>";

      echo "<script>window.open('my_account.php?my_orders','_self')</script>";

    }

  }

?>