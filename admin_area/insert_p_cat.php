<?php 

  if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

  }else{

?>

<div class="row"><!-- row Start -->

  <div class="col-lg-12"><!-- col-lg-12 Start -->

    <ol class="breadcrumb">

      <li>

        <i class="fa fa-dashboard"></i> Dashboard / Insert Product Category

      </li>

    </ol>

  </div><!-- col-lg-12 Finish -->

</div><!-- row Finish -->

<div class="row"><!-- row Start -->

  <div class="col-lg-12"><!-- col-lg-12 Start -->

    <div class="panel panel-default"><!-- panel Start -->

      <div class="panel-heading"><!-- panel-heading Start -->

        <h3 class="panel-title">

          <i class="fa fa-money fa-fw"></i> Insert Product Category

        </h3>

      </div><!-- panel-heading Finish -->

      <div class="panel-body"><!-- panel-body Start -->

        <form action="" class="form-horizontal" method="post">

          <div class="form-group"><!-- form-group Start -->

            <label for="" class="control-label col-md-3"> Product Category Name </label>

            <div class="col-md-6"><!-- col-md-6 Start -->

              <input name="p_cat_name" type="text" class="form-control">

            </div><!-- col-md-6 Finish -->

          </div><!-- form-group Finish -->

          <div class="form-group"><!-- form-group Start -->

            <label for="" class="control-label col-md-3"> Product Category Description </label>

            <div class="col-md-6"><!-- col-md-6 Start -->

              <textarea type='text' name="p_cat_desc" id="" cols="30" rows="10" class="form-control"></textarea>

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

      $p_cat_name = $_POST['p_cat_name'];
      
      $p_cat_desc = $_POST['p_cat_desc'];

      $insert_p_cat = "insert into dlpp_product_categories (p_cat_name, p_cat_desc) values ('$p_cat_name','$p_cat_desc') ";

      $run_p_cat = mysqli_query($conn,$insert_p_cat);

      if($run_p_cat){

        echo "<script>alert('Product Category has been added!')</script>";

        echo "<script>window.open('index.php?view_p_cats','_self')</script>";

      }
      
    }

  }

?>