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
        include"include/header.php";
        ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thông tin nhân viên</h1>
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
                                    $manv=$_GET['manv'];
                                    $sql="SELECT * from user where manv='$manv'";
                                    $query = mysqli_query($connection, $sql);
                                    $row=mysqli_fetch_array($query);
                                    if(isset($_POST['update'])){
                                        if(empty($_POST['username'])){
                                            echo'<p style="color: red"> Vui lòng không để trống</p>'; 
                                        }else {
                                            $username=$_POST['username'];
                                            if($row['username']==$username){
                                                header('location:dsuser.php');
                                            }else{
                                                $sql2="update user set username='$username' where manv='$manv'";
                                                $query=mysqli_query($connection, $sql2);
                                                if($query){
                                                    header('location:dsuser.php');
                                                }
                                            }
                                        }
                                    }
                                ?>
                                <form role="form" method="POST">
                                            <div class="form-group">
                                                <label>Mã nhân viên</label>
                                                <input class="form-control" placeholder="Enter text" name="">
                                            </div>
                                            <div class="form-group">
                                                <label>Tên đăng nhập</label>
                                                <input class="form-control" placeholder="Enter text" name="username" value="<?php echo $row['username'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Mật khẩu</label>
                                                <input class="form-control" placeholder="Enter text" name="pass" value="<?php echo $row['pass'];?>">
                                            </div>
                                             <div class="form-group">
                                                <label>Quyền truy cập</label>
                                                <input class="form-control" placeholder="Enter text" name="quyen" value="<?php echo $row['quyen'];?>">
                                            </div>
                                            <input type="submit" name="update" value="Chấp nhận"/>
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
