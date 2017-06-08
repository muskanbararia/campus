<?php
	session_start();
	include("../database/db_conection.php");
   if( $_GET["title"]  ) {
      $id=$_GET["title"];
      $view_users_query="UPDATE employer SET status = '1' WHERE id=$id ";
         
       // $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
        if($dbcon->query($view_users_query))//while look to fetch the result and store in a array $row.  
        {  
            echo "<script>alert('Done')</script>";
            echo "<script>window.open('./employer-req.php','_self')</script>";  
        }
        else{
            echo "<script>alert('Error')</script>"; 
        }
      
      
   }
   else{
   	echo"<script>window.open('./index.php','_self')</script>";
   }
?>