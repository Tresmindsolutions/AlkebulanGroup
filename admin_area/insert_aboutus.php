<?php require_once('inc/db.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Insert aboutus</title>
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
				<i class="fa fa-dashboard"></i>  Dashboard / Insert aboutus

			 </li>
		</ol>

	</div>
	
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-money fa-fw"></i> Insert About Us
				</h3>

				</div>
				<div class="panel-body">
					<form method="post" class="form-horizontal" enctype="multipart/form-data">
						
                    <div class="form-group">
							<label class="col-md-3 control-label">About Content</label>
							<div class="col-md-6">
								<textarea name="aboutus_content" cols="19" rows="6" class="form-control"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">About Logo Image </label>
							<div class="col-md-6">
								<input type="file" name="about_logo_image" class="form-control" required=>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Founder1 Image </label>
							<div class="col-md-6">
								<input type="file" name="founder1_image" class="form-control" required=>
							</div>
						</div>

						

						<div class="form-group">
							<label class="col-md-3 control-label">Founder1 Name</label>
							<div class="col-md-6">
								<input type="text" name="founder1_name" class="form-control" required=>
							</div>
						</div>

							<div class="form-group">
							<label class="col-md-3 control-label">Founder1 Designation</label>
							<div class="col-md-6">
								<input type="text" name="founder_designation" class="form-control" required=>
							</div>
						</div>

							<div class="form-group">
							<label class="col-md-3 control-label">Founder1 Bio</label>
							<div class="col-md-6">
								<textarea name="founder1_bio" cols="19" rows="6" class="form-control"></textarea>
							</div>
						</div>

                        <div class="form-group">
							<label class="col-md-3 control-label">Founder2 Image </label>
							<div class="col-md-6">
								<input type="file" name="founder2_image" class="form-control" required=>
							</div>
						</div>

						

						<div class="form-group">
							<label class="col-md-3 control-label">Founder2 Name</label>
							<div class="col-md-6">
								<input type="text" name="founder2_name" class="form-control" required=>
							</div>
						</div>

							<div class="form-group">
							<label class="col-md-3 control-label">Founder2 Designation</label>
							<div class="col-md-6">
								<input type="text" name="founder2_designation" class="form-control" required=>
							</div>
						</div>

							<div class="form-group">
							<label class="col-md-3 control-label">Founder2 Bio</label>
							<div class="col-md-6">
								<textarea name="founder2_bio" cols="19" rows="6" class="form-control"></textarea>
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
	

	$insert_aboutus = "insert into aboutus (about_content,about_image,founder1_img,founder1_name,founder1_designation,founder1_bio,founder2_img,founder2_name,founder2_designation,founder2_bio) values('$aboutus_content','$aboutus_logo_image','$founder1_image','$founder1_name','$founder1_designation','$founder1_bio','$founder2_image','$founder2_name','$founder2_designation','$founder2_bio')"; 

		$run_aboutus = mysqli_query($con,$insert_aboutus);
		if($run_aboutus){

			echo "<script>alert('aboutus has been inserted sucessfully')</script>";
			echo "<script>window.open('index.php?insert_aboutus','_self')</script>";
		}
		else {
			echo "<script>alert('Inserting aboutus failed!')</script>";
			echo "<script>window.open('index.php?insert_aboutus','_self')</script>";
		}
		}


?>