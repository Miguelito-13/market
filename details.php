<?php

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
                    <center><img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product1"></center>
                  </div><!-- item Finish -->

                  <div class="item"><!-- item Start -->
                    <center><img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="Product 2"></center>
                  </div><!-- item Finish -->

                  <div class="item"><!-- item Start -->
                    <center><img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 3"></center>
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

              <h1 class="text-center">Shirt</h1>

              <form action="" class="form-horizontal" method="post"><!-- form Start -->

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

                    <select name="product_size" id="" class="form-control">
                      <option>Select a Size</option>
                      <option>S</option>
                      <option>M</option>
                      <option>L</option>
                      <option>XL</option>
                    </select>

                  </div><!-- col-md-7 Finish -->

                </div><!-- form-group Finish -->

                <p class="price">P200</p>

                <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to Cart</button></p>

              </form><!-- form Finish -->

            </div><!-- box Finish -->


            <div class="row" id="thumbs"><!-- row Start -->

              <div class="col-xs-4"><!-- col-xs-4 Start -->

                <a  data-target="#myCarousel" data-slide-to="0" href="" class="thumb">
                  <img src="admin_area/product_images/product-1.jpg" alt="product 1" class="img-responsive">
                </a>

              </div><!-- col-xs-4 Finish -->

              <div class="col-xs-4"><!-- col-xs-4 Start -->

                <a  data-target="#myCarousel" data-slide-to="1" href="" class="thumb">
                  <img src="admin_area/product_images/product-2.jpg" alt="product 2" class="img-responsive">
                </a>

              </div><!-- col-xs-4 Finish -->

              <div class="col-xs-4"><!-- col-xs-4 Start -->

                <a  data-target="#myCarousel" data-slide-to="2" href="" class="thumb">
                  <img src="admin_area/product_images/product-1.jpg" alt="product 3" class="img-responsive">
                </a>

              </div><!-- col-xs-4 Finish -->

            </div><!-- row Finish -->

          </div><!-- col-sm-6 Finish -->

        </div><!-- row Finish -->

        <div class="box" id="details"><!-- box Start -->

          <h4>Product Details</h4>

          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est repellendus quaerat nisi quibusdam adipisci dicta harum? Corporis officia amet ducimus aliquid quisquam pariatur laboriosam, nesciunt asperiores adipisci neque id rerum.
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

          </div><!-- col-md-3 Start -->

          <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 Start -->

            <div class="product same-height"><!-- product Start -->

              <a href="details.php">
                <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="product 2">
              </a>

              <div class="text"><!-- text Start -->
                <h3><a href="details.php">Shirt</a></h3>
                <p class="price">P350</p>
              </div><!-- text Finish -->

            </div><!-- product Finish -->

          </div><!-- col-md-3 Finish -->

          <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 Start -->

            <div class="product same-height"><!-- product Start -->

              <a href="details.php">
                <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="product 2">
              </a>

              <div class="text"><!-- text Start -->
                <h3><a href="details.php">Shirt</a></h3>
                <p class="price">P350</p>
              </div><!-- text Finish -->

            </div><!-- product Finish -->

          </div><!-- col-md-3 Finish -->

          <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 Start -->

            <div class="product same-height"><!-- product Start -->

              <a href="details.php">
                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="product 2">
              </a>

              <div class="text"><!-- text Start -->
                <h3><a href="details.php">Shirt</a></h3>
                <p class="price">P350</p>
              </div><!-- text Finish -->

            </div><!-- product Finish -->

          </div><!-- col-md-3 Finish -->

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