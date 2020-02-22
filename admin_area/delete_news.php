<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_news'])){
        
        $delete_id = $_GET['delete_news'];
        
        $delete_pro = "delete from news where news_id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('One of your news has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_news','_self')</script>";
            
        }
        
    }

?>

<?php } ?>