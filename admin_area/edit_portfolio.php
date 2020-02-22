<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_portfolio'])){
        
        $edit_id = $_GET['edit_portfolio'];
        
        $get_portfolio = "select * from portfolio where portfolio_id='$edit_id'";
        
        $run_edit = mysqli_query($con,$get_portfolio);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $portfolio_id = $row_edit['portfolio_id'];
        
        $portfolio_title = $row_edit['portfolio_title'];
        
        $portfolio_image = $row_edit['portfolio_img'];
        
        $portfolio_description = $row_edit['portfolio_description'];
        
        
        

    }
        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert portfolio </title>
</head>
<body>
    
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
            <li class="active"><!-- active Begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit portfolio
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Edit portfolio 
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> portfolio Name </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="portfolio_title" type="text" class="form-control" required value="<?php echo $portfolio_title; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> portfolio Image </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="portfolio_image" type="file" class="form-control" required>
                          
                          <br>
                          
                          <img width="70" height="70" src="portfolio_images/<?php echo $portfolio_image; ?>" alt="<?php echo $portfolio_image; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   
                  
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> portfolio Description </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <textarea name="portfolio_description" cols="19" rows="6" class="form-control">
                              
                              <?php echo $portfolio_description; ?>
                              
                          </textarea>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="update" value="Update Product" type="submit" class="btn btn-primary form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
   
    <script src="js/tinymce/tinymce.min.js"></script>
</body>
</html>


<?php 

if(isset($_POST['update'])){
    
    $portfolio_title = $_POST['portfolio_title'];
	$portfolio_description = $_POST['portfolio_description'];
	
	
	$portfolio_image = $_FILES['portfolio_image']['name'];

	$temp_name1 = $_FILES['portfolio_image']['tmp_name'];
	
	move_uploaded_file($temp_name1,"portfolio_images/$portfolio_image");
	
    $update_product = "update portfolio set portfolio_title='$portfolio_title',portfolio_img='$portfolio_image',portfolio_description='$portfolio_description' where portfolio_id='$portfolio_id'";
    
    $run_product = mysqli_query($con,$update_product);
    
    if($run_product){
        
       echo "<script>alert('Your portfolio has been updated Successfully')</script>"; 
        
       echo "<script>window.open('index.php?view_portfolio','_self')</script>"; 
        
    }
    
}

?>


<?php } ?>