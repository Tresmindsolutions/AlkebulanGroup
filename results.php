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
	if(isset($_GET['invest_id'])){
	$invest_id= $_GET['invest_id'];

}
$get_investment = "select * from investment where invest_id='$invest_id'";
$run_get_investment=mysqli_query($con,$get_investment);
						while($row_investment=mysqli_fetch_array($run_get_investment)){
							$invest_title=$row_investment['invest_title'];
							$invest_title2=$row_investment['invest_title2'];
							$invest_details=$row_investment['invest_desc'];
							$invest_img=$row_investment['invest_img'];



						}



?>
<?php require_once('inc/nav.php') ?>
	<div class="main-body"> 

		<div class="frame">
		<img src='admin_area/investmentimg/<?php echo $invest_img?>'/>
		
	</div>

	<div class="content-invest"> 
		<h2 style="border-bottom:0px;padding:10px; letter-spacing:1px;color:#D4A200;"><?php echo $invest_title ?> </h2> <h5 class="result-head" style="color:#D4A200;"><?php echo $invest_title2 ?> </h5>
		

		<p class="para"> 
		<?php  echo $invest_details ?>
		</p>
		


	</div>


</div>	
<?php require_once('inc/Footer.php'); ?>

</body>
</html>