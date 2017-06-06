<!doctype html>
<html lang="en">


<head>
<script type="application/ld+json">


</script>
<style type="text/css">
    /*
 * Specific styles of signin component
 */
/*
 * General styles
 */
body, html {
    height: 100%;
    background-repeat: no-repeat;
    background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
}

.card-container.card {
    max-width: 350px;
    padding: 40px 40px;
}

.btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}

/*
 * Card component
 */
.card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 50px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

/*
 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

.reauth-email {
    display: block;
    color: #404040;
    line-height: 2;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin #inputEmail,
.form-signin #inputPassword {
    direction: ltr;
    height: 44px;
    font-size: 16px;
}

.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin .form-control:focus {
    border-color: rgb(104, 145, 162);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}

.btn.btn-signin {
    /*background-color: #4d90fe; */
    background-color: rgb(104, 145, 162);
    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
    padding: 0px;
    font-weight: 700;
    font-size: 14px;
    height: 36px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
}

.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus {
    background-color: rgb(12, 97, 33);
}

.forgot-password {
    color: rgb(104, 145, 162);
}

.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
    color: rgb(12, 97, 33);
}
</style>
<script type="text/javascript">
    $( document ).ready(function() {
    // DOM ready

    // Test data
    /*
     * To test the script you should discomment the function
     * testLocalStorageData and refresh the page. The function
     * will load some test data and the loadProfile
     * will do the changes in the UI
     */
    // testLocalStorageData();
    // Load profile if it exits
    loadProfile();
});

/**
 * Function that gets the data of the profile in case
 * thar it has already saved in localstorage. Only the
 * UI will be update in case that all data is available
 *
 * A not existing key in localstorage return null
 *
 */
function getLocalProfile(callback){
    var profileImgSrc      = localStorage.getItem("PROFILE_IMG_SRC");
    var profileName        = localStorage.getItem("PROFILE_NAME");
    var profileReAuthEmail = localStorage.getItem("PROFILE_REAUTH_EMAIL");

    if(profileName !== null
            && profileReAuthEmail !== null
            && profileImgSrc !== null) {
        callback(profileImgSrc, profileName, profileReAuthEmail);
    }
}

/**
 * Main function that load the profile if exists
 * in localstorage
 */
function loadProfile() {
    if(!supportsHTML5Storage()) { return false; }
    // we have to provide to the callback the basic
    // information to set the profile
    getLocalProfile(function(profileImgSrc, profileName, profileReAuthEmail) {
        //changes in the UI
        $("#profile-img").attr("src",profileImgSrc);
        $("#profile-name").html(profileName);
        $("#reauth-email").html(profileReAuthEmail);
        $("#inputEmail").hide();
        $("#remember").hide();
    });
}

/**
 * function that checks if the browser supports HTML5
 * local storage
 *
 * @returns {boolean}
 */
function supportsHTML5Storage() {
    try {
        return 'localStorage' in window && window['localStorage'] !== null;
    } catch (e) {
        return false;
    }
}

/**
 * Test data. This data will be safe by the web app
 * in the first successful login of a auth user.
 * To Test the scripts, delete the localstorage data
 * and comment this call.
 *
 * @returns {boolean}
 */
function testLocalStorageData() {
    if(!supportsHTML5Storage()) { return false; }
    localStorage.setItem("PROFILE_IMG_SRC", "//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" );
    localStorage.setItem("PROFILE_NAME", "César Izquierdo Tello");
    localStorage.setItem("PROFILE_REAUTH_EMAIL", "oneaccount@gmail.com");
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Campus Catalyst | A Unit of Staffing Gamut consulting Services</title>
<meta name="description" content="Campus Catalyst | A Unit of Staffing Gamut consulting Services">
<meta name="keywords" content="Jobs in Pune - Manpower Consultant -  Corporate Resources">
<link rel="shortcut icon" type="image/x-icon" href="../img/slider/favicon.ico" />
<script  src="../js/jquery.js" type="text/javascript"></script>
<script src="../ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
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
</style>

<body>
<div id="top">
	<div class="topdiv">
    	<div class="topleft">
        <div class="topleft1 hide"><i class="fa fa-envelope-o"></i> <a href="mailto:info@campuscatalyst.com"><img src="../img/email.png"></a></div>
        <div class="topleft1"><i class="fa fa-phone"></i> <span class="no">+91-8073431088</span></div>
        </div>
        <div class="topright">
            

        	
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
       
    </div>
</div> 
    <div class="menuspace"></div>
	<div class="bgimg"><img src="../img/topbg.jpg" title="Crpl" alt="Crpl"></div>
</div>
<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="login.php" method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
            <?php

                 include("../database/db_conection.php");  
                    if(isset($_POST['email']) && isset($_POST['password']) ) 
                    {
                     $email=$_POST['email'];
                        
                        $pwd=$_POST['password'];
                        

                        $check_user="select count(*) AS pr from admin WHERE email='$email' AND password='$pwd'";


                            $run= $dbcon->query($check_user);  
                            $data = $run->fetch_assoc();

                            if((int)$data['pr'])  
                            {  
                                session_start();
                                $_SESSION['admin']=$email;
                                echo "<script>window.open('./index.php','_self')</script> ";
                                
                            }  
                            else  
                            {  
                                echo "<script>alert('Enter correct password')</script>";      
                            } 
                            }  
                    
            ?>
        </div><!-- /card-container -->
    </div><!-- /container -->
 </body>