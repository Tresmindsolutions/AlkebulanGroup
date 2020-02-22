<?php require_once('inc/db.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Insert products</title>
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
				<i class="fa fa-dashboard"></i>  Dashboard / Insert Products

			 </li>
		</ol>

	</div>
	
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-money fa-fw"></i> Insert Project
				</h3>

				</div>
				<div class="panel-body">
					<form method="post" class="form-horizontal" enctype="multipart/form-data">
						
						<div class="form-group">
							<label class="col-md-3 control-label">Project Title</label>
							<div class="col-md-6">
								<input type="text" name="project_title" class="form-control" required=>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Project Client</label>
							<div class="col-md-6">
								<input type="text" name="project_client" class="form-control" required=>
							</div>
						</div>
						

						<div class="form-group">
							<label class="col-md-3 control-label">Project Image </label>
							<div class="col-md-6">
								<input type="file" name="project_image" class="form-control" required=>
							</div>
						</div>

						

						<div class="form-group">
							<label class="col-md-3 control-label">Project Value</label>
							<div class="col-md-6">
								<input type="text" name="project_value" class="form-control" required=>
							</div>
						</div>

							<div class="form-group">
							<label class="col-md-3 control-label">Project Scope</label>
							<div class="col-md-6">
								<input type="text" name="project_scope" class="form-control" required=>
							</div>
						</div>

							<div class="form-group">
							<label class="col-md-3 control-label">Project Description</label>
							<div class="col-md-6">
								<textarea name="project_description" cols="19" rows="6" class="form-control"></textarea>
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

	$project_title = $_POST['project_title'];
	$project_value = $_POST['project_value'];
	$project_scope = $_POST['project_scope'];
	$project_client = $_POST['project_client'];
	$project_details = $_POST['project_description'];
	
	$project_image = $_FILES['project_image']['name'];

	$temp_name1 = $_FILES['project_image']['tmp_name'];
	
	move_uploaded_file($temp_name1,"project_images/$project_image");
	

	$insert_project = "insert into projects (project_title,project_value,project_scope,project_detail,project_img1,project_client) values('$project_title','$project_value','$project_scope','$project_details','$project_image','$project_client')"; 

		$run_project = mysqli_query($con,$insert_project);
		if($run_project){

			echo "<script>alert('project has been inserted sucessfully')</script>";
			echo "<script>window.open('index.php?insert_projects','_self')</script>";
		}
		else {
			echo "<script>alert('Inserting project failed!')</script>";
			echo "<script>window.open('index.php?insert_projects','_self')</script>";
		}
		}


?>