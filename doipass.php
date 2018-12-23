<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php 
    include"include/head.php";
    ?>
<body>
    <?php 
    include"include/header.php";
    ?>
    <!-- SLIDER -->
    <?php
    include"include/slider.php";
     ?>
    <!--// SLIDER -->
    <!--//END HEADER -->
                <fieldset>
                    <div class="panel-heading"></br> 
                        <h2 class="panel-title" align="center">Đổi Mật Khẩu</h2>
                    </div>
                    <?php

                        include"include/connect.php";
                        if(isset($_POST['submit'])){
                            $tendn=$_POST['tendn'];
                            $matkhau=$_POST['matkhau'];
                            $matkhaumoi=$_POST['matkhaumoi'];
                            $sql="select * from dskhachhang where tendn='".$tendn."' and matkhau='".$matkhau."'";
                            $result=mysqli_query($connection,$sql);
                            $row=mysqli_num_rows($result);
                            if($row=0){
                                echo "Tài khoản hoặc mật khẩu sai";
                            }else{
                                $sql_up="UPDATE dskhachhang set matkhau='$matkhaumoi'";
                                $result=mysqli_query($connection,$sql_up);
                                echo"Thay đổi mật khẩu thành công";
                            }

                          
                        }

                        $tdn = isset($_SESSION['tendn'])?$_SESSION['tendn']:'';
                    ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <form method="POST" action="" id="formChangePass">
                                    <div class="form-group">
                                        <label>Tài Khoản</label>
                                        <input type="text" name="tendn" class="form-control" value="<?php echo $tdn; ?>" disabled="true">
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu cũ</label>
                                        <input type="password" name="matkhau" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu mới</label>
                                        <input type="password" name="matkhaumoi" class="form-control">
                                    </div>
                                    <div>
                                        <input type="submit" name="submit" value="Đổi mật khẩu" class="btn btn-primary">
                                    </div><br>
                                </form>
                            </div>
                        </div>
                    </div>
  <!--============================= FOOTER =============================-->
    <?php 
    include"include/footer.php"
    ?>
    <!--//END FOOTER -->
    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(window).scroll(function() {
            // 100 = The point you would like to fade the nav in.

            if ($(window).scrollTop() > 100) {

                $('.fixed').addClass('is-sticky');

            } else {

                $('.fixed').removeClass('is-sticky');

            };
        });
    </script>
</body>
</html>
