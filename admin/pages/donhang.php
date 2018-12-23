<?php
    session_start();
  include"include/connetc.php";  
 if(!isset($_SESSION['mail']))
 {
             header('location:login.php'); exit;
    
}  
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
            include"include/header.php";
         ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Đơn hàng</h1>
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
                        <?php  
                        include"include/connetc.php";
                        print_r($_POST);
                         if (isset($_POST['submit']) && $_POST['submit']=='xulygiaohang')
                            {
                                $mdh = $_POST['madh']; $mnv = $_POST['searchstring2'];  /* */
                                $sql4="insert into phancongcongviec(madh, manv) values('$mdh','$mnv')";
                                echo "<hr> $sql4 ";                                                            
                                mysqli_query($connection,$sql4);
                                $sql5 = "update donhang set matt='2' where madh='$mdh' ";
                                mysqli_query($connection,$sql5);
                                echo "<hr> $sql5";

                            }
                        ?>
                        <div class="panel-body">
                            <table widtd="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" method="POST">
                                <tdead>
                                    <tr align="center">
                                        <th>Mã Đơn hàng</th>
                                        <th>Trạng thái</th>
                                        <th>Ngày Order</th>
                                        <th>Tên tài khoản</th>
                                        <th>Tên người nhận</th>
                                        <th>Địa chỉ người nhận</th>
                                        <th>Điện thoại người nhân</th>
                                        <th>Chi tiết đơn hàng</th>
                                        <th>Nhân viên giao hàng</th>
                                        <th>Action</th>

                                    </tr>
                                </tdead>
                                <?php
                                include"include/connetc.php";
                                $sql = "select * from donhang,trangthai where donhang.matt=trangthai.matt and donhang.matt='1'";
                                $query = mysqli_query($connection, $sql);
                                    $sql2 = "select * from dsnhanvien,chucvu where dsnhanvien.macv=chucvu.macv and tencv='giao hàng'";
                                    $result=mysqli_query($connection,$sql2);
                                    $dsnv="<select name=\"searchstring2\" id=\"isearchstring2\"  class=\"btn-group2\">
                                                            <option   value=\"0\" class=\"pulldown\">Chọn</option>";
                                    while($r =mysqli_fetch_assoc($result))
                                    {
                                        $dsnv .= "<option   value=\"{$r['manv']}\" class=\"pulldown\">{$r['tennv']}</option>";
                                    }
                                        $dsnv .="</select>";
                                    while ($row=mysqli_fetch_assoc($query)) {
                                ?>
                                <form action="" method="post">
                                <tr>
                                    <td><?php echo $row['madh']?>
                                        <input type="hidden" name="madh" value="<?php echo $row['madh'] ?>">

                                    </td>
                                    <td><?php echo $row['tentt']?></td>
                                    <td><?php echo $row['ngayorder']?></td>
                                    <td><?php echo $row['tendn']?></td>
                                    <td><?php echo $row['tennguoinhan']?></td>
                                    <td><?php echo $row['diachinguoinhan']?></td>
                                    <td><?php echo $row['dienthoainguoinhan']?></td>
                                    <td><a href="chitietdonhang.php?madh=<?php echo $row['madh'] ?>"><h7>Chi tiết<h7></a></td>
                                    <td>
                                      <?php
                                        echo $dsnv;
                                      ?>
                                       </td>
                                       <td><button type="submit" value="xulygiaohang" class="btn-form" name="submit"><span class="icon-magnifier search-icon"></span>Xong<i class="pe-7s-angle-right"></i></button></td>
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
