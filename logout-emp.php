<?php
session_start();
if(isset($_SESSION['emp'])){
	
	unset($_SESSION['emp']);
	session_destroy();
	echo"<script>window.open('./index.php','_self')</script>";
}
