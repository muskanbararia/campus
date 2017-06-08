<?php
	session_start();
	include("./database/db_conection.php");
   if( $_GET["title"]  ) {
      $id=$_GET["title"];
      if (!isset($_SESSION['user'])){
      	echo "<script>alert('First Login to continue')</script>";
      	echo"<script>window.open('./login.php','_self')</script>";  
      }
      $email=$_SESSION['user'];
      $check_if_package="select * from resume WHERE email='$email'";
      $run_query=$dbcon->query($check_if_package);  

      if($run_query->num_rows==0){
      	echo "<script>alert('First submit resume to continue')</script>";
      	echo"<script>window.open('./resume.php','_self')</script>";  
      }
       $check_if_package="select * from apply WHERE user='$email' AND job='$id'";
                        $run_query=$dbcon->query($check_if_package);  

                        if($run_query->num_rows>0)  
                        {  
                           echo "<script>alert('Already Applied')</script>";  
                            echo"<script>window.open('./job.php','_self')</script>";
                        }

                        else{
                         $insert_package="insert into apply (job, user) VALUE ('$id','$email')";  


                        if($dbcon->query($insert_package))  
                        {  
                            echo "<script>alert('Applied successfully')</script>";
                            echo"<script>window.open('./job.php','_self')</script>";
                        }    
                        }   
                    
     
                          

      
      
   }
   else{
   	echo"<script>window.open('./index.php','_self')</script>";
   }
?>