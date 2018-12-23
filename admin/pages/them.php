<?php
    session_start();
    
 if(!isset($_SESSION['mail']))
 {
             header('location:login.php'); exit;
    
}
include"phanquyen.php";
   
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
                    <h1 class="page-header">Thêm mới nhân viên</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Nhập thông tin
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php 
                                    include"include/connetc.php";
                                    if(isset($_POST['submit'])){
                                        $manv="nv_".time();
                                        $tennv=$_POST['tennv'];
                                        $gioitinh=$_POST['gioitinh'];
                                        $diachi=$_POST['diachi'];
                                        $sdt=$_POST['sdt'];
                                        $mail=$_POST['mail'];
                                        $chucvu=$_POST['chucvu'];
                                        echo $chucvu;
                                        $pass=$manv;
                                        $sql= "INSERT INTO dsnhanvien VALUES ('$manv', '$tennv', '$gioitinh', '$diachi', '$sdt', '$mail','$macv','$pass')";
                                        echo $sql; 
                                        $query = mysqli_query($connection, $sql);
                                        if(isset($query)){
                                           echo("Đa them" );
                                           header("localhost:tables.php");
                                        }else{
                                            echo"them that bai";
                                        }

                                    }
                                    ?>
                                        <form role="form" method="POST">
                                            <div class="form-group">
                                                <label>Họ và tên</label>
                                                <input class="form-control" placeholder="Enter text" name="tennv">
                                            </div>
                                            <div class="form-group">
                                                <label>Giới tính</label></br>
                                                <input  type="radio" name="gioitinh" value="1">Nam
                                                <input type="radio" name="gioitinh" value="2" >Nữ
                                            </div>
                                             <div class="form-group">
                                                <label>Địa chỉ</label>
                                                <input class="form-control" placeholder="Enter text" name="diachi">
                                            </div>
                                             <div class="form-group">
                                                <label>Số điện thoại</label>
                                                <input class="form-control" placeholder="Enter text" name="sdt">
                                            </div>
                                             <div class="form-group">
                                                <label>Mail</label>
                                                <input class="form-control" placeholder="Enter text" name="mail">
                                            </div>
                                            <div class="form-group">
                                                <label>Chức vụ</label></br>
                                                <input  type="radio" name="macv" value="ad">Admin
                                                <input type="radio" name="macv" value="ql" >Quản lý
                                                <input type="radio" name="macv" value="gh">Giao Hàng
                                                <input type="radio" name="macv" value="tn">Tiếp nhận
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-default">Thêm </button>
                                        </form>
                                    
                            </div>
                            <!-- /.row (nested) -->
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

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>