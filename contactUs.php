<?php require_once('inc/db.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Alkebulan Group | Contact Us</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="contact.css">
    
     <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css" >
    
    <!--Font Awesome-->
    <link href="fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->
   
</head>

<body>
<?php 
  $get_project = "select * from contactimg";
  $run_get_project=mysqli_query($con,$get_project);
              while($row_project=mysqli_fetch_array($run_get_project)){
                $image=$row_project['image'];
  
              }
  
?>
<div class="halfPage" style="background-image: url('admin_area/background_images/<?php echo $image; ?>')";>
	<?php require_once('inc/nav.php'); ?>
</div>
	<div class="main-contact">
		<div class="contact-grid-view">
			<div class="world-map"> 
				<img src="map.jpg" class="map">
			</div>

			<div class="locations"> 
      <?php

$get_contact = "select * from contactus";
                                
$run_contact = mysqli_query($con,$get_contact);

while($row_contact=mysqli_fetch_array($run_contact)){
    
    $contact_id = $row_contact['contact_id'];
        
    $contact_country = $row_contact['contact_country'];
    
    $contact_address = $row_contact['contact_address'];

    $contact_phone = $row_contact['contact_phone'];
    
    $contact_email = $row_contact['contact_email'];
    
    $contact_map_link = $row_contact['contact_map_link'];

       
        echo "
        <div class='address'>
            <h3 style='color:#D4A200;'>$contact_country:</h3>
            <p>$contact_address</p>
            <p>Phone: $contact_phone</p>
             <p>Email: $contact_email</p>
             <br/>
            <a target='_blank' href='$contact_map_link'> View Map and Directions</a>
        </div>
      "  ;
      
    }  
  ?>  
				


       
            
           
            
            

        


			</div>


		 </div>


     </div>
   
   <?php require_once('inc/Footer.php');?>
     
</body>
</html>