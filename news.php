<?php require_once('inc/db.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Alkebulan Group | News</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="news.css">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css" >
    
    <!--Font Awesome-->
    <link href="fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->
   
</head>
<body>
<?php 
  $get_project = "select * from newsimg";
  $run_get_project=mysqli_query($con,$get_project);
              while($row_project=mysqli_fetch_array($run_get_project)){
                $image=$row_project['image'];
  
              }
  
?>
<div class="father">
<div class="halfPage" style="background-image: url('admin_area/background_images/<?php echo $image;?>')";>
	<?php require_once('inc/nav.php'); ?>
</div>
 <div class="grid-view">
 <?php
$con	= mysqli_connect("localhost","id12561718_davey","12345"," id1256718_daveyal");

   global $con;
   $per_page=12;
   if(isset($_GET['page'])){
    $page = $_GET['page'];
  }
  else{
    $page=1;
  
    }
    $start_from = ($page-1)*$per_page;

	$get_news = "select * from news order by 1 DESC LIMIT $start_from,$per_page";

	$run_news = mysqli_query($con , $get_news);
    
	while ( $row_news=mysqli_fetch_array($run_news)) {
		# code..
       
		$news_id=$row_news['news_id'];

		$news_title=$row_news['news_title'];
		$news_description=$row_news['news_description'];
		$news_keywords=$row_news['news_keywords'];
		$news_ref_link=$row_news['news_ref_link'];
		$news_date=$row_news['date'];
    

        $news_img=$row_news['news_image'];

        echo "
        <div class='card' style='width: 18rem;'>
        <a target='_blank' href='$news_ref_link'>
     <img src='admin_area/news_images/$news_img' class='card-img-top' alt='...'>
     <div class='card-body'>
       <h5 class='card-text'>$news_title </h5>
       <p class='card-text'>$news_description </p>       
     </div>
   </a>
   </div>
   
      "  ;
      
    }    


    ?>
 	
  
   
</div>
<div class="page">
<ul class="pagination">
							<?php

								$query= "select * from news";
								$result = mysqli_query($con , $query);
								$total_records = mysqli_num_rows($result);
								$total_pages = ceil($total_records / $per_page);

								echo "
										<li>
											<a href='news.php?page=1'> ".'First Page'."</a>
										</li>

								";
								for($i=1; $i<=$total_pages; $i++){

									echo "
										<li>
											<a href='news.php?page=".$i."'> ".$i."</a>
										</li>

									";
								};
										echo "
										<li>
											<a href='news.php?page=$total_pages'> ".'Last Page'."</a>
										</li>

									";


							
							?>
            </ul>
              </div>
			  <hr />
<div class="Youtube-vid">
	<div class="iframe-control">
		

	</div>

		


<div class="main">

	

 	   </div>

 	   </div>




 

</div>





<?php require_once('inc/Footer.php'); ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="news.js"></script>

</body>
</html>