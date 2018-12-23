<?php
    session_start();
    
if(!isset($_SESSION['user']))
 {
             header('location:login.php'); exit;
    
}
   
?>
<!DOCTYPE html>
<html lang="en">
<style>
        img.sp{width: 80px; height: 80px}
</style>
<?php
include"include/head.php";
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php
        include"include/header.php";
        ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sản Phẩm</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh sách sản phẩm
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr align="center">
                                        <td>Mã Sản Phẩm</td>
                                        <td>Tên Sản Phẩm</td>
                                        <td>Tên Nhà Hàng</td>
                                        <td>Địa Chỉ</td>
                                        <td>Số Điện Thoại</td>
                                        <td>Giá</td>
                                        <td>Hình</td>
                                        <td>Số Lượng</td>
                                        <td>Action</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include"include/connect.php";
                                    //print_r($_SESSION);
                                    $user = $_SESSION['user'];
                                    $sql= "select * from sanpham,nhahang where nhahang.manh=sanpham.manh and nhahang.user='$user' " ;
                                    $query = mysqli_query($connection, $sql);
                                    while ($row=mysqli_fetch_assoc($query)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['masp']?></td>
                                            <td><?php echo $row['tensp']?></td>
                                            <td><?php echo $row['tennh']?></td>
                                            <td><?php echo $row['diachi']?></td>
                                            <td><?php echo $row['sdt']?></td>
                                            <td><?php echo $row['gia']?></td>
                                            <td><img src="../images/<?php echo $row['hinh']; ?>" class=sp></td>
                                            <td><?php echo $row['soluong']?></td>
                                            <td><a href="deletesp.php?masp=<?php echo $row['masp']?>">Xóa</a></td>
                                            <td><a href="edit.php?masp=<?php echo $row['masp']?>">Sửa</a></td>
                                        </tr>
                                    <?php    
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
