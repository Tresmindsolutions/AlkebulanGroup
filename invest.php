<?php require_once('inc/db.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Alkebulan Group | Investment</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="invest.css">
    <link rel="stylesheet" href="index.css" >
      <!--Font Awesome-->
	  <link href="fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->

</head>
<body>
<?php 
  $get_project = "select * from investmentimg";
  $run_get_project=mysqli_query($con,$get_project);
              while($row_project=mysqli_fetch_array($run_get_project)){
                $image=$row_project['image'];
  
              }
  
?>
<div class="halfPage" style="background-image: url('admin_area/background_images/<?php echo $image; ?>')";> 
<?php require_once('inc/nav.php') ?>
</div>
<div class="father">

 <div class="grid-view">
 <?php
$con= mysqli_connect("localhost","id12561718_davey","12345"," id1256718_daveyal");

   global $con;
	$get_investment = "select * from investment order by 1 DESC ";

	$run_investment = mysqli_query($con , $get_investment);
    
	while ( $row_investment=mysqli_fetch_array($run_investment)) {
		# code..
       
		$invest_id=$row_investment['invest_id'];

		$invest_title=$row_investment['invest_title'];
		$invest_title2=$row_investment['invest_title2'];


        $invest_img=$row_investment['invest_img'];

        echo "
        <div class='card' style='width: 18rem;'>
        <a href='results.php?invest_id=$invest_id'>
     <img src='admin_area/investmentimg/$invest_img' class='card-img-top' alt='...'>
     <div class='card-body'>
       <p class='card-text'>$invest_title <br/> $invest_title2</p>
     </div>
   </a>
   </div>
   
      "  ;
      
    }    


    ?>
 	



</div>

 

</div>
<?php require_once('inc/Footer.php'); ?>
</body>
</html>