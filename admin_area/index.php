<?php 
     session_start(); 
     if(!isset($_SESSION['admin_email'])){
        echo "<script>window.location.href='login.php'</script>";
     }
     else {
    require_once('inc/top.php'); ?>
    <?php

    $admin_session=$_SESSION['admin_email'];
    $get_admin="select * from admins where admin_email='$admin_session'";
    $run_admin=mysqli_query($con,$get_admin);
    $row_admin=mysqli_fetch_array($run_admin);
    $admin_id=$row_admin['admin_id'];
    $admin_name=$row_admin['admin_name'];
    $admin_email=$row_admin['admin_email'];
    $admin_email=$row_admin['admin_contact'];
    $admin_job=$row_admin['admin_job'];
    $admin_image=$row_admin['admin_image'];
    


    $get_projects="select * from projects";
    $run_projects=mysqli_query($con,$get_projects);
    $count_projects=mysqli_num_rows($run_projects);
   


 ?>
<body>
   
    <div id="wrapper"><!-- #wrapper begin -->
        <?php require_once('inc/sidebar.php'); ?>
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                
                  <?php
                
                    if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");

                        
                }
                 if(isset($_GET['insert_projects'])){
                        
                        include("insert_projects.php");
                    }
                    if(isset($_GET['view_projects'])){
                        
                        include("view_projects.php");
                    }
                    if(isset($_GET['delete_project'])){
                        
                        include("delete_project.php");
                    
                    }
                    if(isset($_GET['edit_project'])){
                        
                        include("edit_project.php");
                    }  


                    if(isset($_GET['insert_investment'])){
                        
                        include("insert_investment.php");
                    }
                    if(isset($_GET['view_investment'])){
                        
                        include("view_investment.php");
                    }
                    if(isset($_GET['delete_investment'])){
                        
                        include("delete_investment.php");
                    
                    }
                    if(isset($_GET['edit_investment'])){
                        
                        include("edit_investment.php");
                    }  
                   

                    
                    if(isset($_GET['insert_news'])){
                        
                        include("insert_news.php");
                    }
                    if(isset($_GET['view_news'])){
                        
                        include("view_news.php");
                    }
                    if(isset($_GET['delete_news'])){
                        
                        include("delete_news.php");
                    
                    }
                    if(isset($_GET['edit_news'])){
                        
                        include("edit_news.php");
                    }  


                   

                     if(isset($_GET['view_users'])){
                        
                        include("view_users.php");
                    }    

                     if(isset($_GET['user_profile'])){
                        
                        include("user_profile.php");
                    }    

                     if(isset($_GET['delete_user'])){
                        
                        include("delete_user.php");
                    }             

                     if(isset($_GET['insert_user'])){
                        
                        include("insert_user.php");
                    }             
                                
                    if(isset($_GET['insert_background'])){
                        
                        include("insert_background.php");
                    }

                     if(isset($_GET['view_background'])){
                        
                        include("view_background.php");
                    }         

                     if(isset($_GET['delete_aboutImg'])){
                        
                        include("delete_background.php");
                    }         

                     if(isset($_GET['edit_aboutImg'])){
                        
                        include("edit_background.php");
                    }         
                    
                    if(isset($_GET['delete_investmentImg'])){
                        
                        include("delete_background.php");
                    }         

                     if(isset($_GET['edit_investmentImg'])){
                        
                        include("edit_investmentImg.php");
                    }      

                    if(isset($_GET['delete_projectImg'])){
                        
                        include("delete_background.php");
                    }         

                     if(isset($_GET['edit_projectImg'])){
                        
                        include("edit_projectImg.php");
                    }      

                    if(isset($_GET['delete_newsImg'])){
                        
                        include("delete_background.php");
                    }         

                     if(isset($_GET['edit_newsImg'])){
                        
                        include("edit_newsImg.php");
                    }      

                    if(isset($_GET['delete_contactImg'])){
                        
                        include("delete_background.php");
                    }         

                     if(isset($_GET['edit_contactImg'])){
                        
                        include("edit_contactImg.php");
                    }      
                    
                    
                    if(isset($_GET['insert_contact'])){
                        
                        include("insert_contact.php");
                    }

                     if(isset($_GET['view_contact'])){
                        
                        include("view_contact.php");
                    }         

                     if(isset($_GET['delete_contact'])){
                        
                        include("delete_contact.php");
                    }         

                     if(isset($_GET['edit_contact'])){
                        
                        include("edit_contact.php");
                    }         
                   
                          
                    if(isset($_GET['insert_aboutus'])){
                        
                        include("insert_aboutus.php");
                    }

                     if(isset($_GET['view_aboutus'])){
                        
                        include("view_aboutus.php");
                    }         

                     if(isset($_GET['delete_aboutus'])){
                        
                        include("delete_aboutus.php");
                    }         

                     if(isset($_GET['edit_aboutus'])){
                        
                        include("edit_aboutus.php");
                    }         

                    if(isset($_GET['insert_portfolio'])){
                        
                        include("insert_portfolio.php");
                    }

                     if(isset($_GET['view_portfolio'])){
                        
                        include("view_portfolio.php");
                    }         

                     if(isset($_GET['delete_portfolio'])){
                        
                        include("delete_portfolio.php");
                    }         

                     if(isset($_GET['edit_portfolio'])){
                        
                        include("edit_portfolio.php");
                    }         

                    if(isset($_GET['insert_partner'])){
                        
                        include("insert_partner.php");
                    }

                     if(isset($_GET['view_partner'])){
                        
                        include("view_partner.php");
                    }         

                     if(isset($_GET['delete_partner'])){
                        
                        include("delete_partner.php");
                    }         

                     if(isset($_GET['edit_partner'])){
                        
                        include("edit_partner.php");
                    }         

                    if(isset($_GET['insert_slide'])){
                        
                        include("insert_slide.php");
                    }

                     if(isset($_GET['view_slides'])){
                        
                        include("view_slides.php");
                    }         

                     if(isset($_GET['delete_slide'])){
                        
                        include("delete_slide.php");
                    }         

                     if(isset($_GET['edit_slide'])){
                        
                        include("edit_slide.php");
                    }         

               
                ?>
                
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>           
</body>
</html>


<?php } ?>