<?php
if (!isset($_SESSION)) session_start();
$masp = $_GET['masp'];
unset($_SESSION['giohang'][$masp] ) ;
header('location:giohang.php');
?>