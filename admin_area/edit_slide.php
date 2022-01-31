<?php 

  if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

  }else{

    if(isset($_GET['edit_slide'])){

      $edit_carousel_id = $_GET['edit_slide'];

      $get_carousel = "select * from carousel where carousel_id='$edit_carousel_id'";

      $run_edit = mysqli_query($conn,$get_carousel);

      $row_edit = mysqli_fetch_array($run_edit);

      $carousel_id = $row_edit['carousel_id'];

      $carousel_name = $row_edit['carousel_name'];

      $carousel_img = $row_edit['carousel_img'];

    }
    
?>

<div class="row"><!-- row Start -->

  <div class="col-lg-12"><!-- col-lg-12 Start -->

    <ol class="breadcrumb">

      <li>

        <i class="fa fa-dashboard"></i> Dashboard / Edit Slide

      </li>

    </ol>

  </div><!-- col-lg-12 Finish -->

</div><!-- row Finish -->

<div class="row"><!-- row Start -->

  <div class="col-lg-12"><!-- col-lg-12 Start -->

    <div class="panel panel-default"><!-- panel Start -->

      <div class="panel-heading"><!-- panel-heading Start -->

        <h3 class="panel-title">

          <i class="fa fa-money fa-fw"></i> Edit Slide

        </h3>

      </div><!-- panel-heading Finish -->

      <div class="panel-body"><!-- panel-body Start -->

        <form action="" class="form-horizontal" method="post">

          <div class="form-group"><!-- form-group Start -->

            <label for="" class="control-label col-md-3"> Slide Name </label>

            <div class="col-md-6"><!-- col-md-6 Start -->

              <input name="carousel_name" type="text" class="form-control" value="<?php echo $carousel_name; ?>">

            </div><!-- col-md-6 Finish -->

          </div><!-- form-group Finish -->

          <div class="form-group"><!-- form-group Begin -->
                       
              <label class="col-md-3 control-label"> Slide Image </label> 
                      
                <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                  <input name="carousel_img" type="file" class="form-control" required>
                  
                  <img src="slides_images/<?php echo $carousel_img; ?>" alt="<?php echo $carousel_img; ?>" width="400" height="200">
                          
                </div><!-- col-md-6 Finish -->
                       
            </div><!-- form-group Finish -->     

          <div class="form-group"><!-- form-group Start -->

            <label for="" class="control-label col-md-3"> </label>

            <div class="col-md-6"><!-- col-md-6 Start -->

              <input value="Edit Slide" name="update" type="submit" class="form-control btn btn-primary">

            </div><!-- col-md-6 Finish -->

          </div><!-- form-group Finish -->

        </form>

      </div><!-- panel-body Finish -->

    </div><!-- panel Finish -->

  </div><!-- col-lg-12 Finish -->

</div><!-- row Finish -->

<?php 

    if(isset($_POST['update'])){

      $carousel_name = $_POST['carousel_name'];
      
      $carousel_img = $_POST['carousel_img'];

      $temp_name = $_FILES['carousel_img']['tmp_name'];
      
      move_uploaded_file($temp_name,"slides_images/$carousel_img");

      $update_carousel = "update carousel set carousel_name='$carousel_name', carousel_img='$carousel_img' where carousel_id='$carousel_id'";

      $run_carousel = mysqli_query($conn,$update_carousel);

      if($run_carousel){

        echo "<script>alert('Slide has been Updated!')</script>";

        echo "<script>window.open('index.php?view_slides','_self')</script>";

      }
      
    }

  }

?>