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
                    <h1 class="page-header">Danh sách nhân viên giao hàng</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh sách nhân viên
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table widtd="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <tdead>
                                    <tr align="center">
                                        <td>Mã đơn hàng</td>
                                        <td>Mã nhân viên</td>
                                        <td>Trạng thái</td>
                                        <td>Action</td>
                                    </tr>
                                </tdead>
                                <?php
                                    include"include/connetc.php";
                                    print_r($_POST);
                                    $sql = "select * from phancongcongviec,donhang,trangthai where phancongcongviec.madh=donhang.madh and donhang.matt=trangthai.matt";
                                    $query = mysqli_query($connection, $sql);
                                    while ($row=mysqli_fetch_assoc($query)) {
                                ?>
                                <form action="" method="post">
                                <tr>
                                    <td><?php echo $row['madh']?></td>
                                    <td><?php echo $row['manv']?></td>
                                    <td><?php echo $row['tentt']?></td>
                                    <td><button type="submit" value="xuly" class="btn-form" name="submit"><span class="icon-magnifier search-icon"></span>Hoàn thành<i class="pe-7s-angle-right"></i></button></td>
                                    <?php
                                    if (isset($_POST['submit']) && $_POST['submit']=='xuly')
                                        {
                                            $sql5 = "update donhang set matt='3' ";
                                            mysqli_query($connection,$sql5);
                                            echo "<hr> $sql5";
                                        }  
                                    ?>
                                </tr>
                                </form>
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