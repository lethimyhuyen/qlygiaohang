<?php 
                                    include"include/connect.php";
                                    if(isset($_POST['submit'])){
                                        $masp=$_POST['masp'];
                                        $tensp=$_POST['tensp'];
                                        $manh=$_POST['manh'];                                 
                                        $gia=$_POST['gia'];
                                        $hinh=$_POST['hinh'];
                                        $soluong=$_POST['soluong'];
                                        $sql= "INSERT INTO sanpham values('$masp','$manh','$tensp','$gia','$hinh','$soluong')";
                                        $query = mysqli_query($connection, $sql);
                                        if(isset($query)){
                                           echo("Đa them" );
                                           header("localhost:index.php");
                                        }else{
                                            echo"them that bai";
                                        }

                                    }
                                    ?>
<?php
    session_start();
    
 if(!isset($_SESSION['user']))
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
                    <h1 class="page-header">Thêm mới Sản phẩm</h1>
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
                                        <form role="form" method="POST">
                                            <div class="form-group">
                                                <label>Mã sản phẩm</label>
                                                <input class="form-control" placeholder="Enter text" name="masp">
                                            </div>
                                            <div class="form-group">
                                                <label>Mã nhà hàng</label>
                                                <input class="form-control" placeholder="Enter text" name="manh">
                                            </div>
                                               <div class="form-group">
                                                <label>Tên Sản Phẩm</label>
                                                <input class="form-control" placeholder="Enter text" name="tensp">
                                            </div>
                                             <div class="form-group">
                                                <label>Giá</label>
                                                <input class="form-control" placeholder="Enter text" name="gia">
                                            </div>
                                             <div class="form-group">
                                                <label>Hình</label>
                                                <input class="form-control" placeholder="Enter text" name="hinh" type="file"> 
                                            </div>
                                            <div class="form-group">
                                                <label>Số lượng</label>
                                                <input class="form-control" placeholder="Enter text" name="soluong">
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