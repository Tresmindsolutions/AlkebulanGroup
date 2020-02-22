<?php 
require_once('inc/db.php');
require_once('inc/top.php');


?>
<body>
<?php require_once('carousel.php') ?>
<div class = "home-parent" >
    <section class="design_area p_120">
            <div class="container">
                <div class="design_inner row">
                    <div class="col-lg-5">
                        <img class="img-fluid" src="img/design.jpg" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div class="design_left_text">
                            
                            <h2 Style="font-weight:bold;color:#D4A200;">Alkebulan Group </h2>
                            <h6 style="color:#D4A200;"> Infrastructure Investments </h6>
                            <h5 style="color:#D4A200;">Development of Humanitarian Projects</h5>
                            <p>Alkebulan Group is an organisation dedicated to the development of Humanitarian Projects, transforming Africa and third world countries with a portfolio spanning in Energy, Healthcare, Mining, Infrastructure, Oil and Gas , ICT, Agriculture, Manufacturing and Banking Solutions. </p>    
                            <br />
                            <a class="main_btn" href="about.php">More About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        
        <!--================Post Slider Area =================-->

        <section class="post_slider_area" Style="margin-bottom:100px">
            <div class="main_title">
                <h2 style="color:#D4A200;">Portfolio</h2>
                <p>Energy, Mining, Infrastructure, Oil & Gas, Healthcare, Agriculture, Manufacturing.</p>
            </div>
            <div class="post_slider_inner owl-carousel">


        <?php
         $get_portfolio = "select * from portfolio order by 1 DESC ";

	$run_portfolio = mysqli_query($con , $get_portfolio);
    
	while ( $row_portfolio=mysqli_fetch_array($run_portfolio)) {
		# code..
       
		$port_id=$row_portfolio['portfolio_id'];

		$port_title=$row_portfolio['portfolio_title'];

		$port_info=$row_portfolio['portfolio_description'];

        $port_img1=$row_portfolio['portfolio_img'];

      
        echo "
        <div class='item'>
                    <div class='post_s_item'>
                        <div class='post_img'>
                            <img src='admin_area/portfolio_images/$port_img1' alt=''>
                        </div>
                        <div class='post_text'>
                            <a href='invest.php'><h4>$port_title</h4></a>
                            <p>$port_info</p>
                            <a class='main_btn' href='invest.php'>View Details</a>
                        </div>
                    </div>
                </div>
      "  ;
       
}
?>
        
                
                
            </div>
        </section>
        <!--================End Post Slider Area =================-->
</div>
        <!--================Testimonials Area =================-->

        <section class="testimonials_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2 style="color:#D4A200;">Our Partners</h2>
        		</div>
        		<div class="testi_slider owl-carousel">

  <?php
         $get_projects = "select * from partner order by 1 DESC ";

	$run_projects = mysqli_query($con , $get_projects);
    
	while ( $row_projects=mysqli_fetch_array($run_projects)) {
		# code..
       
		$pro_id=$row_projects['partner_id'];

		$pro_title=$row_projects['partner_name'];

		$pro_info=$row_projects['partner_info'];

        $pro_img1=$row_projects['partner_image'];

      
        echo "
        <div class='item'>
        <div class='testi_item'>
            <div class='media'>
                <div class='d-flex'>
                    <img src='admin_area/partner_images/$pro_img1' alt='Partner Logo'style='width:80px; height:80px;'>
                </div>
                <div class='media-body'>
                    
                    <h4>$pro_title</h4>
                    <p>$pro_info</p>
                    
                </div>
            </div>
        </div>
    </div>
      "  ;
       
}
?>
        
        		</div>
        	</div>
        </section>
        <!--================End Testimonials Area =================-->
        <br />
    <?php require_once('inc/Footer.php') ?>


    <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script> -->
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/theme.js"></script>
</body>