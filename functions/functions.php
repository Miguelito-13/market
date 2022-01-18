<?php

  $db = mysqli_connect("localhost", "root", "", "marketplace_db");

  function getPro(){
    
    global $db;
    
    $get_products = "select * from products order by 1 DESC LIMIT 0,8";

    $run_products = mysqli_query($db, $get_products);

    while($row_products=mysqli_fetch_array($run_products)){
      $pro_id = $row_products['product_id'];

      $pro_name = $row_products['product_name'];

      $pro_price = $row_products['product_price'];

      $pro_img1 = $row_products['product_img1'];

      echo "
      
        <div class='col-md-4 col-sm-6 single'>

          <div class='product'>

            <a href='details.php?pro_id=$pro_id'>

              <img class='img-responsive' src='admin_area/product_images/$pro_img1'>

            </a>

            <div class='text'>

              <h3>

                <a href='details.php?pro_id=$pro_id'>

                  $pro_name

                </a>

              </h3>

              <p class='price'>
              
                P $pro_price
              
              </p>

              <p class='button'>

                <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                  View Details

                </a>

                <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

                  <i class='fa fa-shopping-cart'></i> Add to Cart

                </a>

              </p>

            </div>

          </div>

        </div>
      
      ";
    
    }

  }

?>