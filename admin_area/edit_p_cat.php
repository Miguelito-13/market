<?php 

  if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

  }else{

    if(isset($_GET['edit_p_cat'])){

      $edit_p_cat_id = $_GET['edit_p_cat'];

      $get_p_cat = "select * from product_categories where p_cat_id='$edit_p_cat_id'";

      $run_edit = mysqli_query($conn,$get_p_cat);

      $row_edit = mysqli_fetch_array($run_edit);

      $p_cat_id = $row_edit['p_cat_id'];

      $p_cat_name = $row_edit['p_cat_name'];

      $p_cat_desc = $row_edit['p_cat_desc'];

    }
    
?>

<div class="row"><!-- row Start -->

  <div class="col-lg-12"><!-- col-lg-12 Start -->

    <ol class="breadcrumb">

      <li>

        <i class="fa fa-dashboard"></i> Dashboard / Edit Product Category

      </li>

    </ol>

  </div><!-- col-lg-12 Finish -->

</div><!-- row Finish -->

<div class="row"><!-- row Start -->

  <div class="col-lg-12"><!-- col-lg-12 Start -->

    <div class="panel panel-default"><!-- panel Start -->

      <div class="panel-heading"><!-- panel-heading Start -->

        <h3 class="panel-title">

          <i class="fa fa-money fa-fw"></i> Edit Product Category

        </h3>

      </div><!-- panel-heading Finish -->

      <div class="panel-body"><!-- panel-body Start -->

        <form action="" class="form-horizontal" method="post">

          <div class="form-group"><!-- form-group Start -->

            <label for="" class="control-label col-md-3"> Product Category Name </label>

            <div class="col-md-6"><!-- col-md-6 Start -->

              <input name="p_cat_name" type="text" class="form-control" value="<?php echo $p_cat_name; ?>">

            </div><!-- col-md-6 Finish -->

          </div><!-- form-group Finish -->

          <div class="form-group"><!-- form-group Start -->

            <label for="" class="control-label col-md-3"> Product Category Description </label>

            <div class="col-md-6"><!-- col-md-6 Start -->

              <textarea type='text' name="p_cat_desc" id="" cols="30" rows="10" class="form-control"><?php echo $p_cat_desc; ?></textarea>

            </div><!-- col-md-6 Finish -->

          </div><!-- form-group Finish -->

          <div class="form-group"><!-- form-group Start -->

            <label for="" class="control-label col-md-3"> </label>

            <div class="col-md-6"><!-- col-md-6 Start -->

              <input value="Edit Product Category" name="update" type="submit" class="form-control btn btn-primary">

            </div><!-- col-md-6 Finish -->

          </div><!-- form-group Finish -->

        </form>

      </div><!-- panel-body Finish -->

    </div><!-- panel Finish -->

  </div><!-- col-lg-12 Finish -->

</div><!-- row Finish -->

<?php 

    if(isset($_POST['update'])){

      $p_cat_name = $_POST['p_cat_name'];
      
      $p_cat_desc = $_POST['p_cat_desc'];

      $update_p_cat = "update product_categories set p_cat_name='$p_cat_name', p_cat_desc='$p_cat_desc' where p_cat_id='$p_cat_id'";

      $run_p_cat = mysqli_query($conn,$update_p_cat);

      if($run_p_cat){

        echo "<script>alert('Product Category has been Updated!')</script>";

        echo "<script>window.open('index.php?view_p_cats','_self')</script>";

      }
      
    }

  }

?>