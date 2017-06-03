 <?php
 	$servername = "localhost";
 	$username = "root";
	$password = "";

	$dbname = "campus";

	// Create connection
	$dbcon = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($dbcon->connect_error) {
	    die("Connection failed: " . $dbcon->connect_error);
	} 

    // $dbcon=mysqli_connect("localhost","","");  
    // mysqli_select_db($dbcon,"foodwala"); 
    
?>  
