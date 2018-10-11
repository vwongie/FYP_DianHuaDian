<?php
	session_start();
	
	//logout user
	unset($_SESSION['user']);
	session_destroy();
	
	header("location:index.php");
	exit();
?>