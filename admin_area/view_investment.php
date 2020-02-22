<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Projects
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Investments
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Investment ID: </th>
                                <th> Investment Title: </th>
                                <th> Investment Title2: </th>
                                <th> Investment Image: </th>
                                <th> Investment Detail: </th>
                                <!--date-->
                                <th> Investment Delete: </th>
                                <th> Investment Edit: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_investment = "select * from investment";
                                
                                $run_investment = mysqli_query($con,$get_investment);
          
                                while($row_investment=mysqli_fetch_array($run_investment)){
                                    
                                    $invest_id = $row_investment['invest_id'];
                                    
                                    $invest_title = $row_investment['invest_title'];

                                    $invest_title2 = $row_investment['invest_title2'];
                                    
                                    $invest_img = $row_investment['invest_img'];
                                    
                                    $invest_detail = $row_investment['invest_desc'];
                                    
                                 
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $invest_title; ?> </td>
                                <td> <?php echo $invest_title2; ?> </td>
                                <td> <img src="investmentimg/<?php echo $invest_img; ?>" width="60" height="60"></td>
                                <td> <?php echo $invest_detail; ?> </td>
                               
                                <td> 
                                     
                                     <a href="index.php?delete_investment=<?php echo $invest_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?edit_investment=<?php echo $invest_id; ?>">
                                     
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