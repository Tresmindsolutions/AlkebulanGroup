<?php require_once('inc/db.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Searched Results</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="results.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css" >
      <!--Font Awesome-->
	  <link href="fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->

</head>
<body>
<?php 
	if(isset($_GET['pro_id'])){
	$project_id= $_GET['pro_id'];

}
$get_project = "select * from projects where project_id='$project_id'";
$run_get_project=mysqli_query($con,$get_project);
						while($row_project=mysqli_fetch_array($run_get_project)){
							$pro_title=$row_project['project_title'];
							$client_name=$row_project['project_client'];
							$pro_value=$row_project['project_value'];
							$pro_scope=$row_project['project_scope'];
							$pro_details=$row_project['project_detail'];
							$pro_img1=$row_project['project_img1'];



						}

?>

<?php require_once('inc/nav.php') ?>
	<div class="main-body"> 

		<div class="frame">
		<img src='admin_area/project_images/<?php echo $pro_img1 ?>'/>
		
	</div>

    <div class="content-box">
		 	<h4 class="Cheading" style="color:#D4A200;"><?php echo $pro_title ?></h4>

		 	<p class="brief"> <?php echo $pro_details ?>.</p>

		  </div>

		  <table class="table-content">
		  	
		  	<tr > 
		  		<th> Client:</th>
		  		<td><p><?php echo $client_name ?>.</p></td>

		  	</tr>

		  	<tr >
		  		<th>Project Value:</th>
		  		<td><p><?php echo $pro_value ?>.</p></td>

		  	</tr>

		  	<tr >
		  		<th>Project Scope: </th>
		  		<td><p><?php echo $pro_scope ?>.</p></td>
		  	</tr>


		  </table>



</div>	
<?php require_once('inc/Footer.php'); ?>

</body>
</html>