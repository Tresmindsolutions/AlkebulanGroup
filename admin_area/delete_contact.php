<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_contact'])){
        
        $delete_id = $_GET['delete_contact'];
        
        $delete_pro = "delete from contactus where contact_id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('One of your contact has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_contact','_self')</script>";
            
        }
        
    }

?>

<?php } ?>