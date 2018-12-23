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
              <div class="container"><br><br>     
            <h4 align="center">Thông tin cá nhân</h4><br>
                <table width="900px" align="center" >
                                                    <?php
                                                    include"include/connect.php";
                                                    $tendn=$_GET['tendn'];
                                                    $sql="SELECT * from dskhachhang where tendn='$tendn'";
                                                    $query = mysqli_query($connection, $sql);
                                                    while ($row=mysqli_fetch_assoc($query)){
                                                    ?>
                                                    <tr height="30px" >
                                                        <td >Tên khách hàng : </td>
                                                        <td ><?php echo $row['tenkh']; ?></td>
                                                    </tr>
                                                    <tr height="30px" >
                                                        <td >Địa chỉ : </td>
                                                        <td ><?php echo $row['diachi'] ?></td>
                                                    </tr>
                                                    <tr height="30px" >
                                                        <td >Số điện thoại : </td>
                                                        <td ><?php echo $row['sdt'] ?></td>
                                                    </tr>
                                                    <tr height="30px" >
                                                        <td >Mail : </td>
                                                        <td ><?php echo $row['mail'] ?></td>
                                                    </tr>
                                                    <tr height="30px" >
                                                        <td >Tên đăng nhập : </td>
                                                        <td ><?php echo $row['tendn'] ?></td>
                                                    </tr>
                                                    <tr height="30px" >
                                                        <td >Mật khẩu : </td>
                                                        <td ><?php echo $row['matkhau'] ?></td>
                                                    </tr>
                                                    <tr height="30px" >
                                                        <td>
                                                            <br><a href="thaydoithongtin.php?tendn=<?php echo $row['tendn'] ?>">Thay đổi thông tin</a></td>
                                                    </tr>
                                                    <?php
                                                         }
                                                 ?>
                                                    </table>
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
