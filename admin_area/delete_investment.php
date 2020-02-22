<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_investment'])){
        
        $invest_id = $_GET['delete_investment'];
        
        $delete_invest = "delete from investment where invest_id='$invest_id'";
        
        $run_delete = mysqli_query($con,$delete_invest);
        
        if($run_delete){
            
            echo "<script>alert('One of your project has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_investment','_self')</script>";
            
        }
        
    }

?>

<?php } ?>