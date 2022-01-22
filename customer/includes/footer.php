<div id="footer"><!-- footer Start -->

  <div class="container"><!-- container Start -->

    <div class="row"><!-- row Start -->

      <div class="col-sm-6 col-md-3"><!-- col-sm-6 Start -->

        <h4>Pages</h4>

        <ul>
          <li><a href="../cart.php">Shopping Cart</a></li>
          <li><a href="../contact.php">Contact Us</a></li>
          <li><a href="../shop.php">Shop</a></li>
          <li><a href="my_account.php">My Account</a></li>
        </ul>

        <hr>

        <h4>User Section</h4>

        <ul>

          <li>

            <?php 
                
              if(!isset($_SESSION['customer_email'])){
    
                echo "<a href='../checkout.php'> Login </a>";
    
              }else{
    
                echo "<a href='my_account.php?my_orders'> My Account </a>";
    
              }
    
            ?>

          </li>

          <li>

            <?php 
                
              if(!isset($_SESSION['customer_email'])){

                echo "<a href='../checkout.php'> Login </a>";

              }else{

                echo "<a href='my_account.php?edit_account'> Edit Account </a>";

              }

            ?>

          </li>

        </ul>

        <hr class="hidden-md hidden-lg hidden-sm">

      </div><!-- col-sm-6 Finish -->

      <div class="col-sm-6 col-md-3"><!-- col-sm-6 Start -->

        <h4>Top Product Categories</h4>

        <ul>
          
          <?php
          
            $get_p_cats = "select * from product_categories";

            $run_p_cats = mysqli_query($conn,$get_p_cats);

            while($row_p_cats=mysqli_fetch_array($run_p_cats)){
              
              $p_cat_id = $row_p_cats['p_cat_id'];

              $p_cat_name = $row_p_cats['p_cat_name'];

              echo "
              
                <li>

                  <a href='../shop.php?p_cat=$p_cat_id'>
                  
                    $p_cat_name
                  
                  </a>

                </li>
              
              ";
      
            }
          
          ?>

        </ul>

        <hr class="hidden-md hidden-lg hidden-sm">

      </div><!-- col-sm-6 Finish -->

      <div class="col-sm-6 col-md-3"><!-- col-sm-6 Start -->

        <h4>Find Us:</h4>

        <p>
          <strong>Bootleg Inc.</strong>
          <br/>Manila
          <br/>Cavite
          <br/>8700-12-34
          <br/>real_email@gmail.com
          <br/><strong>Mr. Yoso</strong>
        </p>

        <a href="../contact.php">Check our Contacts Page</a>

        <hr class="hidden-md hidden-lg hidden-sm">

      </div><!-- col-sm-6 Finish -->

      <div class="col-sm-6 col-md-3"><!-- col-sm-6 Start -->

        <h4>Get The News</h4>

        <p>
          Don't miss our latest showbiz happenings.
        </p>

        <form action="" method="post"><!-- form Start -->

          <div class="input-group"><!-- input-group Start -->

            <input type="text" class="form-control" name="email">

            <span class="input-group-btn"><!-- input-group-btn Start -->

              <input type="submit" value="subscribe" class="btn btn-default">

            </span><!-- input-group-btn Finish -->

          </div><!-- input-group Finish -->

        </form><!-- form Finish -->

        <h4>Keep In Touch</h4>

        <p class="social">
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-instagram"></a>
          <a href="#" class="fa fa-google-plus"></a>
          <a href="#" class="fa fa-envelope"></a>
        </p>

      </div><!-- col-sm-6 Finish -->

    </div><!-- row Finish -->

  </div><!-- container Finish -->

</div><!-- footer Finish -->

<div id="copyright"><!-- copyright Start -->

  <div class="container"><!-- container Start -->

    <div class="col-md-6"><!-- col-md-6 Start -->

      <p class="pull-left">&copy; 2022 Bootleg Inc. All Rights Reserved</p>

    </div><!-- col-md-6 Finish -->

    <div class="col-md-6"><!-- col-md-6 Start -->

      <p class="pull-right"> Theme by: <a href="#">Mr. Yoso</a></p>

    </div><!-- col-md-6 Finish -->

  </div><!-- container Finish -->

</div><!-- copyright Finish -->