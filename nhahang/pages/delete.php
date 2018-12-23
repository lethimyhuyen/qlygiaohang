<?php
include"include/connetc.php";
$masp=$_GET['maspv'];
$sql="delete from sanpham where masp='$masp'";
$query = mysqli_query($connection, $sql);
header('location:index.php');
?>