<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MarketPlace</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
   
  <div id="top"><!-- Top Begin -->
       
    <div class="container"><!-- container Begin -->
           
      <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
        <a href="#" class="btn btn-success btn-sm">Welcome to MarketPlace</a>
        <a href="checkout.php">4 Items In Your Cart | Total Price: P300 </a>
               
      </div><!-- col-md-6 offer Finish -->
           
      <div class="col-md-6"><!-- col-md-6 Begin -->
               
        <ul class="menu">
                   
          <li>
            <a href="customer_register.php">Register</a>
          </li>
          <li>
            <a href="checkout.php">My Account</a>
          </li>
          <li>
            <a href="cart.php">Go To Cart</a>
          </li>
          <li>
            <a href="checkout.php">Login</a>
          </li>
                   
        </ul>
               
      </div><!-- col-md-6 Finish -->
           
    </div><!-- container Finish -->
       
  </div><!-- Top Finish -->
   
  <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
    <div class="container"><!-- container Begin -->
           
      <div class="navbar-header"><!-- navbar-header Begin -->
               
        <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
          <span class="sr-only">Toggle Navigation</span>
                   
          <i class="fa fa-align-justify"></i>
                   
        </button>
               
        <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
          <span class="sr-only">Toggle Search</span>
                   
          <i class="fa fa-search"></i>
                   
        </button>
               
      </div><!-- navbar-header Finish -->
           
      <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
        <div class="padding-nav"><!-- padding-nav Begin -->
                   
          <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
            <li>
              <a href="index.php">Home</a>
            </li>
            <li class="active">
              <a href="shop.php">Shop</a>
            </li>
            <li>
              <a href="checkout.php">My Account</a>
            </li>
            <li>
              <a href="cart.php">Shopping Cart</a>
            </li>
            <li>
              <a href="contact.php">Contact Us</a>
            </li>
                       
          </ul><!-- nav navbar-nav left Finish -->
                   
        </div><!-- padding-nav Finish -->
               
        <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                   
          <i class="fa fa-shopping-cart"></i>
                   
          <span>4 Items In Your Cart</span>
                   
        </a><!-- btn navbar-btn btn-primary Finish -->
               
        <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                   
          <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                       
            <span class="sr-only">Toggle Search</span>
                       
              <i class="fa fa-search"></i>
                       
          </button><!-- btn btn-primary navbar-btn Finish -->
                   
        </div><!-- navbar-collapse collapse right Finish -->
               
        <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                   
          <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                       
            <div class="input-group"><!-- input-group Begin -->
                           
              <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
              <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                               
                  <i class="fa fa-search"></i>
                               
                </button><!-- btn btn-primary Finish -->
                           
              </span><!-- input-group-btn Finish -->
                           
            </div><!-- input-group Finish -->
                       
          </form><!-- navbar-form Finish -->
                   
        </div><!-- collapse clearfix Finish -->
               
      </div><!-- navbar-collapse collapse Finish -->
           
    </div><!-- container Finish -->
       
  </div><!-- navbar navbar-default Finish -->

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
                  <span class="glyphicon glyphicon-cevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>

                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                  <span class="glyphicon glyphicon-cevron-right"></span>
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

                <p>P200</p>

                <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to Cart</button></p>

              </form><!-- form Finish -->

            </div><!-- box Finish -->


            <div class="row" id="thumbs"><!-- row Start -->

              <div class="col-xs-4"><!-- col-xs-4 Start -->

                <a href="" class="thumb">
                  <img src="admin_area/product_images/product-1.jpg" alt="product 1" class="img-responsive">
                </a>

              </div><!-- col-xs-4 Finish -->

              <div class="col-xs-4"><!-- col-xs-4 Start -->

                <a href="" class="thumb">
                  <img src="admin_area/product_images/product-2.jpg" alt="product 2" class="img-responsive">
                </a>

              </div><!-- col-xs-4 Finish -->

              <div class="col-xs-4"><!-- col-xs-4 Start -->

                <a href="" class="thumb">
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