<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
?>
<?php
session_start();
if(!isset($_SESSION)) session_start();
if (!isset($_SESSION['tendn']))
{
header("location:login.php");exit;

}
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
    <br>   
          <div class="container">     
            <h4 align="center">Điền Thông Tin Người Nhận</h4><br>
            <form action="xulydonhang.php" method="POST">
			  <div class="form-group">
			    <label for="formGroupExampleInput">Tên Người Nhận:</label>
			    <input type="text" class="form-control" name="tennguoinhan">
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput2">Địa Chỉ Người Nhận:</label>
			    <input type="text" class="form-control" name="diachinguoinhan" >
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput2">Số Điện Thoại:</label>
			    <input type="text" class="form-control" name="dienthoainguoinhan" >
			  </div>
			  <input type="submit" name="thantoan" value="Thanh toan">
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
