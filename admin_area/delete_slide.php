<?php 

  if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

  }else{

    if(isset($_GET['delete_slide'])){

      $delete_carousel_id = $_GET['delete_slide'];

      $delete_carousel = "delete from carousel where carousel_id='$delete_carousel_id'";

      $run_delete = mysqli_query($conn,$delete_carousel);

      if($run_delete){

        echo "<script>alert('Slide has been deleted.')</script>";

        echo "<script>window.open('index.php?view_slides','_self')</script>";

      }

    }

  }

?>
