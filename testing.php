<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="testing.css">
    <link rel="stylesheet" href="css/bootstrap.css">
     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body data-spy="scroll" data-target="#mainNav" data-offset="70">
</head>
<body>

    
       
        
        <!--================Post Slider Area =================-->
        <section class="post_slider_area">
            <div class="main_title">
                <h2>Our Recent Completed Projects</h2>
                <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
            </div>
            <div class="post_slider_inner owl-carousel">
            <?php
        $db	= mysqli_connect("localhost","root","","alkebulan");
        
        
        
        
           global $db;
            $get_projects = "select * from projects order by 1 DESC ";
        
            $run_projects = mysqli_query($db , $get_projects);
            if($run_projects){
        
            
            while ( $row_projects=mysqli_fetch_array($run_projects)) {
                # code..
               
                $pro_id=$row_projects['project_id'];
        
                $pro_title=$row_projects['project_title'];
        
                $pro_client=$row_projects['project_client'];
        
                $pro_img1=$row_projects['project_img1'];
        
                echo "
                <div class='item'>
                <div class='post_s_item'>
                    <div class='post_img'>
                        <img src='admin_area/project_images/$pro_img1' alt=''>
                    </div>
                    <div class='post_text'>
                        <a href='single-blog.html'><h4>$pro_title</h4></a>
                       
                    </div>
                </div>
                <h3>$pro_title</h3>

            </div>"
               ;
               
            }    
        }
        else{
            echo "Coming soon..";
        }    
            ?>
                <!-- <div class="item">
                    <div class="post_s_item">
                        <div class="post_img">
                            <img src="img/post-slider/1.jpg" alt="">
                        </div>
                        <div class="post_text">
                            <a href="single-blog.html"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <a class="main_btn" href="#">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="post_s_item">
                        <div class="post_img">
                            <img src="img/post-slider/2.jpg" alt="">
                        </div>
                        <div class="post_text">
                            <a href="single-blog.html"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <a class="main_btn" href="#">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="post_s_item">
                        <div class="post_img">
                            <img src="img/post-slider/3.jpg" alt="">
                        </div>
                        <div class="post_text">
                            <a href="single-blog.html"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <a class="main_btn" href="#">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="post_s_item">
                        <div class="post_img">
                            <img src="img/post-slider/4.jpg" alt="">
                        </div>
                        <div class="post_text">
                            <a href="single-blog.html"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <a class="main_btn" href="#">View Details</a>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="post_s_item">
                        <div class="post_img">
                            <img src="img/post-slider/5.jpg" alt="">
                        </div>
                        <div class="post_text">
                            <a href="single-blog.html"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <a class="main_btn" href="#">View Details</a>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="post_s_item">
                        <div class="post_img">
                            <img src="img/post-slider/6.jpg" alt="">
                        </div>
                        <div class="post_text">
                            <a href="single-blog.html"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <a class="main_btn" href="#">View Details</a>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="post_s_item">
                        <div class="post_img">
                            <img src="img/post-slider/7.jpg" alt="">
                        </div>
                        <div class="post_text">
                            <a href="single-blog.html"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <a class="main_btn" href="#">View Details</a>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="post_s_item">
                        <div class="post_img">
                            <img src="img/post-slider/8.jpg" alt="">
                        </div>
                        <div class="post_text">
                            <a href="single-blog.html"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <a class="main_btn" href="#">View Details</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <!--================End Post Slider Area =================-->
        
        <!--================Testimonials Area =================-->
       

  <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
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
</html>