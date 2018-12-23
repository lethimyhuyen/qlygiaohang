<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
?>

<?php
session_start();
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<style>
    img.sp{width: 401px; height: 291px}
</style>

<?php 
    include"include/head.php";
    ?>

<body>
    <!--============================= HEADER =============================-->
    <?php 
    include"include/header.php";
    //print_r($_SESSION);
    ?>
    <!-- SLIDER -->
    <?php
    include"include/slider.php"
     ?>
    <!--// SLIDER -->
    <!--//END HEADER -->
    <!--============================= FEATURED PLACES =============================-->
<div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3>Sản phẩm</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    include"include/connect.php";
                    $sql="select * from nhahang,sanpham where nhahang.manh=sanpham.manh";
                    
                    $query = mysqli_query($connection, $sql);
                    while ($row=mysqli_fetch_assoc($query)){?>
                        <div class="col-md-4 featured-responsive">
                            <div class="featured-place-wrap">
                                <a href="#">
                                    <img src="<?php echo BASE_PATH. 'images/'.$row['hinh'] ?>" class="sp" alt="#">
                                    <div class="featured-title-box">
                                        <h4><?php echo $row['tensp']?></h4>
                                        <p><h6><?php echo $row['tennh']?><h6></p>
                                        <ul>
                                            <li><span class="icon-location-pin"></span>
                                                <p><?php echo $row['diachi']?></p>
                                            </li>
                                            <li><span class="icon-screen-smartphone"></span>
                                                <p><?php echo $row['sdt']?></p>
                                            </li>
                                            <li><span class="icon-link"></span>
                                                <p><?php echo $row['gia']?></p>
                                            </li>

                                        </ul>
                                        <div class="bottom-icons">
                                            <div class="open-now">
                                                <a href="updategiohang.php?masp=<?php echo $row['masp'] ?>"><h7>Mua Hàng<h7></a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php 
                    }
                ?>
            </div>
</div>
<!----//container--->
    <!--<section class="main-block light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3>Nổi bật</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 featured-responsive">
                    <div class="featured-place-wrap">
                        <a href="detail.php">
                            <img src="images/featured1.jpg" class="img-fluid" alt="#">
                            <span class="featured-rating-orange">6.5</span>
                            <div class="featured-title-box">
                                <h6>Burger & Lobster</h6>
                                <p>Restaurant </p> <span>• </span>
                                <p>3 Reviews</p> <span> • </span>
                                <p><span>$$$</span>$$</p>
                                <ul>
                                    <li><span class="icon-location-pin"></span>
                                        <p>1301 Avenue, Brooklyn, NY 11230</p>
                                    </li>
                                    <li><span class="icon-screen-smartphone"></span>
                                        <p>+44 20 7336 8898</p>
                                    </li>
                                    <li><span class="icon-link"></span>
                                        <p>https://burgerandlobster.com</p>
                                    </li>

                                </ul>
                                <div class="bottom-icons">
                                    <div class="closed-now">CLOSED NOW</div>
                                    <span class="ti-heart"></span>
                                    <span class="ti-bookmark"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 featured-responsive">
                    <div class="featured-place-wrap">
                        <a href="detail.html">
                            <img src="images/featured2.jpg" class="img-fluid" alt="#">
                            <span class="featured-rating-green">9.5</span>
                            <div class="featured-title-box">
                                <h6>Joe’s Shanghai</h6>
                                <p>Restaurant </p> <span>• </span>
                                <p>3 Reviews</p> <span> • </span>
                                <p><span>$$$</span>$$</p>
                                <ul>
                                    <li><span class="icon-location-pin"></span>
                                        <p>1301 Avenue, Brooklyn, NY 11230</p>
                                    </li>
                                    <li><span class="icon-screen-smartphone"></span>
                                        <p>+44 20 7336 8898</p>
                                    </li>
                                    <li><span class="icon-link"></span>
                                        <p>https://burgerandlobster.com</p>
                                    </li>

                                </ul>
                                <div class="bottom-icons">
                                    <div class="closed-now">CLOSED NOW</div>
                                    <span class="ti-heart"></span>
                                    <span class="ti-bookmark"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 featured-responsive">
                    <div class="featured-place-wrap">
                        <a href="detail.html">
                            <img src="images/featured3.jpg" class="img-fluid" alt="#">
                            <span class="featured-rating">3.2</span>
                            <div class="featured-title-box">
                                <h6>Tasty Hand-Pulled Noodles</h6>
                                <p>Restaurant </p> <span>• </span>
                                <p>3 Reviews</p> <span> • </span>
                                <p><span>$$$</span>$$</p>
                                <ul>
                                    <li><span class="icon-location-pin"></span>
                                        <p>1301 Avenue, Brooklyn, NY 11230</p>
                                    </li>
                                    <li><span class="icon-screen-smartphone"></span>
                                        <p>+44 20 7336 8898</p>
                                    </li>
                                    <li><span class="icon-link"></span>
                                        <p>https://burgerandlobster.com</p>
                                    </li>

                                </ul>
                                <div class="bottom-icons">
                                    <div class="open-now">OPEN NOW</div>
                                    <span class="ti-heart"></span>
                                    <span class="ti-bookmark"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="featured-btn-wrap">
                        <a href="#" class="btn btn-danger">VIEW ALL</a>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!--//END FEATURED PLACES -->

    
    <!--============================= CATEGORIES =============================-->
    <section class="main-block">
        <?php
    include"include/categories.php"
     ?>
    </section>
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
