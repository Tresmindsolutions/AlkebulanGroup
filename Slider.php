<!DOCTYPE html>
<html>
<head>
	<title>Slider</title>
		<!-- Latest compiled and minified CSS -->
<!-- https://xstore.8theme.com/demos/hosting/-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="index.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="Slider.css">
</head>
<body>


<div class="halfPage">
    <?php require_once('inc/nav.php'); ?>
    </div>
    <br />
 
 

<!--Item slider text-->


<div class="container">
  <div class="row" id="slider-text">
    <div class="col-md-6" >
      <h2 class="text-center">NEW COLLECTION</h2>
    </div>
  </div>
</div>

<!-- Item slider-->
<div class="container-fluid">

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="itemslider">
        <div class="carousel-inner">

          <?php
          $db	= mysqli_connect("localhost","root","","alkebulan");
          
          
          
          
             global $db;
            $get_projects = "select * from projects order by 1 DESC ";
          
            $run_projects = mysqli_query($db , $get_projects);
              if($run_projects ){
                $a = 1;
              
            while ( $row_projects=mysqli_fetch_array($run_projects)) {
              # code..
                 
              $pro_id=$row_projects['project_id'];
          
              $pro_title=$row_projects['project_title'];
          
              $pro_client=$row_projects['project_client'];
          
                  $pro_img1=$row_projects['project_img1'];
          
                 $item =  ($a == 1) ? 'active' : '';
                  echo "
                  <div class='item $item'>
                   <div class='col-xs-12 col-sm-6 col-md-2'>
                  <a href='project_details.php?pro_id=$pro_id'><img src='admin_area/project_images/$pro_img1'></a>
                  <h4 class='text-center'>$pro_title</h4>
                  </div>
                     
                  </div>
                "  ;
                 $a++;
              }    
          }
          else{
              echo "Coming soon..";
          }    
              ?>

        <div id="slider-control">
        <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://cdn0.iconfinder.com/data/icons/website-kit-2/512/icon_402-512.png" alt="Left" class="img-responsive"></a>
        <a class="right carousel-control" href="#itemslider" data-slide="next">
          <img src="http://pixsector.com/cache/81183b13/avcc910c4ee5888b858fe.png" alt="Right"  class="img-responsive"></a>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- Item slider end-->

<script>
	$(document).ready(function(){

$('#itemslider').carousel({ interval: 3000 });

$('.carousel-showmanymoveone .item').each(function(){
var itemToClone = $(this);

for (var i=1;i<6;i++) {
itemToClone = itemToClone.next();

if (!itemToClone.length) {
itemToClone = $(this).siblings(':first');
}

itemToClone.children(':first-child').clone()
.addClass("cloneditem-"+(i))
.appendTo($(this));
}
});
});
</script>
    <?php require_once('inc/footer.php');?>

</body>
</html>