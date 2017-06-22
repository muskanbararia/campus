 <div id="menu" class="normalmenu">
    <div class="menudiv">
        <div class="logo">
        <a href="index.php"><img src="img/crpl.png"  title="Crplindia" alt="Crplindia.com"></a>
        </div>
        <div class="mainmenu">
            <div id='cssmenu'>
                <ul>
                    <li><a href="index.php" title="Home"><i class="fa fa-home"></i><br /><span>Home</span></a></li>
                    <li><a href="#" title="About Us"><i class="fa fa-smile-o"></i><br /><span>About Us</span></a>
                    <ul>
                         <li><a href="about.php" title="About Us"><span>About Us</span></a></li>
                <li><a href="who-we-are.php" title="Who We Are" ><span>Who We Are</span></a></li>
                <li><a href="what-we-do.php" title="What We Do"><span>What We Do</span></a></li>
                <li><a href="why-choose-us.php" title="Why Choose Us"><span> Why Choose Us</span></a></li>
                
                <li><a href="vision.php" title="Vision , Mission & Values"><span>Vision , Mission & Values
                </span></a></li><li><a href="diversity.php" title="Diversity"><span>Diversity</span></a></li>
                <li><a href="unique.php" title="Unique Approach"><span>Unique Approach</span></a></li>
                <li><a href="quality.php" title="Quality Policy"><span>Quality Policy</span></a></li>
                <li><a href="future.php" title="Future Outlook"><span>Future Outlook</span></a></li>
                <li><a href="press.php" title="Press Room"><span>Press Room</span></a></li>
                <li><a href="director.php" title="From the Director's Desk"><span>From the Director's Desk</span></a></li>
                        </ul>
                        </li>
                        <li><a href="services.php" title="Services"><i class="fa fa-gear"></i><br /><span>Services</span></a>
                        
                    </li>
                    <?php
                    if(isset($_SESSION['emp'])){
                        ?>
                        <li><a href="emp.php" title="Submit-Resume"><i class="fa fa-file-text-o"></i><br /><span>Post Job</span></a>         
                    </li>
                    <li><a href="view-job.php" title="Submit-Resume"><i class="fa fa-file-text-o"></i><br /><span>View Submitted jobs</span></a>         
                    </li>
                    <?php
                    } 
                    ?>        
                   <?php

                    if (!isset($_SESSION['user'])) : ?> 

                                          
                                           
                       <?php else: ?>
                        <?php
                          include("./database/db_conection.php");
   
      
      $email=$_SESSION['user'];
      $check_if_package="select * from resume WHERE email='$email'";
      $run_query=$dbcon->query($check_if_package);  

      if($run_query->num_rows==0){
         
      ?>
                           <li><a href="resume.php" title="Submit-Resume"><i class="fa fa-file-text-o"></i><br /><span>Submit Resume</span></a>         
                    </li>
                    <?php 
                }
                else{
                    ?>
                    <li><a href="update-resume.php" title="Submit-Resume"><i class="fa fa-file-text-o"></i><br /><span>Update Resume</span></a>         
                    </li>

<?php
                }
?>                       
                                                
                   <?php endif; ?>
                   <?php if (!isset($_SESSION['user'])) {
                    if (!isset($_SESSION['emp'])) { ?>

                     <li><a href="#" title="Employers"><i class="fa fa-group"></i><br /><span>Employers</span></a>
                    
                    <ul>
                        <li><a href="login-emp.php" title="Hotjob"><span>Login</span></a></li>
                        <li><a href="reg-emp.php" title="Work With Us"><span>Register</span></a></li>
                        
                        <!--<li><a href="job-by-cat.php" title="Job By Category"><span>Job By Category</span></a></li>
                        <li><a href="job-by-loc.php" title="Job By Location"><span>Job By Location</span></a></li>-->
                        </ul>
                    </li>
<?php }} ?>


                   
                    <li><a href="#" title="Hotjob"><i class="fa fa-briefcase"></i><br /><span>Hot Jobs</span></a>
                        <ul>
                        <li><a href="job.php" title="Hotjob"><span>Hot Jobs</span></a></li>
                        <li><a href="work-with-us.php" title="Work With Us"><span>Work With Us</span></a></li>
                        <li><a href="career.php" target="_blank" title="Career With Us"><span>Career With Us</span></a></li>
                        <!--<li><a href="job-by-cat.php" title="Job By Category"><span>Job By Category</span></a></li>
                        <li><a href="job-by-loc.php" title="Job By Location"><span>Job By Location</span></a></li>-->
                        </ul>
                    </li>
                    
                    <li><a href="contact.php" title="Contact Us"><span><i class="fa fa-envelope"></i><br />Contact Us</span></a></li>
                    <li><a href="upload/form.pdf" title="About Us"><i class="fa fa-smile-o"></i><br /><span>Download Form</span></a>
                    
                        </li>
                </ul>
            </div>
        
        </div>
    </div>
</div> 