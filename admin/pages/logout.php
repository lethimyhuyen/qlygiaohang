<?php
	session_start();
	if(isset($_SESSION['mail'])){
		unset($_SESSION['mail']);
		unset($_SESSION['pass']);
		header('location:login.php');
	}else{
		header('location:login.php');
	}

?>