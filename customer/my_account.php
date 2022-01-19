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
            My Account
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

          <?php 
          
            if(isset($_GET['my_orders'])){
              include("my_orders.php");
            }

            if(isset($_GET['edit_account'])){
              include("edit_account.php");
            }

            if(isset($_GET['change_password'])){
              include("change_password.php");
            }

            if(isset($_GET['delete_account'])){
              include("delete_account.php");
            }

          ?>



        </div><!-- box Finish -->

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