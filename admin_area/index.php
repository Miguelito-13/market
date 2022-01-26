<?php 

  session_start();

  include("includes/db.php");

  if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

  }else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Area</title>
  <link rel="stylesheet" href="css/bootstrap-337.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <div id="wrapper"><!-- wrapper Start -->

    <?php include("includes/sidebar.php"); ?>

    <div id="page-wrapper"><!-- page-wrapper Start -->

      <div class="container-fluid"><!-- container-fluid Start -->

        <?php 
        
          if(isset($_GET['dashboard'])){

            include("dashboard.php");

          }
        
        ?>

      </div><!-- container-fluid Finish -->

    </div><!-- page-wrapper Finish -->

  </div><!-- wrapper Finish -->

  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>

</body>
</html>

<?php 

  }

?>