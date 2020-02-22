<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_news'])){
        
        $edit_id = $_GET['edit_news'];
        
        $get_news = "select * from news where news_id='$edit_id'";
        
        $run_edit = mysqli_query($con,$get_news);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $news_id = $row_edit['news_id'];
        
        $news_title = $row_edit['news_title'];
        
        $news_image = $row_edit['news_image'];
        
        $news_description = $row_edit['news_description'];
        
        $news_ref_link = $row_edit['news_ref_link'];
        
        $news_keywords = $row_edit['news_keywords'];
        

    }
        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert news </title>
</head>
<body>
    
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
            <li class="active"><!-- active Begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit news
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Edit news 
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> News Title </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="news_title" type="text" class="form-control" required value="<?php echo $news_title; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> News Image </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="news_image" type="file" class="form-control" required>
                          
                          <br>
                          
                          <img width="70" height="70" src="news_images/<?php echo $news_image; ?>" alt="<?php echo $news_image; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> News Ref Link </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="news_ref_link" type="text" class="form-control" required value="<?php echo $news_ref_link; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> News Keywords </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="news_keywords" type="text" class="form-control" required value="<?php echo $news_keywords; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> News Description </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <textarea name="news_description" cols="19" rows="6" class="form-control">
                              
                              <?php echo $news_description; ?>
                              
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
    
    $news_title = $_POST['news_title'];
	$news_description = $_POST['news_description'];
	$news_ref_link = $_POST['news_ref_link'];
	$news_keywords = $_POST['news_keywords'];
	
	$news_image = $_FILES['news_image']['name'];

	$temp_name1 = $_FILES['news_image']['tmp_name'];
	
	move_uploaded_file($temp_name1,"news_images/$news_image");
	
    $update_product = "update news set news_title='$news_title',news_image='$news_image',news_description='$news_description',news_ref_link='$news_ref_link',news_keywords='$news_keywords',date= CURDATE() where news_id='$edit_id'";
    
    $run_product = mysqli_query($con,$update_product);
    
    if($run_product){
        
       echo "<script>alert('Your news has been updated Successfully')</script>"; 
        
       echo "<script>window.open('index.php?view_news','_self')</script>"; 
        
    }
    
}

?>


<?php } ?>