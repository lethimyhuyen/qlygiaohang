<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đơn hàng</title>
</head>
<body>
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
                <div class="panel-body">       
                <table width="900px" align="center" >
                                                    <?php
                                                    include"include/connetc.php";
                                                    $madh=$_GET['madh'];
                                                    $sql="SELECT * from donhang where madh='$madh'";
                                                    $query = mysqli_query($connection, $sql);
                                                    while ($row=mysqli_fetch_assoc($query)){
                                                    ?>
                                                    <tr>
                                                        <td width="210px" ><b style="color:blue;font-size:20px" >Thông tin đơn hàng</b><br><br></td>
                                                    </tr>
                                                    <tr height="30px" >
                                                        <td >Mã đơn hàng : </td>
                                                        <td ><?php echo $row['madh']; ?></td>
                                                    </tr>
                                                    <tr height="30px" >
                                                        <td >Ngày order : </td>
                                                        <td ><?php echo $row['ngayorder'] ?></td>
                                                    </tr>
                                                    <tr height="30px" >
                                                        <td >Tên đăng nhập : </td>
                                                        <td ><?php echo $row['tendn'] ?></td>
                                                    </tr>
                                                    <tr height="30px" >
                                                        <td >Tên người nhận : </td>
                                                        <td ><?php echo $row['tennguoinhan'] ?></td>
                                                    </tr>
                                                    <tr height="30px" >
                                                        <td >Địa chỉ người nhận : </td>
                                                        <td ><?php echo $row['diachinguoinhan'] ?></td>
                                                    </tr>
                                                    <tr height="30px" >
                                                        <td >Số điện thoại người nhận : </td>
                                                        <td ><?php echo $row['dienthoainguoinhan'] ?></td>
                                                    </tr>
                                                    <?php
                                                         }
                                                 ?>
                                                    </table>
                                                    <br><br>

                <table width="880px" align="center">
                    <tr>
                        <td width="150px" >Mã đơn hàng</td>
                        <td width="180px">Mã sản phẩm</td>
                        <td width="100px" >Số lượng</td>
                        <td width="100px" >Giá</td>
                        <td width="200px">Thành tiền</td>
                    </tr>
                    <?php
                        include"include/connetc.php";
                                                    $madh=$_GET['madh'];
                                                    $sql="SELECT * from chitietdonhang where madh='$madh'";
                                                    $query = mysqli_query($connection, $sql);
                                                    while ($row=mysqli_fetch_assoc($query)){
                                                    ?>
                    <tr>
                        <td><?php echo $row['madh']; ?></td>
                        <td><?php echo $row['masp']?></td>
                        <td><?php echo $row['soluong']; ?></td>
                        <td><?php echo $row['gia']; ?></td>
                        <td><?php 
                        $thanhtien=number_format($row['gia']*$row['soluong']);
                        echo $thanhtien; ?></td>
                    </tr>
                    <?php
                         }
                    ?>
                </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>