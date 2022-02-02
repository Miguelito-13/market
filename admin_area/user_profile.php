<?php 

  if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

  }else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert User </title>
</head>
<body>
    
  <div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
      <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
        <li class="active"><!-- active Begin -->
                
          <i class="fa fa-dashboard"></i> Dashboard / Insert User
                
        </li><!-- active Finish -->
            
      </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
  </div><!-- row Finish -->
       
  <div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
      <div class="panel panel-default"><!-- panel panel-default Begin -->
            
        <div class="panel-heading"><!-- panel-heading Begin -->
             
          <h3 class="panel-title"><!-- panel-title Begin -->
                   
            <i class="fa fa-user fa-fw"></i> Insert User
                   
          </h3><!-- panel-title Finish -->
               
        </div> <!-- panel-heading Finish -->
           
        <div class="panel-body"><!-- panel-body Begin -->
               
          <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
            <div class="form-group"><!-- form-group Begin -->
                       
              <label class="col-md-3 control-label"> User Name </label> 
                      
                <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                  <input name="admin_name" type="text" class="form-control" required value="<?php echo $admin_name; ?>">
                          
                </div><!-- col-md-6 Finish -->
                       
            </div><!-- form-group Finish -->    
            
            <div class="form-group"><!-- form-group Begin -->
                       
              <label class="col-md-3 control-label"> User Email </label> 
                      
                <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                  <input name="admin_email" type="text" class="form-control" required value="<?php echo $admin_email; ?>">
                          
                </div><!-- col-md-6 Finish -->
                       
            </div><!-- form-group Finish -->
                   
            <div class="form-group"><!-- form-group Begin -->
                       
              <label class="col-md-3 control-label"> User Image </label> 
                      
                <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                  <input name="admin_image" type="file" class="form-control" required>

                  <img src="admin_images/<?php echo $admin_image; ?>" alt="<?php echo $admin_image; ?>" width="200" height="200">
                          
                </div><!-- col-md-6 Finish -->
                       
            </div><!-- form-group Finish -->     
                   
            <div class="form-group"><!-- form-group Begin -->
                       
              <label class="col-md-3 control-label"></label> 
                      
                <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                  <input name="update" value="Update User" type="submit" class="btn btn-primary form-control">
                          
               </div><!-- col-md-6 Finish -->
                       
            </div><!-- form-group Finish -->
                   
          </form><!-- form-horizontal Finish -->
               
        </div><!-- panel-body Finish -->
            
      </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
  </div><!-- row Finish -->
        
  <script src="js/tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea'});</script>

</body>
</html>

<?php 

    if(isset($_POST['update'])){
      
      $admin_name = $_POST['admin_name'];

      $admin_email = $_POST['admin_email'];
      
      $admin_image = $_FILES['admin_image']['name'];
      
      $temp_name = $_FILES['admin_image']['tmp_name'];
      
      move_uploaded_file($temp_name,"admin_images/$admin_image");
     
      $update_user = "update dlpp_admins set admin_name='$admin_name', admin_email='$admin_email', admin_image='$admin_image' where admin_id='$admin_id'";
      
      $run_user = mysqli_query($conn,$update_user);
      
      if($run_user){
          
        echo "<script>alert('User has been updated sucessfully. Please Log in again.')</script>";
        echo "<script>window.open('logout.php','_self')</script>";
          
      }

    }

  }

?>