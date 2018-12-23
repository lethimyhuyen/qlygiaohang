<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php
include"include/head.php";
?>

<body>
    <div class="container">
        <div class="row">
            <?php
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $matkhaucu=$_POST['passcu'];
                $matkhaumoi=$_POST['passmoi'];
                $query="SELECT manv,pass FROM user WHERE pass=md5('$matkhaucu
            }') AND manv={$_SESSION['manv']} ";
                $results=mysqli_query($connection,$query);
                kt_query($results,$query);
                if(mysqli_num_rows($results)==1){
                    if(trim($_POST['passcu'])!=trim($_POST['passmoixn']))
                    {
                        echo 'mat khau khong giong nhau';
                    }else{
                        $query_up="UPDATE user 
                                   SET pass=md5(trim('{$passmoi}')) 
                                   WHERE manv={$_SESSION['manv']}";
                        $results_up=mysqli_query($connection,$query_up);
                        kt_query($results_up,$query_up);
                        if(mysqli_affected_rows($connection)==1){
                            echo 'doi mat khau khong thanh cong';
                        }
                    }
                }else{
                    echo 'mat khau sai';
                }
            } 
            ?>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Đổi Mật Khẩu</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="">
                                <div class="form-group">
                                    <label>Tài khoản</label>
                                    <input class="form-control" placeholder="username" name="username" type="text" value="<?php echo $_SESSION['username'] ?>" id="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu cũ</label>
                                    <input class="form-control" placeholder="Pass" name="passcu" type="password" value="" id="pass">
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu mới</label>
                                    <input class="form-control" placeholder="Pass" name="passmoi" type="password" value="" id="pass">
                                </div>
                                <div class="form-group">
                                    <label>Xác nhận mật khẩu</label>
                                    <input class="form-control" placeholder="Pass" name="passmoixn" type="password" value="" id="pass">
                                </div>
                            <button type="submit" name="submit" class="btn btn-lg btn-success btn-block">Đổi mật khẩu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

