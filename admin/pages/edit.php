<?php
    session_start();
    
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
            include"include/header.php"
         ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                     <?php 
                    include"include/connetc.php";
                    $manv=$_GET['manv'];
                    $sql="SELECT * from dsnhanvien where manv='$manv'";
                    $query = mysqli_query($connection, $sql);
                    $row=mysqli_fetch_array($query);
                    if(isset($_POST['update'])){
                        if(empty($_POST['tennv'])){
                            echo'<p style="color: red"> Vui lòng không để trống</p>'; 
                        }else {
                            $tennv=$_POST['tennv'];
                            $gioitinh=$_POST['gioitinh'];
                            $diachi=$_POST['diachi'];
                            $sdt=$_POST['sdt'];
                            $mail=$_POST['mail'];
                            if($row['tennv']==$tennv){
                            header('location:tables.php');
                            }else{
                                $sql2="update dsnhanvien set tennv='$tennv' where manv='$manv'";
                                $query=mysqli_query($connection, $sql2);
                                if($query){
                                    header('location:tables.php');
                                }
                            }
                        }
                    }
                    ?>
                    <h1 class="page-header">Sửa thông tin nhân viên</h1>
                    <form role="form" method="POST">
                                            <div class="form-group">
                                                <label>Mã nhân viên</label>
                                                <input class="form-control" placeholder="Enter text" name="manv" value="<?php echo $row['manv'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Họ và tên</label>
                                                <input class="form-control" placeholder="Enter text" name="tennv" value="<?php echo $row['tennv'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Giới tính</label></br>
                                                <input <?php if($row["gioitinh"]==1) echo "checked='checked'";?> type="radio" name="gioitinh" value="1">Nam
                                                <input <?php if($row["gioitinh"]==2) echo "checked='checked'";?> type="radio" name="gioitinh" value="2" >Nữ
                                            </div>
                                             <div class="form-group">
                                                <label>Địa chỉ</label>
                                                <input class="form-control" placeholder="Enter text" name="diachi" value="<?php echo $row['diachi'];?>">
                                            </div>
                                             <div class="form-group">
                                                <label>Số điện thoại</label>
                                                <input class="form-control" placeholder="Enter text" name="sdt" value="<?php echo $row['sdt'];?>">
                                            </div>
                                             <div class="form-group">
                                                <label>Mail</label>
                                                <input class="form-control" placeholder="Enter text" name="mail" value="<?php echo $row['mail'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Chức vụ</label></br>
                                                <input <?php if($row["macv"]=="ad") echo "checked='checked'";?> type="radio" name="chucvu" value="ad">Admin
                                                <input <?php if($row["macv"]=="ql") echo "checked='checked'";?> type="radio" name="chucvu" value="ql" >Quản lý
                                                <input <?php if($row["macv"]=="gh") echo "checked='checked'";?> type="radio" name="chucvu" value="gh">Giao Hàng
                                                <input <?php if($row["macv"]=="tn") echo "checked='checked'";?> type="radio" name="chucvu" value="tn">Tiếp nhận
                                            </div>
                                            <div class="form-group">
                                                <label>Mật khẩu</label>
                                                <input class="form-control" placeholder="Enter text" name="pass" value="<?php echo $row['pass'];?>">
                                            </div>
                        <input type="submit" name="update" value="Chấp nhận"/>
                    </form>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    
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
