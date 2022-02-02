<?php 

  if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

  }else{

    if(isset($_GET['delete_customer'])){

      $delete_customer_id = $_GET['delete_customer'];

      $delete_customer = "delete from dlpp_customer where customer_id='$delete_customer_id'";

      $run_delete = mysqli_query($conn,$delete_customer);

      if($run_delete){

        echo "<script>alert('Customer has been deleted.')</script>";

        echo "<script>window.open('index.php?view_customers','_self')</script>";

      }

    }

  }

?>
