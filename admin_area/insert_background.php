<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Insert Background
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-money fa-fw"></i> Insert Background
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                   
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            AboutUs Background Image
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input type="file" name="aboutus" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->

                    <div class="form-group"><!-- form-group begin -->
                    
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        Investment Background Image
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input type="file" name="investment" class="form-control">
                    
                    </div><!-- col-md-6 finish -->

                    </div><!-- form-group finish -->

                    <div class="form-group"><!-- form-group begin -->
                    
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        Projects Background Image
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input type="file" name="project" class="form-control">
                    
                    </div><!-- col-md-6 finish -->

                    </div><!-- form-group finish -->

                    <div class="form-group"><!-- form-group begin -->
                    
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        News Background Image
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input type="file" name="news" class="form-control">
                    
                    </div><!-- col-md-6 finish -->

                    </div><!-- form-group finish -->

                    <div class="form-group"><!-- form-group begin -->
                    
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        ContactUs Background Image
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input type="file" name="contactus" class="form-control">
                    
                    </div><!-- col-md-6 finish -->

                    </div><!-- form-group finish -->

                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input type="submit" name="submit" value="Submit Now" class="btn btn-primary form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php  

    if(isset($_POST['submit'])){
        
       
        
        $aboutus_image = $_FILES['aboutus']['name'];
        
        $temp_name1 = $_FILES['aboutus']['tmp_name'];

        $investment_image = $_FILES['investment']['name'];
        
        $temp_name2 = $_FILES['investment']['tmp_name'];

        $project_image = $_FILES['project']['name'];
        
        $temp_name3 = $_FILES['project']['tmp_name'];

        $news_image = $_FILES['news']['name'];
        
        $temp_name4 = $_FILES['news']['tmp_name'];

        $contactus_image = $_FILES['contactus']['name'];
        
        $temp_name5 = $_FILES['contactus']['tmp_name'];
        
        move_uploaded_file($temp_name1,"background_images/$aboutus_image");
	    move_uploaded_file($temp_name2,"background_images/$investment_image");
	    move_uploaded_file($temp_name3,"background_images/$project_image");
	    move_uploaded_file($temp_name4,"background_images/$news_image");
	    move_uploaded_file($temp_name5,"background_images/$contactus_image");
        
        // $insert_background = "insert into background (aboutus_img,investment_img,projects_img,news_img,contact_img) values('$aboutus_image','$investment_image','$project_image','$news_image','$contactus_image')"; 
        $insert_about = "insert into aboutimg (image) values('$aboutus_image')";
        $insert_investment = "insert into investmentimg (image) values('$investment_image')"; 
        $insert_project = "insert into projectimg (image) values('$project_image')"; 
        $insert_news = "insert into newsimg (image) values('$news_image')"; 
        $insert_contact = "insert into contactimg (image) values('$contactus_image')"; 


        $run_about = mysqli_query($con,$insert_about);
		$run_investment = mysqli_query($con,$insert_investment);
		$run_project = mysqli_query($con,$insert_project);
		$run_news = mysqli_query($con,$insert_news);
		$run_contact = mysqli_query($con,$insert_contact);
        
		if($run_about || $run_investment || $run_project || $run_news || $run_contact){

			echo "<script>alert('background has been inserted sucessfully')</script>";
			echo "<script>window.open('index.php?insert_background','_self')</script>";
		}
		else {
			echo "<script>alert('Inserting background failed!')</script>";
			echo "<script>window.open('index.php?insert_background','_self')</script>";
		}
		}

       
        
    

?>

<?php } ?>