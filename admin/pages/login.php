<?php
                        include"include/connetc.php";
                        session_start();
                        if(isset($_POST['submit'])){
                            $mail=$_POST['mail'];
                            $pass=$_POST['pass'];
                            $sql="select * from dsnhanvien where mail = '".$mail."'
                             and pass = '".$pass."' ";
                            $query = mysqli_query($connection, $sql);    
                            $num = mysqli_num_rows($query);
                            if ($num > 0) {
                                $row = mysqli_fetch_array($query);
                                print_r(row);
                                $_SESSION['mail'] = $row['mail'];
                                $_SESSION['pass'] = $row['pass'];
                                $_SESSION['macv']=$row['macv'];
                                header('location:index.php');
                                
                            } else {
                                echo "<script>alert('Tên đăng nhập hoặc password sai!');</script>";
                            }
                        }
                    ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Giaohangnhanh</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="">
                                <div class="form-group">
                                    <input class="form-control" placeholder="mail" name="mail" type="text" id="mail" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Pass" name="pass" type="password" value="" id="pass">
                                </div>
                            <button type="submit" name="submit"
                            class="btn btn-lg btn-success btn-block">Login</button>
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
