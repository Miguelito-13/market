<?php

  $active='Cart';
  include("includes/header.php");

?>

  <div id="content"><!-- content Start -->

    <div class="container"><!-- container Start -->

      <div class="col-md-12"><!-- col-md-12 Start -->

        <ul class="breadcrumb">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            Shop
          </li>
          <li>
            <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_name; ?></a>
          </li>
          <li>
            <?php echo $pro_name ?>
          </li>
        </ul>

      </div><!-- col-md-12 Finish -->

      <div class="col-md-3"><!-- col-md-3 Start -->

        <?php
  
          include("includes/sidebar.php")

        ?>

      </div><!-- col-md-3 Finish -->

      <div class="col-md-9"><!-- col-md-9 Start -->

        <div id="productMain" class="row"><!-- row Start -->

          <div class="col-sm-6"><!-- col-sm-6 Start -->

            <div id="mainImage"><!-- mainImage Start -->

              <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel Start -->

                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner"><!-- carousel-inner Start -->

                  <div class="item active"><!-- item Start -->
                    <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="Product1"></center>
                  </div><!-- item Finish -->

                  <div class="item"><!-- item Start -->
                    <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="Product 2"></center>
                  </div><!-- item Finish -->

                  <div class="item"><!-- item Start -->
                    <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="Product 3"></center>
                  </div><!-- item Finish -->

                </div><!-- carousel-inner Finish -->

                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>

                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>

                <span class="glyphicon glyphicon-cevron-left"></span>

              </div><!-- carousel Finish -->

            </div><!-- mainImage Finish -->

          </div><!-- col-sm-6 Finish -->

          <div class="col-sm-6"><!-- col-sm-6 Start -->

            <div class="box"><!-- box Start -->

              <h1 class="text-center"><?php echo $pro_name; ?></h1>

              <?php add_cart(); ?>

              <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post"><!-- form Start -->

                <div class="form-group"><!-- form-group Start -->

                  <label for="" class="col-md-5 control-label">Product Quantity</label>

                  <div class="col-md-7"><!-- col-md-7 Start -->

                    <select name="product_qty" id="" class="form-control">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>

                  </div><!-- col-md-7 Finish -->

                </div><!-- form-group Finish -->

                <div class="form-group"><!-- form-group Start -->

                <label class="col-md-5 control-label">Product Size</label>

                  <div class="col-md-7"><!-- col-md-7 Start -->

                  <select name="product_size" class="form-control" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('Must pick 1 size for the product')">
                    <option disabled selected>Select a Size</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                  </select>

                  </div><!-- col-md-7 Finish -->

                </div><!-- form-group Finish -->

                <p class="price">P<?php echo $pro_price; ?></p>

                <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to Cart</button></p>

              </form><!-- form Finish -->

            </div><!-- box Finish -->


            <div class="row" id="thumbs"><!-- row Start -->

              <div class="col-xs-4"><!-- col-xs-4 Start -->

                <a  data-target="#myCarousel" data-slide-to="0" href="" class="thumb">
                  <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="product 1" class="img-responsive">
                </a>

              </div><!-- col-xs-4 Finish -->

              <div class="col-xs-4"><!-- col-xs-4 Start -->

                <a  data-target="#myCarousel" data-slide-to="1" href="" class="thumb">
                  <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="product 2" class="img-responsive">
                </a>

              </div><!-- col-xs-4 Finish -->

              <div class="col-xs-4"><!-- col-xs-4 Start -->

                <a  data-target="#myCarousel" data-slide-to="2" href="" class="thumb">
                  <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="product 3" class="img-responsive">
                </a>

              </div><!-- col-xs-4 Finish -->

            </div><!-- row Finish -->

          </div><!-- col-sm-6 Finish -->

        </div><!-- row Finish -->

        <div class="box" id="details"><!-- box Start -->

          <h4>Product Details</h4>

          <p>
            <?php echo $pro_desc; ?>
          </p>

          <h4>Size</h4>

          <ul>
            <li>Small</li>
            <li>Medium</li>
            <li>Large</li>
            <li>Extra Large</li>
          </ul>

          <hr>

        </div><!-- box Finish -->

        <div id="row same-height-row"><!-- row Start -->

          <div class="col-md-3 col-sm-6"><!-- col-md-3 Start -->

            <div class="box same-height headline"><!-- box Start -->

              <h3 class="text-center">Products you might also like</h3>

            </div><!-- box Start -->

          </div><!-- col-md-3 Finish -->

          <?php 
          
            $get_products = "select * from products order by rand() LIMIT 0,3";

            $run_products = mysqli_query($conn,$get_products);

            while($row_products=mysqli_fetch_array($run_products)){
              $pro_id = $row_products['product_id'];

              $pro_name = $row_products['product_name'];

              $pro_img1 = $row_products['product_img1'];

              $pro_price = $row_products['product_price'];

              echo "
              
                <div class='col-md-3 col-sm-6 center-responsive'>
                
                  <div class='product same-height'>
                  
                    <a href='details.php?pro_id=$pro_id'>
                    
                      <img class='img-responsive' src='admin_area/product_images/$pro_img1'>

                    </a>

                    <div class='text'>
                    
                      <h3> <a href='details.php?pro_id=$pro_id'> $pro_name </a> </h3>

                      <p class='price'> P $pro_price </p>
                    
                    </div>

                  </div>
                
                </div>

              ";

            }
          
          ?>

        </div><!-- row Finish -->

      </div><!-- col-md-9 Finish -->

    </div><!-- container Finish -->

  </div><!-- content Finish -->

  <?php
  
    include("includes/footer.php")

  ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>