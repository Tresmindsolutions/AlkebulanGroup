<!DOCTYPE html>
<html>
<head>
	<title>Footer</title>
	<link rel="stylesheet" href="Footer.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	

<footer>
	<div class="footer">

		<div class="box-1"> 
			<h3 class="heading">About Us</h3>
			
			<br>
			<p class="about-info">	
				Alkebulan Group is an organisation dedicated to the development of Humanitarian Projects, transforming Africa and third world countries with a portfolio spanning in Energy, Healthcare, Mining, Infrastructure, Oil and Gas , ICT, Agriculture, Manufacturing and Banking Solutions. </P>
		</div>


		
		<div class="box-2">

			<div> 
			<h3 class="heading">Contact Us</h3> <br>
		</div>
			
			<div class="hhpp">
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
		<h5>$contact_country</h5> <p> $contact_address<br/> telephone: $contact_phone <br/> Email: $contact_email</p>
      "  ;
      
    }  
  ?>  
			</div>

		</div>

		<div class="box-3">
		 <h3 class="heading"> Connect With Us</h3>
			<ul class="social-links">
				<li><a target="_blank" href="https://www.facebook.com/alkebulangroup" class="fa fa-facebook"></a></li>
				<li><a target="_blank" href="https://www.twitter.com/alkegroup" class="fa fa-twitter"></a></li>
				<li><a target="_blank" href="https://www.instagram.com/alkebulangroup/" class="fa fa-instagram"></a></li>
			</ul>
		</div>

	    </div>

	 



</footer>
<div class="copyrights">
	<p>	COPYRIGHT &copy;<script type="text/javascript">
 	 document.write(new Date().getFullYear());
	</script> Alekbulan Group. ALL RIGHTS RESERVED.
	Designed & Developed by <a target="_blank" href="https://www.tresmind.com"> TRESMIND SOLUTIONS  </a> </p>
	</div>
</body>
</html>