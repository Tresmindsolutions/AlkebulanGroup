<?php 
 
     if(!isset($_SESSION['admin_email'])){
        echo "<script>window.location.href='login.php'</script>";
     }
     else { ?>
<nav class="navbar navbar-inverse navbar-fixed-top"><!-- navbar navbar-inverse navbar-fixed-top begin -->
    <div class="navbar-header"><!-- navbar-header begin -->
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><!-- navbar-toggle begin -->
            
            <span class="sr-only">Toggle Navigation</span>
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
        </button><!-- navbar-toggle finish -->
        
        <a href="index.php?dashboard" class="navbar-brand">Admin Area</a>
        
    </div><!-- navbar-header finish -->
    
    <ul class="nav navbar-right top-nav"><!-- nav navbar-right top-nav begin -->
        
        <li class="dropdown"><!-- dropdown begin -->
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- dropdown-toggle begin -->
                
                <i class="fa fa-user"></i>  <?php echo $admin_name ?><b class="caret"></b>
                
            </a><!-- dropdown-toggle finish -->
            
            <ul class="dropdown-menu"><!-- dropdown-menu begin -->
                <li><!-- li begin -->
                    <a href="index.php?user_profile=<?php echo $admin_id;?>"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-user"></i> Profile
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
                <li><!-- li begin -->
                    <a href="index.php?view_projects"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-envelope"></i> Projects
                        
                        <span class="badge"><?php echo $count_projects;?></span>
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
                

                
                <li class="divider"></li>
                
                <li><!-- li begin -->
                    <a href="logout.php"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-power-off"></i> Log Out
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
            </ul><!-- dropdown-menu finish -->
            
        </li><!-- dropdown finish -->
        
    </ul><!-- nav navbar-right top-nav finish -->
    
    <div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse begin -->
        <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav begin -->
            <li><!-- li begin -->
                <a href="index.php?dashboard"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-dashboard"></i> Dashboard
                        
                </a><!-- a href finish -->
                
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#slides"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Slides
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="slides" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_slide"> Insert Slide </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_slides"> View Slides </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#products"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-tag"></i> Projects
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="products" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_projects"> Insert Project </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_projects"> View Projects </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
               
            </li><!-- li finish -->
            

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#investment"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-tag"></i> Investment
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="investment" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_investment"> Insert investment </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_investment"> View investment </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
               
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#news"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-tag"></i> News
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="news" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_news"> Insert News </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_news"> View News </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
               
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#background"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-tag"></i> Background Images
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="background" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_background"> Insert Image </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_background"> View Image </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
               
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#partner"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-tag"></i> Partners
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="partner" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_partner"> Insert Partner </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_partner"> View Partner </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
               
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#portfolio"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-tag"></i> Portfolio
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="portfolio" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_portfolio"> Insert Portfolio </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_portfolio"> View Portfolio </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
               
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#aboutus"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-users"></i> About Us
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="aboutus" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_aboutus"> Insert AboutUs </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_aboutus"> View AboutUs </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#contactus"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-users"></i> Contact Us
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="contactus" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_contact"> Insert ContactUs </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_contact"> View ContactUs </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->

                <a href="#" data-toggle="collapse" data-target="#users"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-users"></i> Users
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="users" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_user"> Insert User </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_users"> View Users </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?user_profile=<?php echo $admin_id;?>"> Edit User Profile </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

            

            
            
            
            <li><!-- li begin -->
                <a href="logout.php"><!-- a href begin -->
                    <i class="fa fa-fw fa-power-off"></i> Log Out
                </a><!-- a href finish -->
            </li><!-- li finish -->
            
        </ul><!-- nav navbar-nav side-nav finish -->
    </div><!-- collapse navbar-collapse navbar-ex1-collapse finish -->
    
</nav><!-- navbar navbar-inverse navbar-fixed-top finish -->

<?php } ?>


