<?php
    session_start();
    if(isset($_SESSION['mail'])){
?>
<!DOCTYPE html>
<html lang="en">

<?php 
include"include/head.php";
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php 
            include"include/header.php"
         ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh sách nhà hàng</h1>
                    <div class="input-group custom-search-form" >
                                <form method="get" action="timnhahang.php">
                                <input type="text" class="form-control" placeholder="Search..." name="Search"> 
                                <input type="submit" name="submit" value="Tìm Kiếm">
                            </form>
                            </div><br>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh sách khách hàng
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table widtd="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <tdead>
                                    <tr align="center">
                                        <td>Mã nhà hàng</td>
                                        <td>Tên nhà hàng</td>
                                        <td>Địa Chỉ</td>
                                        <td>Số Điện Thoại</td>
                                        <td>Quận</td>
                                        <td>Tài Khoản</td>
                                        <td>Password</td>
                                    </tr>
                                </tdead>
                                 <?php
                                    include"include/connetc.php";
                                    $sql = "SELECT * FROM nhahang,quan where nhahang.maquan=quan.maquan ";
                                    $query = mysqli_query($connection, $sql);
                                    while ($row=mysqli_fetch_assoc($query)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['manh']?></td>
                                    <td><?php echo $row['tennh']?></td>
                                    <td><?php echo $row['diachi']?></td>
                                    <td><?php echo $row['sdt']?></td>
                                    <td><?php echo $row['quan']?></td>
                                    <td><?php echo $row['user']?></td>
                                    <td><?php echo $row['password']?></td>
                                </tr>
                                <?php 
                                    }
                                ?>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
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

    <!-- Custom tdeme JavaScript -->
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
<?php
}else{
    header('location:login.php');
}
?>