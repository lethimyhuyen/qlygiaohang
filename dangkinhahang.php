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
                { 
                    $manh=$_POST['manh'];
                    $tennh=$_POST['tennh'];
                    $diachi=$_POST['diachi'];
                    $sdt=$_POST['sdt'];
                    $maquan=$_POST['maquan'];
                    $sql= "INSERT INTO `nhahang` (`manh`, `tennh`, `diachi`, `sdt`, `maquan`, `user`, `password`) VALUES ('$manh', '$tennh', '$diachi', '$sdt', '$maquan', '', '')";
                    echo $sql; 
                    $query = mysqli_query($connection, $sql);
                    if(isset($query)){
                     //  echo("Đa them" );exit;
                      // header("localhost:tables.php");
                      ?>
                    <script type="text/javascript">
                      alert("Đăng kí thành công");
                      //window.location='login.php';
                    </script>
                      <?php
                    }else{
                        echo"Đăng kí thất bại";
                    }

                }
            ?>
          <div class="container"></br>      
            <h3 align="center">Đăng kí nhà hàng</h3></br>  
            <h8>Bạn là chủ nhà hàng và bạn muốn tham gia giaohangnhanh.tk</h8>
            <form role="form" method="POST" action="">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Mã Nhà hàng:</label>
                  <input type="text" class="form-control" id="manh" name="manh">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Tên Nhà hàng:</label>
                  <input type="text" class="form-control" id="tennh" name="tennh">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputAddress">Số Điện Thoại:</label>
                  <input type="sdt" class="form-control" id="sdt" name="sdt">
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Địa chỉ nhà hàng:</label>
                <input type="diachi" class="form-control" id="dia" name="diachi">
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
              <div class="form-group">
                <label for="inputAddress">Tài khoản nhà hàng:</label>
                <input type="user" class="form-control" id="dia" name="user">
              </div>
              <div class="form-group">
                <label for="inputAddress">Mật khẩu:</label>
                <input type="password" class="form-control" id="dia" name="password">
              </div>
              <div class="form-group col-md-4">
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
