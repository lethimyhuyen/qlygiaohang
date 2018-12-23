<?php
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['giohang'])) 
	$_SESSION['giohang'] = array();
$tam = $_SESSION['giohang'];

$masp = isset($_GET['masp'])?$_GET['masp']:'';
$sl = isset($_GET['sl'])?$_GET['sl']:1;
if ($masp !='') //Thêm
{
	if (!isset($tam[$masp]))
		$tam[$masp]= $sl;
	else $tam[$masp] += $sl;
}
$_SESSION['giohang'] = $tam ;
//print_r($tam);
header('location:giohang.php');
