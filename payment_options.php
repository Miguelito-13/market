<div class="box"><!-- box Start -->

  <?php 
  
    $session_email = $_SESSION['customer_email'];

    $select_customer = "select * from customer where customer_email='$session_email'";

    $run_customer = mysqli_query($conn,$select_customer);

    $row_customer = mysqli_fetch_array($run_customer);

    $customer_id = $row_customer['customer_id'];


  
  ?>

  <h1 class="text-center">Payment Options</h1>

  <p class="lead text-center">

    <a href="order.php?c_id=<?php echo $customer_id ?>"> Cash on Delivery </a>

  </p>


  <center>

    <p class="lead">

      <a href="#">

        Paypal

        <img src="images/paypal_img.png" alt="img-paypal" class="img-responsive">

      </a>

    </p>

  </center>

</div><!-- box Finish -->