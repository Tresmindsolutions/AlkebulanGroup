<?php require_once('inc/db.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Insert portfolio</title>
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
				<i class="fa fa-dashboard"></i>  Dashboard / Insert portfolio

			 </li>
		</ol>

	</div>
	
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-money fa-fw"></i> Insert portfolio
				</h3>

				</div>
				<div class="panel-body">
					<form method="post" class="form-horizontal" enctype="multipart/form-data">
						
						<div class="form-group">
							<label class="col-md-3 control-label">portfolio name</label>
							<div class="col-md-6">
								<input type="text" name="portfolio_title" class="form-control" required=>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label">portfolio Image </label>
							<div class="col-md-6">
								<input type="file" name="portfolio_image" class="form-control" required=>
							</div>
						</div>

						

						<div class="form-group">
							<label class="col-md-3 control-label">portfolio Info</label>
							<div class="col-md-6">
								<input type="text" name="portfolio_info" class="form-control" required=>
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

	$portfolio_title = $_POST['portfolio_title'];
	$portfolio_info = $_POST['portfolio_info'];
	
	$portfolio_image = $_FILES['portfolio_image']['name'];

	$temp_name1 = $_FILES['portfolio_image']['tmp_name'];
	
	move_uploaded_file($temp_name1,"portfolio_images/$portfolio_image");
	

	$insert_portfolio = "insert into portfolio (portfolio_title,portfolio_img,portfolio_description) values('$portfolio_title','$portfolio_image','$portfolio_info')"; 

		$run_portfolio = mysqli_query($con,$insert_portfolio);
		if($run_portfolio){

			echo "<script>alert('portfolio has been inserted sucessfully')</script>";
			echo "<script>window.open('index.php?insert_portfolio','_self')</script>";
		}
		else {
			echo "<script>alert('Inserting portfolio failed!')</script>";
			echo "<script>window.open('index.php?insert_portfolio','_self')</script>";
		}
		}


?>