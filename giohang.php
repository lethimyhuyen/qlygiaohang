nnfdkngoifxniobxnfnl
<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
?>
<?php
if (!isset($_SESSION)) session_start();
include "include/connect.php";
print_r($_SESSION);
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
	<table border="1">
		<tr>
			<td>Mã sản phẩm</td>
			<td>Tên Sản phẩm</td>
			<td>Tên Nhà hàng</td>
			<td>Hình</td>
			<td>Giá</td>
			<td>SL</td>
			<td>TT</td>
			<td>Thao tác</td>
		</tr>
		<?php
		foreach ($_SESSION['giohang'] as $key => $value) 
		{ 
			$sql ="select * from sanpham,nhahang where sanpham.manh=nhahang.manh and masp= '$key' ";
			$query = mysqli_query($connection, $sql);
			while ($row=mysqli_fetch_assoc($query)){
				?>
				<tr>
					<td><?php echo $key;?></td>
					<td><?php echo $row['tensp']; ?></td>
					<td><?php echo $row['tennh']?></td>
					<td>
						<img src="images/<?php echo $row['hinh']; ?>" class=sp>
					</td>
					<td><?php echo $row['gia']; ?></td>
					<td><?php echo $value;?></td>
					<td><?php echo number_format($row['gia']*$value); ?></td>
					<td>
						<a href="xoagiohang.php?masp=<?php echo $key; ?>">Xóa</a>
					</td>
				</tr>
				<?php
			}
		}
			?>
		</table>
		<hr>
		<a href="index.php">Tiếp tục mua</a>
		<a href="thanhtoan.php">Tiến hàng thanh Toán</a>
		
</body>
</html>
