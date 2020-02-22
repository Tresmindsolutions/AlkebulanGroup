<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View News
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View News
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> News ID: </th>
                                <th> News Title: </th>
                                <th> News Image: </th>
                                <th> News Description: </th>
                                <th> News Ref Link: </th>
                                <th> News Keywords: </th>
                                <th> Date: </th>
                                <!--date-->
                                <th> News Delete: </th>
                                <th> News Edit: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_news = "select * from news";
                                
                                $run_news = mysqli_query($con,$get_news);
          
                                while($row_news=mysqli_fetch_array($run_news)){
                                    
                                    $news_id = $row_news['news_id'];
                                    
                                    $news_title = $row_news['news_title'];
                                    
                                    $news_img = $row_news['news_image'];
                                    
                                    $news_description = $row_news['news_description'];

                                    $news_ref_link = $row_news['news_ref_link'];
                                    
                                    $news_keywords = $row_news['news_keywords'];
                                    
                                    $news_date = $row_news['date'];

                                 
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $news_title; ?> </td>
                                <td> <img src="news_images/<?php echo $news_img; ?>" width="60" height="60"></td>
                                <td>  <?php echo $news_description; ?> </td>
                                <td>  <?php echo $news_ref_link; ?></td>
                                <td> <?php echo $news_keywords; ?> </td>
                                <td> <?php echo $news_date; ?> </td>
                               
                                <td> 
                                     
                                     <a href="index.php?delete_news=<?php echo $news_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?edit_news=<?php echo $news_id; ?>">
                                     
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