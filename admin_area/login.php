<?php

  session_start();
  include("includes/db.php");

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
  <link rel="stylesheet" href="css/login.css">
</head>
<body>

  <div class="container"><!-- container Start -->

    <form action="" class="form-login" method="post">

      <h2 class="form-login-heading">Admin Login</h2>

      <input type="text" class="form-control" placeholder="Email Address" name="admin_email" required>

      <input type="password" class="form-control" placeholder="Password" name="admin_pass" required>

      <button type="submit" class="btn btn-lg btn-primary btn-block" name="admin_login">
        Login
      </button>

      <br/>
      <a href="../index.php">Back to Home Page</a>

    </form>

  </div><!-- container Finish -->
  
</body>
</html>

<?php 

  if(isset($_POST['admin_login'])){

    $admin_email = mysqli_real_escape_string($conn,$_POST['admin_email']);

    $admin_pass = mysqli_real_escape_string($conn,$_POST['admin_pass']);

    $get_admin = "select * from dlpp_admins where admin_email='$admin_email'";

    $run_admin = mysqli_query($conn,$get_admin);

    if(mysqli_num_rows($run_admin)){

      while($row=mysqli_fetch_assoc($run_admin)){

        if(password_verify($admin_pass,$row['admin_pass'])){

          $_SESSION['admin_email'] = $admin_email;

          echo "<script>alert('Logged in Successfully.')</script>";

          echo "<script>window.open('index.php?dashboard','_self')</script>";

        }else{

          echo "<script>alert('Email or password in invalid.')</script>";

        }

      }

    }
    
  }

?>