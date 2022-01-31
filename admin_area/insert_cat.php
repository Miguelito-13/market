<?php 

  if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

  }else{

?>

<div class="row"><!-- row Start -->

  <div class="col-lg-12"><!-- col-lg-12 Start -->

    <ol class="breadcrumb">

      <li>

        <i class="fa fa-dashboard"></i> Dashboard / Insert Category

      </li>

    </ol>

  </div><!-- col-lg-12 Finish -->

</div><!-- row Finish -->

<div class="row"><!-- row Start -->

  <div class="col-lg-12"><!-- col-lg-12 Start -->

    <div class="panel panel-default"><!-- panel Start -->

      <div class="panel-heading"><!-- panel-heading Start -->

        <h3 class="panel-title">

          <i class="fa fa-money fa-fw"></i> Insert Category

        </h3>

      </div><!-- panel-heading Finish -->

      <div class="panel-body"><!-- panel-body Start -->

        <form action="" class="form-horizontal" method="post">

          <div class="form-group"><!-- form-group Start -->

            <label for="" class="control-label col-md-3"> Category Name </label>

            <div class="col-md-6"><!-- col-md-6 Start -->

              <input name="cat_name" type="text" class="form-control">

            </div><!-- col-md-6 Finish -->

          </div><!-- form-group Finish -->

          <div class="form-group"><!-- form-group Start -->

            <label for="" class="control-label col-md-3"> Category Description </label>

            <div class="col-md-6"><!-- col-md-6 Start -->

              <textarea type='text' name="cat_desc" id="" cols="30" rows="10" class="form-control"></textarea>

            </div><!-- col-md-6 Finish -->

          </div><!-- form-group Finish -->

          <div class="form-group"><!-- form-group Start -->

            <label for="" class="control-label col-md-3"> </label>

            <div class="col-md-6"><!-- col-md-6 Start -->

              <input value="Submit" name="submit" type="submit" class="form-control btn btn-primary">

            </div><!-- col-md-6 Finish -->

          </div><!-- form-group Finish -->

        </form>

      </div><!-- panel-body Finish -->

    </div><!-- panel Finish -->

  </div><!-- col-lg-12 Finish -->

</div><!-- row Finish -->

<?php 

    if(isset($_POST['submit'])){

      $cat_name = $_POST['cat_name'];
      
      $cat_desc = $_POST['cat_desc'];

      $insert_cat = "insert into categories (cat_name, cat_desc) values ('$cat_name','$cat_desc') ";

      $run_cat = mysqli_query($conn,$insert_cat);

      if($run_cat){

        echo "<script>alert('Category has been added!')</script>";

        echo "<script>window.open('index.php?view_cats','_self')</script>";

      }
      
    }

  }

?>