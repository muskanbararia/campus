<!doctype html>
<html lang="en">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Campus Catalyst | A Unit of Staffing Gamut consulting Services</title>
<meta name="description" content="Campus Catalyst | A Unit of Staffing Gamut consulting Services">
<meta name="keywords" content="Jobs in Pune - Manpower Consultant -  Corporate Resources">
<link rel="shortcut icon" type="image/x-icon" href="../img/slider/favicon.ico" />
<script  src="../js/jquery.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" />
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:300,400' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.js"></script>
<noscript><link rel="stylesheet" type="text/css" href="../css/styleNoJS.css" /></noscript>
<script type="text/javascript" defer="defer" src="js/menuscript.js"></script>
<link rel="stylesheet" type="text/css" href="../css/menu.css" />
<link rel="stylesheet" type="text/css" href="../css/slider.css" />
<script type="text/javascript" defer="defer" src="../js/scroll.js"></script>
<script type="text/javascript" src="../js/jquery.simplePopup.js"></script>
</head>
<style>
.reset{
padding: 8px 28px 10px;
margin-right:10px;
float:left;
margin: 3px 0 3px 5px;
font-size:20px;
}
.button {
  display: inline-block;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  box-shadow: 0 2px #999;
  float: left;
  padding: 2px;
  margin: 2px;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
<?php  session_start();  ?>
<body>
<div id="top">
	<div class="topdiv">
    	<div class="topleft">
        <div class="topleft1 hide"><i class="fa fa-envelope-o"></i> <a href="mailto:info@campuscatalyst.com"><img src="../img/email.png"></a></div>
        <div class="topleft1"><i class="fa fa-phone"></i> <span class="no">+91-8073431088</span></div>
        </div>
        <div class="topright">
            <?php
             if (!isset($_SESSION['admin'])): ?> 
                echo "<script>window.open('./login.php','_self')</script> ";
            <?php else: ?>
                <div class="topright1">
            
            <div class="login"><a href="./logout.php"  ><i class="fa fa-sign-in"></i>Logout</a></div>
            </div>
                                         
            <?php endif; ?>

        	
        	<div class="topright1">
            <span>
            <a href="#" title="Report a Problem"><span class="cplff">Report a Problem</span></a></span>
            <ul>
            	<li><a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" title="Youtube" target="_blank"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            </div> 
      </div>
    </div>
</div>
  
<div class="mform-middle">
	<div id="menu" class="normalmenu">
    <div class="menudiv">
        <div class="logo">
        <a href="../index.php"><img src="../img/crpl.png"  title="Crplindia" alt="Crplindia.com"></a>
        </div>
        <div class="mainmenu">
            <div id='cssmenu'>
                <ul>
                    <li><a href="index.php" title="Home"><i class="fa fa-home"></i><br /><span>Home</span></a></li>
                    <li><a href="user.php" title="About Us"><i class="fa fa-smile-o"></i><br /><span>Users</span></a>
                    
                        </li>
                        <li><a href="req.php" title="Services"><i class="fa fa-gear"></i><br /><span>Employer Requests</span></a>
                        
                    </li>        
                   
                    <li><a href="resume.php" title="Submit-Resume"><i class="fa fa-file-text-o"></i><br /><span>Submit Resume</span></a>       	
                    </li>
                    <li><a href="emp.php" title="Employers"><i class="fa fa-group"></i><br /><span>Employers</span></a>
                    
                    </li>
                    <li><a href="#" title="Hotjob"><i class="fa fa-briefcase"></i><br /><span>Hot Jobs</span></a>
                        <ul>
                        <li><a href="job.php" title="Hotjob"><span>Hot Jobs</span></a></li>
                        <li><a href="work-with-us.php" title="Work With Us"><span>Work With Us</span></a></li>
                        <li><a href="career.php" target="_blank" title="Career With Us"><span>Career With Us</span></a></li>
                        <li><a href="job-by-cat.php" title="Job By Category"><span>Job By Category</span></a></li>
                        <li><a href="job-by-loc.php" title="Job By Location"><span>Job By Location</span></a></li>
                        </ul>
                    </li>
                    
                    <li><a href="contact.php" title="Contact Us"><span><i class="fa fa-envelope"></i><br />Contact Us</span></a></li>
                </ul>
            </div>
        
        </div>
    </div>
</div> 
    <div class="menuspace"></div>
	<div class="bgimg"><img src="../img/topbg.jpg" title="Crpl" alt="Crpl"></div>
</div>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<div style="background-color: white;">
    <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <?php 
                    include("../database/db_conection.php");

                    $get_users = "SELECT * FROM user";
                    $run= $dbcon->query($get_users);
                    while ($row = $run->fetch_assoc()) {
                        # code...
                        $name = $row['name'];
                        $mobile = $row['mobile'];
                        $email = $row['email'];
                        $Password = $row['password'];
                        $id = $row['id'];
                    
                ?>
                <tr>
                    <td><?=$name?></td>
                    <td><?=$email?></td>
                    <td><?=$mobile?></td>
                    <td><?=$password?></td>
                    <td>
                        <form action="viewResume.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="email" value="<?=$email?>">
                            <button class="button" type="submit" name="resumeView">View Resume</button>
                        </form>
                        <form action="delUser.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <button class="button" type="submit" name="delUser">Delete User</button>
                        </form>
                    </td>
                </tr>
                <?}?>
            </tbody>
        </table>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
</div>


</body>
</html>