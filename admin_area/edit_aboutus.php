<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_aboutus'])){
        
        $edit_id = $_GET['edit_aboutus'];
        
        $get_about = "select * from aboutus where about_id='$edit_id'";
                                
        $run_about = mysqli_query($con,$get_about);

        $row_about=mysqli_fetch_array($run_about);
            
            $about_id = $row_about['about_id'];
            
            $about_content = $row_about['about_content'];

            $about_image = $row_about['about_image'];
            
            $founder1_img = $row_about['founder1_img'];
            
            $founder1_name = $row_about['founder1_name'];

            $founder1_designation = $row_about['founder1_designation'];
            
            $founder1_bio = $row_about['founder1_bio'];

            $founder2_img = $row_about['founder2_img'];
            
            $founder2_name = $row_about['founder2_name'];

            $founder2_designation = $row_about['founder2_designation'];
            
            $founder2_bio = $row_about['founder2_bio'];
    }
        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Edit AboutUs </title>
</head>
<body>
    
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
            <li class="active"><!-- active Begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit AboutUs
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Edit AboutUS
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
               <div class="form-group">
							<label class="col-md-3 control-label">About Content</label>
							<div class="col-md-6">
								<textarea name="aboutus_content" cols="19" rows="6" class="form-control">
                                <?php echo $about_content; ?>
                                </textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">About Logo Image </label>
							<div class="col-md-6">
								<input type="file" name="about_logo_image" class="form-control" required=>
                                <br>
                          
                          <img width="70" height="70" src="aboutus_images/<?php echo $about_image; ?>" alt="<?php echo $about_image; ?>">
                          
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Founder1 Image </label>
							<div class="col-md-6">
								<input type="file" name="founder1_image" class="form-control" required=>
                                <br>
                          
                          <img width="70" height="70" src="aboutus_images/<?php echo $founder1_img; ?>" alt="<?php echo $founder1_img; ?>">
                          
							</div>
						</div>

						

						<div class="form-group">
							<label class="col-md-3 control-label">Founder1 Name</label>
							<div class="col-md-6">
								<input type="text" name="founder1_name" class="form-control" required value="<?php echo $founder1_name; ?>">
							</div>
						</div>

							<div class="form-group">
							<label class="col-md-3 control-label">Founder1 Designation</label>
							<div class="col-md-6">
								<input type="text" name="founder1_designation" class="form-control" required value="<?php echo $founder1_designation; ?>">
							</div>
						</div>

							<div class="form-group">
							<label class="col-md-3 control-label">Founder1 Bio</label>
							<div class="col-md-6">
								<textarea name="founder1_bio" cols="19" rows="6" class="form-control">
                                <?php echo $founder1_bio; ?>
                                </textarea>
							</div>
						</div>

                        <div class="form-group">
							<label class="col-md-3 control-label">Founder2 Image </label>
							<div class="col-md-6">
								<input type="file" name="founder2_image" class="form-control" required=>
                                <br>
                          
                          <img width="70" height="70" src="aboutus_images/<?php echo $founder2_img; ?>" alt="<?php echo $founder2_img; ?>">
                          
							</div>
						</div>

						

						<div class="form-group">
							<label class="col-md-3 control-label">Founder2 Name</label>
							<div class="col-md-6">
								<input type="text" name="founder2_name" class="form-control" required value="<?php echo $founder2_name; ?>">
							</div>
						</div>

							<div class="form-group">
							<label class="col-md-3 control-label">Founder2 Designation</label>
							<div class="col-md-6">
								<input type="text" name="founder2_designation" class="form-control" required value="<?php echo $founder2_designation; ?>">
							</div>
						</div>

							<div class="form-group">
							<label class="col-md-3 control-label">Founder2 Bio</label>
							<div class="col-md-6">
								<textarea name="founder2_bio" cols="19" rows="6" class="form-control">
                                <?php echo $founder2_bio; ?>
                                </textarea>
							</div>
						</div>
                   
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
    
    $aboutus_content = $_POST['aboutus_content'];
	$founder1_name = $_POST['founder1_name'];
	$founder1_designation = $_POST['founder1_designation'];
    $founder1_bio = $_POST['founder1_bio'];
    $founder2_name = $_POST['founder2_name'];
	$founder2_designation = $_POST['founder2_designation'];
	$founder2_bio = $_POST['founder2_bio'];
	$aboutus_details = $_POST['aboutus_description'];
	
	$aboutus_logo_image = $_FILES['about_logo_image']['name'];

	$temp_name1 = $_FILES['about_logo_image']['tmp_name'];
	
    move_uploaded_file($temp_name1,"aboutus_images/$aboutus_logo_image");
    
    $founder1_image = $_FILES['founder1_image']['name'];

	$temp_name2 = $_FILES['founder1_image']['tmp_name'];
	
    move_uploaded_file($temp_name2,"aboutus_images/$founder1_image");
    
    $founder2_image = $_FILES['founder2_image']['name'];

	$temp_name3 = $_FILES['founder2_image']['tmp_name'];
	
	move_uploaded_file($temp_name3,"aboutus_images/$founder2_image");
	

	$insert_aboutus = "update aboutus set about_content='$aboutus_content',about_image='$aboutus_logo_image',founder1_img='$founder1_image',founder1_name='$founder1_name',founder1_designation='$founder1_designation',founder1_bio='$founder1_bio',founder2_img='$founder2_image',founder2_name='$founder2_name',founder2_designation='$founder2_designation',founder2_bio='$founder2_bio' where about_id='$about_id'"; 

		$run_aboutus = mysqli_query($con,$insert_aboutus);
		if($run_aboutus){

			echo "<script>alert('aboutus has been edited sucessfully')</script>";
			echo "<script>window.open('index.php?view_aboutus','_self')</script>";
		}
		else {
			echo "<script>alert('Editing aboutus failed!')</script>";
			echo "<script>window.open('index.php?edit_aboutus','_self')</script>";
		}
		}
?>


<?php } ?>