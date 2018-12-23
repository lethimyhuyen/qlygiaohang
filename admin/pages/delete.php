<?php
include"include/connetc.php";
$manv=$_GET['manv'];
$sql="delete from thongtin where manv='$manv'";
$query = mysqli_query($connection, $sql);
header('location:tables.php');
?>