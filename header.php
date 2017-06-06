<div id="top">
	<div class="topdiv">
    	<div class="topleft">
        <div class="topleft1 hide"><i class="fa fa-envelope-o"></i> <a href="mailto:info@campuscatalyst.com"><img src="img/email.png"></a></div>
        <div class="topleft1"><i class="fa fa-phone"></i> <span class="no">+91-8073431088</span></div>
        </div>
        <div class="topright">
            <?php

             if (!isset($_SESSION['user'])): ?> 
                                   
                                    <div class="topright1">
            <div class="login"><a href="./login.php"  target="_blank" title="Employee Login"><i class="fa fa-sign-in"></i>Login</a></div>
            <div class="login"><a href="./register.php"  target="_blank" title="Employee Login"><i class="fa fa-sign-in"></i>Register</a></div>
            </div>
                <?php else: ?>
                    <?php 
                    include("database/db_conection.php");          
                    $email=$_SESSION['user'];
                    $view_users_query="SELECT * from user WHERE email='$email' LIMIT 1";//select query for viewing users.  
                    $run=$dbcon->query($view_users_query);//here run the sql query.  
                
                    if($row=$run->fetch_array())//while look to fetch the result and store in a array $row.  
                    {  
                        $user_name=$row[1];
                    }
                ?>
                <div class="topright1">
            <div class="login"><a href="#"  target="_blank" title="Employee Login"><i class="fa fa-sign-in"></i><?php echo "Hello, $user_name"; ?></a></div>
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