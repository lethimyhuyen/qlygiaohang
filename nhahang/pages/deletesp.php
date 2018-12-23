<?php
include"include/connect.php";
$masp=$_GET['masp'];
$sql="delete from sanpham where masp='$masp'";
$query = mysqli_query($connection, $sql);
header('location:index.php');
?>