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
                    <h1 class="page-header">Thêm mới chức vụ</h1>
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
                         
                                    if (isset($_POST["submit"])) {
                                        $macv = $_POST["macv"];
                                        $tencv =$_POST["tencv"];
                                        $sql = "INSERT INTO chucvu VALUES ('$macv', '$tencv')";
                                        echo $sql; 
                                        $query = mysqli_query($connection, $sql);
                                        if(isset($query)){
                                           echo("Đa them" );
                                           header("localhost:dsuser.php");
                                        }else{
                                            echo"them that bai";
                                        }
                                    }
                                ?>
                                <form role="form" method="POST">
                                            <div class="form-group">
                                                <label>Mã chức vụ</label>
                                                <input class="form-control" placeholder="Enter text" name="macv">
                                            </div>
                                            <div class="form-group">
                                                <label>Tên Chức vụ</label>
                                                <input class="form-control" placeholder="Enter text" name="pass">
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
