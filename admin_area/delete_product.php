<?php 

  if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

  }else{

    if(isset($_GET['delete_product'])){

      $delete_id = $_GET['delete_product'];

      $delete_product = "delete from dlpp_products where product_id='$delete_id'";

      $run_delete = mysqli_query($conn,$delete_product);

      if($run_delete){

        echo "<script>alert('Product has been deleted.')</script>";

        echo "<script>window.open('index.php?view_products','_self')</script>";

      }

    }

  }

?>