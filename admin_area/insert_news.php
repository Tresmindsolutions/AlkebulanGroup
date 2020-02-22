<?php require_once('inc/db.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Insert News</title>
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
				<i class="fa fa-dashboard"></i>  Dashboard / Insert News

			 </li>
		</ol>

	</div>
	
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-money fa-fw"></i> Insert News
				</h3>

				</div>
				<div class="panel-body">
					<form method="post" class="form-horizontal" enctype="multipart/form-data">
						
						<div class="form-group">
							<label class="col-md-3 control-label">News Title</label>
							<div class="col-md-6">
								<input type="text" name="news_title" class="form-control" required=>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label">News Image </label>
							<div class="col-md-6">
								<input type="file" name="news_image" class="form-control" required=>
							</div>
						</div>

						

						<div class="form-group">
							<label class="col-md-3 control-label">News Ref Link</label>
							<div class="col-md-6">
								<input type="text" name="news_ref_link" class="form-control" required=>
							</div>
						</div>

							<div class="form-group">
							<label class="col-md-3 control-label">News Keywords</label>
							<div class="col-md-6">
								<input type="text" name="news_keywords" class="form-control" required=>
							</div>
						</div>

							<div class="form-group">
							<label class="col-md-3 control-label">News Description</label>
							<div class="col-md-6">
								<textarea name="news_description" cols="19" rows="6" class="form-control"></textarea>
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

	$news_title = $_POST['news_title'];
	$news_ref_link = $_POST['news_ref_link'];
	$news_keywords = $_POST['news_keywords'];
	$news_description = $_POST['news_description'];
	
	$news_image = $_FILES['news_image']['name'];

	$temp_name1 = $_FILES['news_image']['tmp_name'];
	
	move_uploaded_file($temp_name1,"news_images/$news_image");
	

	$insert_news = "insert into news (news_title,news_image,news_description,news_keywords,news_ref_link,date) values('$news_title','$news_image','$news_description','$news_keywords','$news_ref_link', CURDATE())"; 

		$run_news = mysqli_query($con,$insert_news);
		if($run_news){

			echo "<script>alert('news has been inserted sucessfully')</script>";
			echo "<script>window.open('index.php?insert_news','_self')</script>";
		}
		else {
			echo "<script>alert('Inserting news failed!')</script>";
			echo "<script>window.open('index.php?insert_news','_self')</script>";
		}
		}


?>