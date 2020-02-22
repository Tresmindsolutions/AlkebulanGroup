<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_contact'])){
        
        $edit_id = $_GET['edit_contact'];
        
        $get_contact = "select * from contact where contact_id='$edit_id'";
        
        $run_edit = mysqli_query($con,$get_contact);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $contact_id = $row_contact['contact_id'];
                                    
        
        $contact_country = $row_contact['contact_country'];
        
        $contact_address = $row_contact['contact_address'];

        $contact_phone = $row_contact['contact_phone'];
        
        $contact_email = $row_contact['contact_email'];
        
        $contact_map_link = $row_contact['contact_map_link'];
        

    }
        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert contact </title>
</head>
<body>
    
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
            <li class="active"><!-- active Begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit contact
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Edit contact 
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
              

                        <div class="form-group">
							<label class="col-md-3 control-label">Country</label>
							<div class="col-md-6">
								<input type="text" name="contact_country" class="form-control" required=>
							</div>
						</div>
                        
                        <div class="form-group">
							<label class="col-md-3 control-label">address</label>
							<div class="col-md-6">
								<input type="text" name="contact_address" class="form-control" required=>
							</div>
						</div>

                        <div class="form-group">
							<label class="col-md-3 control-label">Phone No.</label>
							<div class="col-md-6">
								<input type="text" name="contact_phone" class="form-control" required=>
							</div>
						</div>

                        <div class="form-group">
							<label class="col-md-3 control-label">Email</label>
							<div class="col-md-6">
								<input type="text" name="contact_email" class="form-control" required=>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label"> Map Link</label>
							<div class="col-md-6">
								<input type="text" name="contact_map_link" class="form-control" required=>
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
    
    $contact_country = $_POST['contact_country'];
	$contact_address = $_POST['contact_address'];
	$contact_phone = $_POST['contact_phone'];
    $contact_email = $_POST['contact_email'];
	$contact_map_link = $_POST['contact_map_link'];    
	
	
    $update_product = "update contactus set contact_country='$contact_country',contact_address='$contact_address',contact_phone='$contact_phone',contact_email='$contact_email',contact_map_link ='$contact_map_link'  where contact_id='$contact_id'";
    
    $run_product = mysqli_query($con,$update_product);
    
    if($run_product){
        
       echo "<script>alert('Your contact has been updated Successfully')</script>"; 
        
       echo "<script>window.open('index.php?view_contact','_self')</script>"; 
        
    }
    
}

?>


<?php } ?>