<?php require_once('inc/db.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Insert Investment</title>
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
				<i class="fa fa-dashboard"></i>  Dashboard / Insert Investments

			 </li>
		</ol>

	</div>
	
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-money fa-fw"></i> Insert Investments
				</h3>

				</div>
				<div class="panel-body">
					<form method="post" class="form-horizontal" enctype="multipart/form-data">
						
						<div class="form-group">
							<label class="col-md-3 control-label">Investment Title</label>
							<div class="col-md-6">
								<input type="text" name="investment_title" class="form-control" required=>
							</div>
						</div>

                        <div class="form-group">
							<label class="col-md-3 control-label">Investment Title2</label>
							<div class="col-md-6">
								<input type="text" name="investment_title2" class="form-control" required=>
							</div>
						</div>


						<div class="form-group">
							<label class="col-md-3 control-label">Investment Image </label>
							<div class="col-md-6">
								<input type="file" name="investment_image" class="form-control" required=>
							</div>
						</div>

						

					

							<div class="form-group">
							<label class="col-md-3 control-label">Investment Description</label>
							<div class="col-md-6">
								<textarea name="investment_description" cols="19" rows="6" class="form-control"></textarea>
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

	$investment_title = $_POST['investment_title'];
	$investment_title2 = $_POST['investment_title2'];
	$investment_details = $_POST['investment_description'];
	
	$investment_image = $_FILES['investment_image']['name'];

	$temp_name1 = $_FILES['investment_image']['tmp_name'];
	
	move_uploaded_file($temp_name1,"investmentimg/$investment_image");
	

	$insert_investment = "insert into investment(invest_title,invest_title2,invest_img,invest_desc) values('$investment_title','$investment_title2','$investment_image','$investment_details')"; 

		$run_investment = mysqli_query($con,$insert_investment);
		if($run_investment){

			echo "<script>alert('project has been inserted sucessfully')</script>";
			echo "<script>window.open('index.php?insert_investment','_self')</script>";
		}
		else {
			echo "<script>alert('Inserting project failed!')</script>";
			echo "<script>window.open('index.php?insert_investment','_self')</script>";
		}
		}


?>