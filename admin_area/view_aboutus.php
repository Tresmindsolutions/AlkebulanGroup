<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View AboutUs
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View AboutUs
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> AboutUs ID: </th>
                                <th> AboutUs Content: </th>
                                <th> AboutUs Logo Image: </th>
                                <th> Founder1 Image: </th>
                                <th> Founder1 Name: </th>
                                <th> Founder1 Designation: </th>
                                <th> Founder1 Bio: </th>
                                <th> Founder2 Image: </th>
                                <th> Founder2 Name: </th>
                                <th> Founder2 Designation: </th>
                                <th> Founder2 Bio: </th>
                                <!--date-->
                                <th> AboutUs Delete: </th>
                                <th> AboutUs Edit: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_about = "select * from aboutus";
                                
                                $run_about = mysqli_query($con,$get_about);
          
                                while($row_about=mysqli_fetch_array($run_about)){
                                    
                                    $about_id = $row_about['about_id'];
                                    
                                    $about_content = $row_about['about_content'];

                                    $about_image = $row_about['about_image'];
                                    
                                    $founder1_img = $row_about['founder1_img'];
                                    
                                    $founder1_name = $row_about['founder1_name'];

                                    $founder1_designation = $row_about['founder1_designation'];
                                    
                                    $founder1_bio = $row_about['founder1_bio'];

                                    $founder2_img = $row_about['founder2_img'];
                                    
                                    $founder2_name = $row_about['founder2_name'];

                                    $founder2_designation = $row_about['founder2_designation'];
                                    
                                    $founder2_bio = $row_about['founder2_bio'];
                                    
                                 
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $about_content; ?> </td>
                                <td> <img src="aboutus_images/<?php echo $about_image; ?>" width="60" height="60"></td>
                                <td> <img src="aboutus_images/<?php echo $founder1_img; ?>" width="60" height="60"></td>                                
                                <td>  <?php echo $founder1_name; ?> </td>
                                <td>  <?php echo $founder1_designation; ?></td>
                                <td> <?php echo $founder1_bio; ?> </td>
                                <td> <img src="aboutus_images/<?php echo $founder2_img; ?>" width="60" height="60"></td>                                
                                <td>  <?php echo $founder2_name; ?> </td>
                                <td>  <?php echo $founder2_designation; ?></td>
                                <td> <?php echo $founder2_bio; ?> </td>
                               
                                <td> 
                                     
                                     <a href="index.php?delete_aboutus=<?php echo $about_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?edit_aboutus=<?php echo $about_id; ?>">
                                     
                                        <i class="fa fa-pencil"></i> Edit
                                    
                                     </a> 
                                    
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>