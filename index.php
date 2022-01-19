<?php
  $active='Home';
  include("includes/header.php");

?>
  
  <div class="container" id="slider"><!-- container Begin -->
       
    <div class="col-md-12"><!-- col-md-12 Begin -->
           
      <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
               
        <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                   
          <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
                   
        </ol><!-- carousel-indicators Finish -->
               
          <div class="carousel-inner"><!-- carousel-inner Begin -->
                   
            <?php 
            
              $get_slides = "select * from carousel LIMIT 0,1";
              $run_slides = mysqli_query($conn,$get_slides);
              while($row_slides=mysqli_fetch_array($run_slides)){
                $carousel_name = $row_slides['carousel_name'];
                $carousel_img = $row_slides['carousel_img'];

                echo "
                
                  <div class='item active'>

                    <img src='admin_area/slides_images/$carousel_img'>

                  </div>

                ";
              }

              $get_slides = "select * from carousel LIMIT 1,3";
              $run_slides = mysqli_query($conn,$get_slides);
              while($row_slides=mysqli_fetch_array($run_slides)){
                $carousel_name = $row_slides['carousel_name'];
                $carousel_img = $row_slides['carousel_img'];

                echo "
                
                  <div class='item'>

                    <img src='admin_area/slides_images/$carousel_img'>

                  </div>

                ";
              }

            ?>
                   
          </div><!-- carousel-inner Finish -->
               
          <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                   
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
                   
          </a><!-- left carousel-control Finish -->
               
          <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                   
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
                   
          </a><!-- left carousel-control Finish -->
               
      </div><!-- carousel slide Finish -->
           
    </div><!-- col-md-12 Finish -->
       
  </div><!-- container Finish -->
   
  <div id="advantages"><!-- advantages Start -->

    <div class="container"><!-- container Start -->

      <div class="same-height-row"><!-- same-height-row Start -->

        <div class="col-sm-4"><!-- col-sm-4 Start -->

          <div class="box same-height"><!-- box Start -->

            <div class="icon"><!-- icon Start -->

              <i class="fa fa-star"></i>

            </div><!-- icon Finish -->

            <h3><a href="#">Lorem Ipsum</a></h3>

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>

          </div><!-- box Finish -->

        </div><!-- col-sm-4 Finish -->

        <div class="col-sm-4"><!-- col-sm-4 Start -->

          <div class="box same-height"><!-- box Start -->

            <div class="icon"><!-- icon Start -->

              <i class="fa fa-star"></i>

            </div><!-- icon Finish -->

            <h3><a href="#">Lorem Ipsum</a></h3>

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>

          </div><!-- box Finish -->

        </div><!-- col-sm-4 Finish -->

        <div class="col-sm-4"><!-- col-sm-4 Start -->

          <div class="box same-height"><!-- box Start -->

            <div class="icon"><!-- icon Start -->

              <i class="fa fa-star"></i>

            </div><!-- icon Finish -->

            <h3><a href="#">Lorem Ipsum</a></h3>

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>

          </div><!-- box Finish -->

        </div><!-- col-sm-4 Finish -->

      </div><!-- container Finish -->

    </div><!-- container Finish -->

  </div><!-- advantages Finish -->

  <div id="hot"><!-- hot Start -->

    <div class="box"><!-- box Start -->

      <div class="container"><!-- container Start -->

        <div class="col-md-12"><!-- col-md-12 Start -->

          <h2>Our Latest Product</h2>

        </div><!-- col-md-12 Finish -->

      </div><!-- container Finish -->

    </div><!-- box Finish -->

  </div><!-- hot Finish -->

  <div id="content" class="container"><!-- container Start -->

    <div class="row"><!-- row Start -->

      <?php
      
        getPro();

      ?>

    </div><!-- row Finish -->

  </div><!-- container Finish -->

  <?php
  
    include("includes/footer.php")

  ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>