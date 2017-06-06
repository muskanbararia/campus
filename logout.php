<?php
session_start();
if(isset($_SESSION['user'])){
	
	unset($_SESSION['user']);
	session_destroy();
	echo"<script>window.open('./index.php','_self')</script>";
}
