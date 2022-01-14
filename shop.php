<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MarketPlace</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
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
            <a href="customer/my_account.php">My Account</a>
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
              <a href="customer/my_account.php">My Account</a>
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

        <div class="box"><!-- box Start -->

          <h1>Shop</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro voluptates rerum inventore exercitationem velit, beatae voluptatibus doloribus ea excepturi doloremque, non est. Voluptatibus provident sequi amet sunt quo. Provident, aliquam?</p>

        </div><!-- box Finish -->

        <div class="row"><!-- row Start -->

          <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 Start -->

            <div class="product"><!-- product Start -->

              <a href="details.php">

                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">

              </a>

              <div class="text"><!-- text Start -->

                <h3>
                  <a href="details.php">Shirt for Women</a>
                </h3>

                <p class="price">P100</p>

                <p class="button">
                  <a href="details.php" class="btn btn-default">View more</a>
                  <a href="details.php" class="btn btn-primary">
                    <i class="fa fa-shopping-cart">Add to Cart</i>
                  </a>
                </p>

              </div><!-- text Finish -->

            </div><!-- product Finish -->

          </div><!-- col-md-4 Finish -->

          <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 Start -->

            <div class="product"><!-- product Start -->

              <a href="details.php">

                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">

              </a>

              <div class="text"><!-- text Start -->

                <h3>
                  <a href="details.php">Shirt for Women</a>
                </h3>

                <p class="price">P100</p>

                <p class="button">
                  <a href="details.php" class="btn btn-default">View more</a>
                  <a href="details.php" class="btn btn-primary">
                    <i class="fa fa-shopping-cart">Add to Cart</i>
                  </a>
                </p>

              </div><!-- text Finish -->

            </div><!-- product Finish -->

          </div><!-- col-md-4 Finish -->

          <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 Start -->

            <div class="product"><!-- product Start -->

              <a href="details.php">

                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">

              </a>

              <div class="text"><!-- text Start -->

                <h3>
                  <a href="details.php">Shirt for Women</a>
                </h3>

                <p class="price">P100</p>

                <p class="button">
                  <a href="details.php" class="btn btn-default">View more</a>
                  <a href="details.php" class="btn btn-primary">
                    <i class="fa fa-shopping-cart">Add to Cart</i>
                  </a>
                </p>

              </div><!-- text Finish -->

            </div><!-- product Finish -->

          </div><!-- col-md-4 Finish -->

          <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 Start -->

            <div class="product"><!-- product Start -->

              <a href="details.php">

                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">

              </a>

              <div class="text"><!-- text Start -->

                <h3>
                  <a href="details.php">Shirt for Women</a>
                </h3>

                <p class="price">P100</p>

                <p class="button">
                  <a href="details.php" class="btn btn-default">View more</a>
                  <a href="details.php" class="btn btn-primary">
                    <i class="fa fa-shopping-cart">Add to Cart</i>
                  </a>
                </p>

              </div><!-- text Finish -->

            </div><!-- product Finish -->

          </div><!-- col-md-4 Finish -->

        </div><!-- box Finish -->

        <center>

          <ul class="pagination">
            <li><a href="#">First Page</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">Last Page</a></li>
          </ul>

        </center>

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