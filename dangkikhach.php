<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php 
    include"include/head.php";
    ?>

<body>
    <!--============================= HEADER =============================-->
    <?php 
    include"include/header.php";
    ?>
    <!-- SLIDER -->
    <?php
    include"include/slider.php"
     ?>
    <!--// SLIDER -->
    <!--//END HEADER -->
    <?php 
                include"include/connect.php";
                print_r($_POST);
                if(isset($_POST['insert']))
                { //  $makh=$_POST['makh'];
                    $tenkh=$_POST['tenkh'];
                    $diachi=$_POST['diachi'];
                    $sdt=$_POST['sdt'];
                    $mail=$_POST['mail'];
                    $tendn=$_POST['tendn'];
                    $matkhau=md5($_POST['matkhau']);
                    $sql= "INSERT INTO dskhachhang(`makh`, `tenkh`, `diachi`, `sdt`, `mail`, `tendn`,`matkhau`)  VALUES (NULL, '$tenkh','$diachi', '$sdt', '$mail', '$tendn','$matkhau')";
                    echo $sql; 
                    $query = mysqli_query($connection, $sql);
                    if(isset($query)){
                     //  echo("Đa them" );exit;
                      // header("localhost:tables.php");
                      ?>
                    <script type="text/javascript">
                      alert("Đăng kí thành công");
                      window.location='login.php';
                    </script>
                      <?php
                    }else{
                        echo"Đăng kí thất bại";
                    }

                }
                ?>
             
          <div class="container">     
            <h4 align="center">Đăng kí thành viên</h4>  
            <form role="form" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Họ và tên:</label>
                  <input class="form-control" placeholder="Enter text" name="tenkh">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Địa chỉ:</label>
                  <input class="form-control" placeholder="Enter text" name="diachi">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Số điện thoại:</label>
                  <input class="form-control" placeholder="Enter text" name="sdt">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mail:</label>
                  <input class="form-control" placeholder="Enter text" name="mail">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tài khoản</label>
                  <input class="form-control" placeholder="Enter text" name="tendn">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Mật khẩu</label>
                  <input class="form-control" placeholder="Enter text" name="matkhau">
                </div>
                <button type="submit" class="btn btn-primary" name="insert">Gửi</button>
          </form>  
        </div>    
    <!--============================= CATEGORIES =============================-->
    <?php
    include"include/categories.php";
    ?>
    <!--//END CATEGORIES -->
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
