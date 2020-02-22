<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_aboutImg'])){
        
        $delete_slide_id = $_GET['delete_aboutImg'];
        
        $delete_slide = "delete from aboutimg where a_id='$delete_slide_id'";
        
        $run_delete = mysqli_query($con,$delete_slide);
        
        if($run_delete){
            
            echo "<script>alert('One of Your Image Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_background','_self')</script>";
            
        }
        
    }

    if(isset($_GET['delete_investmentImg'])){
        
        $delete_slide_id = $_GET['delete_investmentImg'];
        
        $delete_slide = "delete from investmentimg where i_id='$delete_slide_id'";
        
        $run_delete = mysqli_query($con,$delete_slide);
        
        if($run_delete){
            
            echo "<script>alert('One of Your Image Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_background','_self')</script>";
            
        }
        
    }

    if(isset($_GET['delete_projectImg'])){
        
        $delete_slide_id = $_GET['delete_projectImg'];
        
        $delete_slide = "delete from projectimg where p_id='$delete_slide_id'";
        
        $run_delete = mysqli_query($con,$delete_slide);
        
        if($run_delete){
            
            echo "<script>alert('One of Your Image Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_background','_self')</script>";
            
        }
        
    }

    if(isset($_GET['delete_newsImg'])){
        
        $delete_slide_id = $_GET['delete_newsImg'];
        
        $delete_slide = "delete from newsimg where n_id='$delete_slide_id'";
        
        $run_delete = mysqli_query($con,$delete_slide);
        
        if($run_delete){
            
            echo "<script>alert('One of Your Image Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_background','_self')</script>";
            
        }
        
    }

    if(isset($_GET['delete_contactImg'])){
        
        $delete_slide_id = $_GET['delete_contactImg'];
        
        $delete_slide = "delete from contactimg where c_id='$delete_slide_id'";
        
        $run_delete = mysqli_query($con,$delete_slide);
        
        if($run_delete){
            
            echo "<script>alert('One of Your Image Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_background','_self')</script>";
            
        }
        
    }

?>




<?php } ?>