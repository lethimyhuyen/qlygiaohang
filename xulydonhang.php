<?php
if (!isset($_SESSION)) session_start();
include "include/connect.php";
//print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Giỏ hàng</title>
	<style>
		img.sp{width: 100px; height: 100px}
	</style>
</head>
<body>
<?php
if(!isset($_SESSION)) session_start();
if (!isset($_SESSION['tendn']))
{
header("location:login.php");exit;

}

/*echo "<pre>";
print_r($_SESSION);*/
/*

1. Tham vao bang order
INSERT INTO `order` (`order_id`, `email`, `order_date`, `consignee_name`, `consignee_add`, `consignee_phone`, `status`) VALUES ('111', 'abcd@yahoo.com', '2018-11-20 00:00:00', 'A', 'B', 'C', '0');
2. duyet qua gio hang:
 - Them vao table order_detail
   INSERT INTO `order_detail` (`order_id`, `book_id`, `quantity`, `price`) VALUES ('111', 'td01', '1', '12');


*/
  $tendn = $_SESSION['tendn'];
  $madh = time();
  $ngayorder = Date("Y-m-d");
  $tennguoinhan  = $_POST['tennguoinhan'];
  $diachinguoinhan =  $_POST['diachinguoinhan'];
  $dienthoainguoinhan =  $_POST['dienthoainguoinhan'];

	$sql ="INSERT INTO `donhang` (`madh`, `matt` , `ngayorder`,`tendn`, `tennguoinhan`, `diachinguoinhan`, `dienthoainguoinhan`) VALUES ('$madh','1', '$ngayorder','$tendn', '$tennguoinhan', '$diachinguoinhan', '$dienthoainguoinhan')
	";
	
	$query = mysqli_query($connection, $sql);
	
	foreach ($_SESSION['giohang'] as $key => $value) {
		$sql_gia = "SELECT sanpham.gia FROM `sanpham` WHERE sanpham.masp= '$key'";
		$query2 = mysqli_query($connection, $sql_gia);
		while ($row=mysqli_fetch_assoc($query2)){
			$gia = $row['gia'];
		}
		$masp = $key;
		$soluong = $value;
		$sql1 ="INSERT INTO `chitietdonhang` (`madh`, `masp`, `soluong`, `gia`) VALUES ('$madh', '$masp', '$soluong', '$gia');";
		$query = mysqli_query($connection, $sql1);
	}
	unset($_SESSION['giohang']);
	//gui email
?>
<a href="index.php">Thanh Toán thành công</a>

</body>
</html>
