<?php require_once('inc/db.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Alkebulan Group | About Us</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="about.css">
	

</head> <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css" >
    
    <!--Font Awesome-->
    <link href="fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->

<body>
<?php 
			$get_project = "select * from aboutimg";
			$run_get_project=mysqli_query($con,$get_project);
              while($row_project=mysqli_fetch_array($run_get_project)){
                $image=$row_project['image'];
  
			  }
			
			  $get_about = "select * from aboutus";
			  $run_get_about=mysqli_query($con,$get_about);
						while($row_about=mysqli_fetch_array($run_get_about)){
							$about_content=$row_about['about_content'];
							$about_image=$row_about['about_image'];
							$founder1_image=$row_about['founder1_img'];
							$founder1_name=$row_about['founder1_name'];
							$founder1_designation=$row_about['founder1_designation'];
							$founder1_bio=$row_about['founder1_bio'];
							$founder2_image=$row_about['founder2_img'];
							$founder2_name=$row_about['founder2_name'];
							$founder2_designation=$row_about['founder2_designation'];
							$founder2_bio=$row_about['founder2_bio'];
						}
  
?>
	<div class="halfPage" style="background-image: url('admin_area/background_images/<?php echo $image; ?>')";>

	<?php require_once('inc/nav.php'); ?>
</div>
	<div class="about-father">
		
	<div class="intro">
		<div class="company-logo"> <img class="company" src="admin_area/aboutus_images/<?php echo $about_image; ?>" alt="Company Logo"/></div>
	<div class="intro-content-media">
		<h3 class="About-heading" style="color:#D4A200;">About Alkebulan Group</h3>
		<p class="intro-content"> 
			<?php echo $about_content; ?>
		</p>
	</div>

	 </div>


	
	


	 <div>
	  	<h3 class="about-start" style="color:#D4A200;">Co Founders</h3>
	  		

	 </div>

 	<div class="about-main"> 
 		

 	<div class="first-owner">
 		<div>
 			<img class="Davey" src="admin_area/aboutus_images/<?php echo $founder1_image; ?>" alt="Founder Image"/>
 			<h4 class="owner-name"><?php echo $founder1_name; ?> <br> <?php echo $founder1_designation; ?>  </h4>
 		</div>
 		<div>
 		<p class="about-content"> 
		 <?php echo $founder1_bio; ?><br />
		 <a target="_blank"  href="https://www.instagram.com/theemileheskey/"><img style="width:30px;" src="https://img.icons8.com/cute-clipart/64/000000/instagram-new.png"> </a>
		 <a  target="_blank" href="https://twitter.com/emileheskeyuk" > <img style="width:30px;" src="https://img.icons8.com/cute-clipart/64/000000/twitter.png"></a>
		 </p>
		</div>



</div>


	<div class="Second-owner">
			<div> <img src="admin_area/aboutus_images/<?php echo $founder2_image; ?>" class="owner-two" alt="Founder Image">
			<h4 class="owner-name"><?php echo $founder2_name; ?> <br>  <?php echo $founder2_designation; ?>  </h4></div>
			<p class="about-content">
			<?php echo $founder2_bio; ?> <br/>
		     <a target="_blank" href="https://www.instagram.com/drdaveys/"> <img style="width:30px;" src="https://img.icons8.com/cute-clipart/64/000000/instagram-new.png"></a>
		 <a target="_blank" href="https://twitter.com/daveysimango"><img style="width:30px;" src="https://img.icons8.com/cute-clipart/64/000000/twitter.png"></a>
			</p>
	 </div>



 	</div>

 </div>

</div>

<?php require_once('inc/Footer.php'); ?>
</body>
</html>