<?php require_once('inc/db.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Insert partner</title>
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
				<i class="fa fa-dashboard"></i>  Dashboard / Insert partner

			 </li>
		</ol>

	</div>
	
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-money fa-fw"></i> Insert partner
				</h3>

				</div>
				<div class="panel-body">
					<form method="post" class="form-horizontal" enctype="multipart/form-data">
						
						<div class="form-group">
							<label class="col-md-3 control-label">partner name</label>
							<div class="col-md-6">
								<input type="text" name="partner_title" class="form-control" required=>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label">partner Image </label>
							<div class="col-md-6">
								<input type="file" name="partner_image" class="form-control" required=>
							</div>
						</div>

						

						<div class="form-group">
							<label class="col-md-3 control-label">partner Info</label>
							<div class="col-md-6">
								<input type="text" name="partner_info" class="form-control" required=>
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

	$partner_title = $_POST['partner_title'];
	$partner_info = $_POST['partner_info'];
	
	$partner_image = $_FILES['partner_image']['name'];

	$temp_name1 = $_FILES['partner_image']['tmp_name'];
	
	move_uploaded_file($temp_name1,"partner_images/$partner_image");
	

	$insert_partner = "insert into partner (partner_name,partner_image,partner_info) values('$partner_title','$partner_image','$partner_info')"; 

		$run_partner = mysqli_query($con,$insert_partner);
		if($run_partner){

			echo "<script>alert('partner has been inserted sucessfully')</script>";
			echo "<script>window.open('index.php?insert_partner','_self')</script>";
		}
		else {
			echo "<script>alert('Inserting partner failed!')</script>";
			echo "<script>window.open('index.php?insert_partner','_self')</script>";
		}
		}


?>