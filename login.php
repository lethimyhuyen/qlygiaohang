dhkufkdgskklSKLnflkn
lkfdngknlkfdxnlknfkl
fnklndgkxfn
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
                        <h2 class="panel-title" align="center">Đăng Nhập</h2>
                    </div>
                    <?php
                        include"include/connect.php";
                        if(isset($_POST['submit'])){
                            $tendn=mysqli_real_escape_string($connection,$_POST['tendn']);
                            $matkhau=mysqli_real_escape_string($connection,$_POST['matkhau']);
                            $sql="select * from dskhachhang where tendn='".$tendn."' and matkhau='".$matkhau."'";

                          //  echo $sql;
                            $result=mysqli_query($connection,$sql);
                            $row=mysqli_num_rows($result);
                            if($row>0){
                                $_SESSION['tendn']=$tendn;//echo "ok";exit;

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
                     <div class="container">       
                        <div class="panel-body">
                            <form role="form" method="POST" action="">
                                    <div class="form-group">
                                        <label>Tên đăng nhập</label></br> 
                                        <input class="form-control" placeholder="username" name="tendn" type="username" id="tendn" autofocus>
                                    </div>
                                    <div class="form-group"></br> 
                                        <label>Mật khẩu</label>
                                        <input class="form-control" placeholder="password" name="matkhau" type="password" value="" id="matkhau">
                                    </div>
                                    <a href="#"><h7>Quên Mật khẩu</h7></a>
                                <button type="submit" name="submit"
                                class="btn btn-lg btn-success btn-block">Login</button>
                            </form>
                        </div>    
                    </div>
                </fieldset>
                </br> 
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
