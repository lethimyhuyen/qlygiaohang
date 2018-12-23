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
                                    <?php 
                                    include"include/connect.php";
                                    if(isset($_POST['submit'])){
                                        $manh=$_POST['manh'];
                                        $tennh=$_POST['tennh'];
                                        $diachi=$_POST['diachi'];
                                        $sdt=$_POST['sdt'];
                                        $maquan=$_POST['maquan'];
                                        echo $quan;
                                        $sql= "INSERT INTO `nhahang` (`manh`, `tennh`, `diachi`, `sdt`, `maquan`, `user`, `password`) VALUES ('$manh', '$tennh', '$diachi', '$sdt', '$maquan', '', '');";
                                        echo $sql; 
                                        $query = mysqli_query($connection, $sql);
                                        if(isset($query)){
                                           echo("Đa them" );
                                           header("localhost:index.php");
                                        }else{
                                            echo"them that bai";
                                        }

                                    }
                                    ?>
                                        <form role="form" method="POST">
                                            <div class="form-group">
                                                <label>Mã nhà hàng</label>
                                                <input class="form-control" placeholder="Enter text" name="manh">
                                            </div>
                                            <div class="form-group">
                                                <label>Tên nhà hàng</label>
                                                <input class="form-control" placeholder="Enter text" name="tennv">
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
                                                <label for="inputAddress">Quận:</label>
                                                    <select name="maquan" id="isearchstring2" class="form-control">
                                                            <option   value="0" class="pulldown">Chọn quận</option>
                                                            <option <?php if (isset($maquan) && $maquan == '1') echo "selected=\"selected\"";  ?> value="1" >Quận 1</option>
                                                            <option <?php if (isset($maquan) && $maquan == '2') echo "selected=\"selected\"";  ?> value="2" >Quận 2</option>
                                                            <option <?php if (isset($maquan) && $maquan == '3') echo "selected=\"selected\"";  ?> value="3" >Quận 3</option>
                                                            <option <?php if (isset($maquan) && $maquan == '4') echo "selected=\"selected\"";  ?> value="4" >Quận 4</option>
                                                            <option <?php if (isset($maquan) && $maquan == '5') echo "selected=\"selected\"";  ?> value="5" >Quận 5</option>
                                                            <option <?php if (isset($maquan) && $maquan == '6') echo "selected=\"selected\"";  ?> value="6" >Quận 6</option>
                                                            <option <?php if (isset($maquan) && $maquan == '7') echo "selected=\"selected\"";  ?> value="7" >Quận 7</option>
                                                            <option <?php if (isset($maquan) && $maquan == '8') echo "selected=\"selected\"";  ?> value="8" >Quận 8</option>
                                                            <option <?php if (isset($maquan) && $maquan == '9') echo "selected=\"selected\"";  ?> value="9" >Quận 9</option>
                                                            <option <?php if (isset($maquan) && $maquan == '10') echo "selected=\"selected\"";  ?> value="10" >Bình Thạch</option>
                                                            <option <?php if (isset($maquan) && $maquan == '11') echo "selected=\"selected\"";  ?> value="11" >Tân Bình</option> 
                                                            <option <?php if (isset($maquan) && $maquan == '12') echo "selected=\"selected\"";  ?> value="12" >Tân Phú</option> 
                                                    </select>
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