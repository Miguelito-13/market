<?php

  include("includes/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Product</title>
  <link rel="stylesheet" href="css/bootstrap-337.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
  
  <div class="row"><!-- row Start -->

    <div class="col-lg-12"><!-- col-lg-12 Start -->

      <ol class="breadcrumb">

        <li class="active">

          <i class="fa fa-dashboard"> Dashboard

          </i>

        </li>

      </ol>

    </div><!-- col-lg-12 Finish -->

  </div><!-- row Finish -->

  <div class="row"><!-- row Start -->

    <div class="col-lg-12"><!-- col-lg-12 Start -->

      <div class="panel panel-default"><!-- panel Start -->

        <h3 class="panel-heading"><!-- panel-heading Start -->

          <div class="panel-title"><!-- panel-title Start -->

            <i class="fa fa-money fa-fw"></i> Insert Product

          </div><!-- panel-title Finish -->

        </h3><!-- panel-heading Finish -->

        <div class="panel-body"><!-- panel-body Start -->

          <form method="post" class="form-horizontal" enctype="multipart/form-data">

            <div class="form-group"><!-- form-group Start -->

              <label class="col-md-3 control-label"> Product Name </label>

              <div class="col-md-6"><!-- col-md-6 Start -->

                <input name="product_name" type="text" class="form-control" required>

              </div><!-- col-md-6 Finish -->

            </div><!-- form-group Finish -->

            <div class="form-group"><!-- form-group Start -->

              <label class="col-md-3 control-label"> Product Category </label>

              <div class="col-md-6"><!-- col-md-6 Start -->

                <select name="product_cat" class="form-control">

                  <option> Select a Product Category</option>

                  <?php
                  
                    $get_p_cats = "select * from product_categories";
                    $run_p_cats = mysqli_query($conn,$get_p_cats);

                    while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                      $p_cat_id = $row_p_cats['p_cat_id'];
                      $p_cat_name = $row_p_cats['p_cat_name'];

                      echo "
                      
                      <option value='$p_cat_id'>$p_cat_name</option>
                      
                      ";
                    }
                  
                  ?>

                </select>

              </div><!-- col-md-6 Finish -->

            </div><!-- form-group Finish -->

            <div class="form-group"><!-- form-group Start -->

              <label class="col-md-3 control-label"> Category </label>

              <div class="col-md-6"><!-- col-md-6 Start -->

                <select name="product_cat" class="form-control">

                  <option> Select a Category</option>

                  <?php
                  
                    $get_cat = "select * from categories";
                    $run_cat = mysqli_query($conn,$get_cat);

                    while($row_cat=mysqli_fetch_array($run_cat)){
                      $cat_id = $row_cat['cat_id'];
                      $cat_name = $row_cat['cat_name'];

                      echo "
                      
                      <option value='$cat_id'>$cat_name</option>
                      
                      ";
                    }
                  
                  ?>

                </select>

              </div><!-- col-md-6 Finish -->

            </div><!-- form-group Finish -->

            <div class="form-group"><!-- form-group Start -->

              <label class="col-md-3 control-label"> Product Image 1 </label>

              <div class="col-md-6"><!-- col-md-6 Start -->

                <input name="product_img1" type="file" class="form-control" required>

              </div><!-- col-md-6 Finish -->

            </div><!-- form-group Finish -->

            <div class="form-group"><!-- form-group Start -->

              <label class="col-md-3 control-label"> Product Image 2 </label>

              <div class="col-md-6"><!-- col-md-6 Start -->

                <input name="product_img2" type="file" class="form-control" required>

              </div><!-- col-md-6 Finish -->

            </div><!-- form-group Finish -->

            <div class="form-group"><!-- form-group Start -->

              <label class="col-md-3 control-label"> Product Image 3 </label>

              <div class="col-md-6"><!-- col-md-6 Start -->

                <input name="product_img3" type="file" class="form-control" required>

              </div><!-- col-md-6 Finish -->

            </div><!-- form-group Finish -->

            <div class="form-group"><!-- form-group Start -->

              <label class="col-md-3 control-label"> Product Price </label>

              <div class="col-md-6"><!-- col-md-6 Start -->

                <input name="product_price" type="text" class="form-control" required>

              </div><!-- col-md-6 Finish -->

            </div><!-- form-group Finish -->

            <div class="form-group"><!-- form-group Start -->

              <label class="col-md-3 control-label"> Product Keywords </label>

              <div class="col-md-6"><!-- col-md-6 Start -->

                <input name="product_keywords" type="text" class="form-control" required>

              </div><!-- col-md-6 Finish -->

            </div><!-- form-group Finish -->

            <div class="form-group"><!-- form-group Start -->

              <label class="col-md-3 control-label"> Product Description </label>

              <div class="col-md-6"><!-- col-md-6 Start -->

                <textarea name="product_desc"cols="19" rows="6" class="form-control" required></textarea>

              </div><!-- col-md-6 Finish -->

            </div><!-- form-group Finish -->

            <div class="form-group"><!-- form-group Start -->

              <label class="col-md-3 control-label"> </label>

              <div class="col-md-6"><!-- col-md-6 Start -->

                <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">

              </div><!-- col-md-6 Finish -->

            </div><!-- form-group Finish -->

          </form>

        </div><!-- panel-body Finish -->

      </div><!-- panel Finish -->

    </div><!-- col-lg-12 Finish -->

  </div><!-- row Finish -->




  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>
  <script src="js/tinymce/tinymce.min.js"></script>
  <script>tinymce.init({selector:'textarea'});</script>
  


</body>
</html>