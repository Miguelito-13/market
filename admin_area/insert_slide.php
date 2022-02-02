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
    <title> Insert Slide </title>
</head>
<body>
    
  <div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
      <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
        <li class="active"><!-- active Begin -->
                
          <i class="fa fa-dashboard"></i> Dashboard / Insert Slide
                
        </li><!-- active Finish -->
            
      </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
  </div><!-- row Finish -->
       
  <div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
      <div class="panel panel-default"><!-- panel panel-default Begin -->
            
        <div class="panel-heading"><!-- panel-heading Begin -->
             
          <h3 class="panel-title"><!-- panel-title Begin -->
                   
            <i class="fa fa-money fa-fw"></i> Insert Slide 
                   
          </h3><!-- panel-title Finish -->
               
        </div> <!-- panel-heading Finish -->
           
        <div class="panel-body"><!-- panel-body Begin -->
               
          <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
            <div class="form-group"><!-- form-group Begin -->
                       
              <label class="col-md-3 control-label"> Slide Name </label> 
                      
                <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                  <input name="carousel_name" type="text" class="form-control" required>
                          
                </div><!-- col-md-6 Finish -->
                       
            </div><!-- form-group Finish -->              
                   
            <div class="form-group"><!-- form-group Begin -->
                       
              <label class="col-md-3 control-label"> Slide Image </label> 
                      
                <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                  <input name="carousel_img" type="file" class="form-control" required>
                          
                </div><!-- col-md-6 Finish -->
                       
            </div><!-- form-group Finish -->     
                   
            <div class="form-group"><!-- form-group Begin -->
                       
              <label class="col-md-3 control-label"></label> 
                      
                <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                  <input name="submit" value="Insert Slide" type="submit" class="btn btn-primary form-control">
                          
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

    if(isset($_POST['submit'])){
      
      $carousel_name = $_POST['carousel_name'];
      
      $carousel_img = $_FILES['carousel_img']['name'];
      
      $temp_name = $_FILES['carousel_img']['tmp_name'];
      
      move_uploaded_file($temp_name,"slides_images/$carousel_img");
     
      $insert_slide = "insert into dlpp_carousel (carousel_name,carousel_img) values ('$carousel_name','$carousel_img')";
      
      $run_slide = mysqli_query($conn,$insert_slide);
      
      if($run_slide){
          
        echo "<script>alert('Slide has been inserted sucessfully')</script>";
        echo "<script>window.open('index.php?view_slides','_self')</script>";
          
      }

    }

  }

?>