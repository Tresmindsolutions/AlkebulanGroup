<?php require_once('inc/db.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Insert contact</title>
	<link rel="stylesheet" href="css/bootstrap-337.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	   <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	
	<link href="css/responsive.css" rel="stylesheet">

	
</head>
<body>
	
<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i>  Dashboard / Insert contact

			 </li>
		</ol>

	</div>
	
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-money fa-fw"></i> Insert contact
				</h3>

				</div>
				<div class="panel-body">
					<form method="post" class="form-horizontal" enctype="multipart/form-data">
						
						
						
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


						<div class="form-group">
							<label class="col-md-3 control-label"></label>
							<div class="col-md-6">
								<input type="submit" name="submit" value="submit" class="btn btn-primary form-control" >
							</div>
						</div>


					</form>
					
				</div>
			</div>

		</div>

	</div>

</div>


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
<script src="js/tinymce/tinymce.min.js"></script>

</body>
</html>



<?php
if(isset($_POST['submit'])){

	$contact_country = $_POST['contact_country'];
	$contact_address = $_POST['contact_address'];
	$contact_phone = $_POST['contact_phone'];
    $contact_email = $_POST['contact_email'];
	$contact_map_link = $_POST['contact_map_link'];    
	

	
	

	$insert_contact = "insert into contactus (contact_country,contact_address,contact_phone,contact_email,contact_map_link) values('$contact_country','$contact_address','$contact_phone','$contact_email','$contact_map_link')"; 

		$run_contact = mysqli_query($con,$insert_contact);
		if($run_contact){

			echo "<script>alert('contact has been inserted sucessfully')</script>";
			echo "<script>window.open('index.php?insert_contact','_self')</script>";
		}
		else {
			echo "<script>alert('Inserting contact failed!')</script>";
			echo "<script>window.open('index.php?insert_contact','_self')</script>";
		}
		}


?>