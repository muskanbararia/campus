<?php
session_start();
if(isset($_SESSION['admin'])){
	
	unset($_SESSION['admin']);
	session_destroy();
	echo"<script>window.open('./login.php','_self')</script>";
}
