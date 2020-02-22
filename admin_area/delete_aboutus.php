<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_aboutus'])){
        
        $delete_id = $_GET['delete_aboutus'];
        
        $delete_pro = "delete from aboutus where about_id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('One of your about has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_aboutus','_self')</script>";
            
        }
        
    }

?>

<?php } ?>