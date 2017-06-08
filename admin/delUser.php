<?php
    include("../database/db_conection.php");
    if(isset($_POST['delUser'])){
        
        $id = (int)$_POST['id'];
        $delUser = "DELETE FROM user WHERE id = $id";
        
        if($dbcon->query($delUser)){
            echo "<script>alert('User Deleted')</script>";
            echo "<script>window.open('./user.php','_self')</script> ";
        }
        else{
            echo "<script>alert('Error')</script>";
            echo "<script>window.open('./user.php','_self')</script> ";
        }
    }
    else{
        echo "<script>window.open('./user.php','_self')</script> ";
    }
?>