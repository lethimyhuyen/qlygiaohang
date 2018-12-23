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
                        include"include/connect.php";
                        if(isset($_POST['submit'])){
                            $user=mysqli_real_escape_string($connection,$_POST['user']);
                            $password=mysqli_real_escape_string($connection,$_POST['password']);
                            $sql="select * from nhahang where user='".$user."' and password='".$password."'";

                          //  echo $sql;
                            $result=mysqli_query($connection,$sql);
                            $row=mysqli_num_rows($result);
                            if($row>0){
                                $_SESSION['user']=$user;//echo "ok";exit;

                                //header("location:index.php");
                                ?>
                            <script>
                                window.location='index.php';
                            </script>
                                <?php
                            }
                            else{
                                ?>
                                 <div style="font-size: 13; color: red; z-index: 1;"><?php echo "username hoặc password không đúng!";?></div>
                                 <?php
                            }
                        }
                    ?>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Tên đăng nhập" name="user" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <button type="submit" name="submit"
                            class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
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
