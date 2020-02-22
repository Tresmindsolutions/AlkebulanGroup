<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_partner'])){
        
        $delete_id = $_GET['delete_partner'];
        
        $delete_pro = "delete from partner where partner_id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('One of your partner has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_partner','_self')</script>";
            
        }
        
    }

?>

<?php } ?>