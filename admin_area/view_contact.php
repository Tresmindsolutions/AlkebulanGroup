<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View contact
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View contact
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> contact ID: </th>
                                <th> contact Country: </th>
                                <th> contact address: </th>
                                <th> contact phone: </th>
                                <th> contact email: </th>
                                <th> contact Map Link: </th>
                                <!--date-->
                                <th> contact Delete: </th>
                                <th> contact Edit: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_contact = "select * from contactus";
                                
                                $run_contact = mysqli_query($con,$get_contact);
          
                                while($row_contact=mysqli_fetch_array($run_contact)){
                                    
                                    $contact_id = $row_contact['contact_id'];
                                                                        
                                    $contact_country = $row_contact['contact_country'];
                                    
                                    $contact_address = $row_contact['contact_address'];

                                    $contact_phone = $row_contact['contact_phone'];
                                    
                                    $contact_email = $row_contact['contact_email'];
                                    
                                    $contact_map_link = $row_contact['contact_map_link'];

                                 
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $contact_country; ?> </td>
                                <td>  <?php echo $contact_address; ?> </td>
                                <td>  <?php echo $contact_phone; ?></td>
                                <td> <?php echo $contact_email; ?> </td>
                                <td> <?php echo $contact_map_link; ?> </td>
                               
                                <td> 
                                     
                                     <a href="index.php?delete_contact=<?php echo $contact_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?edit_contact=<?php echo $contact_id; ?>">
                                     
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