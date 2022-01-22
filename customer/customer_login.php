<div class="box"><!-- box Start -->

  <div class="box-header"><!-- box-header Start -->

    <center>

      <h1> Login account </h1>

      <p class="lead">Already have an account?</p>

      <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia earum voluptates distinctio quas magni repudiandae excepturi id cumque totam, laboriosam quae consequuntur quisquam aliquam aperiam, aspernatur debitis iste saepe soluta!</p>

    </center>

  </div><!-- box-header Finish -->

  <form method="post" action="checkout.php">

    <div class="form-group"><!-- form-group Start -->

      <label> Email </label>

      <input name="c_email" type="text" class="form-control" required>

    </div><!-- form-group Finish -->

    <div class="form-group"><!-- form-group Start -->

      <label> Password </label>

      <input name="c_pass" type="text" class="form-control" required>

    </div><!-- form-group Finish -->

    <div class="text-center"><!-- text-center Start -->

      <button name="login" value="Login" class="btn btn-primary">

        <i class="fa fa-sign-in"></i> Login

      </button>

    </div><!-- text-center Finish -->

  </form>

    <a href="customer_register.php">

      <h4> Create new account </h4>

    </a>

</div><!-- box Finish -->

<?php 

  if(isset($_POST['login'])){

    $customer_email = $_POST['c_email'];

    $customer_pass = $_POST['c_pass'];

    $select_customer = "select * from customer where customer_email='$customer_email' AND customer_pass='$customer_pass'";

    $run_customer = mysqli_query($conn,$select_customer);

    $get_ip = getRealIpUser();

    $check_customer = mysqli_num_rows($run_customer);

    $select_cart = "select * from cart where ip_add='$get_ip'";

    $run_cart = mysqli_query($conn,$select_cart);

    $check_cart = mysqli_num_rows($run_cart);

    if($check_customer==0){

      echo "<script>alert('Your email or password is wrong')</script>";

      exit();

    }

    if($check_customer==1 AND $check_cart==0){

      $_SESSION['customer_email'] = $customer_email;

      echo "<script>alert('Logged in successfully')</script>";
      echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";

    }else{

      $_SESSION['customer_email'] = $customer_email;

      echo "<script>alert('Logged in successfully')</script>";
      echo "<script>window.open('checkout.php','_self')</script>";

    }

  }

?>