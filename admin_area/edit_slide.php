<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_slide'])){
        
        $edit_slide_id = $_GET['edit_slide'];
        
        $edit_slide = "select * from slider where slide_id='$edit_slide_id'";
        
        $run_edit_slide = mysqli_query($con,$edit_slide);
        
        $row_edit_slide = mysqli_fetch_array($run_edit_slide);
        
        $slide_id = $row_edit_slide['slide_id'];
        
        $slide1_name = $row_edit_slide['slide1_text'];

        $slide1_name2 = $row_edit_slide['slide1_subText'];
        
        $slide1_image = $row_edit_slide['slide1_image'];

        $slide2_name = $row_edit_slide['slide2_text'];

        $slide2_name2 = $row_edit_slide['slide2_subText'];
        
        $slide2_image = $row_edit_slide['slide2_image'];

        $slide3_name = $row_edit_slide['slide3_text'];

        $slide3_name2 = $row_edit_slide['slide3_subText'];
        
        $slide3_image = $row_edit_slide['slide3_image'];
        
    }

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit Slide
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-money fa-fw"></i> Edit Slide
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                <div class="form-group"><!-- form-group begin -->
                    
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        First Slide Image
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input type="file" name="slide1_image" class="form-control" required>
                        <br/>
                            
                            <img src="slides_images/<?php echo $slide1_image; ?>" class="img-responsive">
                    
                    </div><!-- col-md-6 finish -->
                
                </div><!-- form-group finish -->

                <div class="form-group"><!-- form-group begin -->
                
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        Frist Image Text 
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input name="slide1_name" type="text" class="form-control" value="<?php echo $slide1_name; ?>">
                    
                    </div><!-- col-md-6 finish -->
                
                </div><!-- form-group finish -->

                <div class="form-group"><!-- form-group begin -->
                    
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        Frist Image Sub Text 
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input name="slide1_name2" type="text" class="form-control"  value="<?php echo $slide1_name2; ?>">
                    
                    </div><!-- col-md-6 finish -->
                
                </div><!-- form-group finish -->

                <div class="form-group"><!-- form-group begin -->
                
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        Second Slide Image
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input type="file" name="slide2_image" class="form-control" required>
                        <br/>
                            
                            <img src="slides_images/<?php echo $slide2_image; ?>" class="img-responsive">
                    
                    </div><!-- col-md-6 finish -->
                
                </div><!-- form-group finish -->

                <div class="form-group"><!-- form-group begin -->
                
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        Second Image Text 
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input name="slide2_name" type="text" class="form-control" value="<?php echo $slide2_name; ?>">
                    
                    </div><!-- col-md-6 finish -->
                
                </div><!-- form-group finish -->

                <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Second Image Sub Text 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="slide2_name2" type="text" class="form-control"  value="<?php echo $slide2_name2; ?>">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->


                <div class="form-group"><!-- form-group begin -->
                
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        Third Slide Image
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input type="file" name="slide3_image" class="form-control" required>
                        <br/>
                            
                            <img src="slides_images/<?php echo $slide3_image; ?>" class="img-responsive">
                    
                    </div><!-- col-md-6 finish -->
                
                </div><!-- form-group finish -->

                <div class="form-group"><!-- form-group begin -->
                
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        Thrid Image Text 
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input name="slide3_name" type="text" class="form-control" value="<?php echo $slide3_name; ?>">
                    
                    </div><!-- col-md-6 finish -->
                
                </div><!-- form-group finish -->

                <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Third Image Sub Text 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="slide3_name2" type="text" class="form-control"  value="<?php echo $slide3_name2; ?>">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input type="submit" name="update" value="Update Now" class="btn btn-primary form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php  

    if(isset($_POST['update'])){
        
        $slide1_name = $_POST['slide1_name'];

        $slide1_name2 = $_POST['slide1_name2'];
        
        $slide1_image = $_FILES['slide1_image']['name'];

        $temp_name = $_FILES['slide1_image']['tmp_name'];

        $slide2_name = $_POST['slide2_name'];

        $slide2_name2 = $_POST['slide2_name2'];
        
        $slide2_image = $_FILES['slide2_image']['name'];

        $temp2_name = $_FILES['slide2_image']['tmp_name'];

        $slide3_name = $_POST['slide3_name'];

        $slide3_name2 = $_POST['slide3_name2'];
        
        $slide3_image = $_FILES['slide3_image']['name'];
        
        $temp3_name = $_FILES['slide3_image']['tmp_name'];
        
        move_uploaded_file($temp_name,"slides_images/$slide1_image");
        move_uploaded_file($temp2_name,"slides_images/$slide2_image");
        move_uploaded_file($temp3_name,"slides_images/$slide3_image");
        
        $update_slide = "update slider set slide1_text='$slide1_name',slide1_image='$slide1_image',slide2_text='$slide2_name',slide2_image='$slide2_image',slide3_text='$slide3_name',slide3_image='$slide3_image',slide1_subText='$slide1_name2',slide2_subText='$slide2_name2',slide3_subText='$slide3_name2' where slide_id='$slide_id'";
        
        $run_update_slide = mysqli_query($con,$update_slide);
        
        if($run_update_slide){
            
            echo "<script>alert('Your Slide has been updated Successfully')</script>"; 
        
            echo "<script>window.open('index.php?view_slides','_self')</script>";
            
        }
        
    }

?>

<?php } ?>