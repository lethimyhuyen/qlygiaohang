<?php 
        $connection = mysqli_connect("localhost","root","", "nhanvien") or die("loi");
        if ($connection) {
        	//echo("Thanh cong");
        }
        // $db=mysql_select_db("nhanvien");,
         mysqli_set_charset($connection,"utf8");
 ?>