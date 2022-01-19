<?php

  $active='Contact';
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
            Contact Us
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

          <div class="box-header"><!-- box-header Start -->

            <center>
              <h2> Feel free to Contact Us </h2>
              <p class="text-muted">
                If you have any questions/concerns, please contact us. Our Customer Service will work on it.
              </p>
            </center>

            <form action="contact.php" method="POST">

              <div class="form-group"><!-- form-group Start -->

                <label>Name </label>
                <input type="text" class="form-control" name="name" required>

              </div><!-- form-group Finish -->

              <div class="form-group"><!-- form-group Start -->

                <label>Email </label>
                <input type="text" class="form-control" name="email" required>

              </div><!-- form-group Finish -->

              <div class="form-group"><!-- form-group Start -->

                <label>Subject </label>
                <input type="text" class="form-control" name="subject" required>

              </div><!-- form-group Finish -->

              <div class="form-group"><!-- form-group Start -->

                <label>Message </label>
                <textarea name="message" class="form-control"></textarea>

              </div><!-- form-group Finish -->

              <div class="text-center"><!-- text-center Start -->

                <button type="submit" name="submit" class="btn btn-primary">
                  <i class="fa fa-user-md"></i> Send Message
                </button>

              </div><!-- text-center Finish -->

            </form>

          </div><!-- box-header Finish -->

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