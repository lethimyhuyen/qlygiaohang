<?php
include"include/connetc.php";
$manv=$_GET['manv'];
$sql="delete from user where manv='$manv'";
$query = mysqli_query($connection, $sql);
header('location:dsuser.php');
?>