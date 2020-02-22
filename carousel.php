<?php require_once('inc/db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <link href="index.css" rel="stylesheet">
  <link href="carousel.css" rel="stylesheet">

  <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }

  </style>
</head>

<body>
<?php 
  $get_project = "select * from slider";
  $run_get_project=mysqli_query($con,$get_project);
              while($row_project=mysqli_fetch_array($run_get_project)){
                $slide1_image=$row_project['slide1_image'];
                $slide1_text=$row_project['slide1_text'];
                $slide1_text2=$row_project['slide1_subText'];
                $slide2_image=$row_project['slide2_image'];
                $slide2_text=$row_project['slide2_text'];
                $slide2_text2=$row_project['slide2_subText'];
                $slide3_image=$row_project['slide3_image'];
                $slide3_text=$row_project['slide3_text'];
                $slide3_text2=$row_project['slide3_subText'];

  
  
              }
  
?>
<div class="navi">
<?php require_once('inc/nav.php') ?>
  </div>
  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      
      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('admin_area/slides_images/<?php echo $slide1_image; ?>'); background-repeat: no-repeat; background-size: 100% 100%;">
              
              <!-- Content -->
            <!-- <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Learn Bootstrap 4 with MDB</strong>
              </h1>

              <p>
                <strong>Best & free guide of responsive web design</strong>
              </p>

             
            </div> -->
            <!-- Content -->
               <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
            <div class="text-on-image">
            <h3 class="main-text" ><?php echo $slide1_text; ?></h3>
            <h4 class="second-text"><?php echo $slide1_text2; ?></h4>    
          
          </div>
            </div>
        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('admin_area/slides_images/<?php echo $slide2_image; ?>'); background-repeat: no-repeat; background-size: 100% 100%;">
              <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
               <!-- Content -->
               <div class="text-on-image">
            <h3 class="main-text" ><?php echo $slide2_text; ?></h3>
            <h4 class="second-text"><?php echo $slide2_text2; ?></h4>    
          
          </div>
            <!-- Content -->
            </div>
        
        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('admin_area/slides_images/<?php echo $slide3_image; ?>'); background-repeat: no-repeat; background-size: 100% 100%;">
              <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
               <!-- Content -->
               <div class="text-on-image">
            <h3 class="main-text" ><?php echo $slide3_text; ?></h3>
            <h4 class="second-text"><?php echo $slide3_text2; ?></h4>    
          
          </div>
            <!-- Content -->
            </div> 
        
        </div>
      </div>
      <!--/Third slide-->

      
      
    
    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
     
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    
    </a>
      <!--/.Controls-->
      
  </div>
  <!--/.Carousel Wrapper-->


  <!-- SCRIPTS -->
  <!-- JQuery -->
  <!-- <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
 
  <script type="text/javascript" src="js/popper.min.js"></script>

  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/mdb.min.js"></script>
 
  <script type="text/javascript">
    
    new WOW().init();

  </script> -->
</body>

</html>
