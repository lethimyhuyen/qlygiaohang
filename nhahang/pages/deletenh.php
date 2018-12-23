<?php
include"include/connect.php";
$manh=$_GET['manh'];
$sql="delete from nhahang where manh='$manh'";
$query = mysqli_query($connection, $sql);
header('location:dsnhanhang.php');
?>