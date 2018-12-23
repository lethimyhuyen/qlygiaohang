<?php
	session_start();
	if(isset($_SESSION['tendn'])){
		unset($_SESSION['tendn']);
		unset($_SESSION['matkhau']);
		header('location:index.php');
	}else{
		header('location:index.php');
	}

?>