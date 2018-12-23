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
                    $tendn=$_GET['tendn'];
                    $sql="SELECT * from dskhachhang where tendn='$tendn'";
                    $query = mysqli_query($connection, $sql);
                    $row=mysqli_fetch_array($query);
                    if(isset($_POST['update'])){
                        if(empty($_POST['tendn'])){
                            echo'<p style="color: red"> Vui lòng không để trống</p>'; 
                        }else {
                            $tenkh=$_POST['tenkh'];
                            $diachi=$_POST['diachi'];
                            $sdt=$_POST['sdt'];
                            $mail=$_POST['mail'];
                            $tendn=$_POST['tendn'];
                            if($row['diachi']==$diachi){
                            ?>
                            <script>
                                window.location='quanlythongtin.php';
                            </script>
                                <?php
                            }else{
                                $sql2="update dskhachhang where tendn='$tendn'";
                                print_r($sql2);exit();
                                $query=mysqli_query($connection, $sql2);
                                if($query){
                                    ?>
                            <script>
                                window.location='quanlythongtin.php';
                            </script>
                                <?php
                                }
                            }
                        }
                    }
                    ?>
             
          <div class="container"><br><br>       
            <h4 align="center">Thay đổi thông tin</h4>
            <form role="form" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Họ và tên:</label>
                  <input class="form-control" placeholder="Enter text" name="tenkh" value="<?php echo $row['tenkh'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Địa chỉ:</label>
                  <input class="form-control" placeholder="Enter text" name="diachi" value="<?php echo $row['diachi'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Số điện thoại:</label>
                  <input class="form-control" placeholder="Enter text" name="sdt" value="<?php echo $row['sdt'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mail:</label>
                  <input class="form-control" placeholder="Enter text" name="mail" value="<?php echo $row['mail'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tài khoản</label>
                  <input class="form-control" placeholder="Enter text" name="tendn" value="<?php echo $row['tendn'];?>">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Mật khẩu</label>
                  <input class="form-control" placeholder="Enter text" name="matkhau" value="<?php echo $row['matkhau'];?>">
                </div>
                <button type="update" class="btn btn-primary" name="update">Thay đổi</button>
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
