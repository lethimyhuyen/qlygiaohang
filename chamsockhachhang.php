<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Page Title -->
    <title>Tiachop Dilivery</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Simple line Icon -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Hover Effects -->
    <link rel="stylesheet" href="css/set1.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
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
    <!--============================= ADD LISTING =============================-->
    <div class="styled-heading ">
<h3>Chúng tôi có thể giúp gì cho bạn?</h3><div class="grid">
  <div class="grid-12">
    <div class="styled-heading"><br>
<h4>Liên hệ</h4><h1></h1>
<form method="post" action="/dich-vu-khach-hang" ><input type="hidden" name="ordernr" value="">
<input type="hidden" name="subm2f8a6bf31f3bd67bd2d9720c58b19c9a" value="3d0d13574c9dd18b7cb2e1eba73db7fb">
<div class="checkoutcontainer addrestaurant" id="iaddrestaurant"><div class="styled-heading">
<p>Nếu bạn có yêu cầu gấp về đơn hàng tại giaohangnhanh.tk, vui lòng liên hệ trực tiếp với nhà hàng. Số điện thoại của nhà hàng có trong email xác nhận đơn hàng. Về những vấn đề khác vui lòng điền vào đơn bên dưới. Dịch vụ khách hàng phục vụ từ 07:30 sáng đến 11:00 tối
</p>
<div class="subject grid-24"><p class="nawlabel"><label for="csformdynid3" >Chủ đề:</label></p><div class="nawinputcontainer"><div class="textfield_form"><input  type="text" name="subject" value="" id="csformdynid3" class="textfield_form" id="isubject" maxlength="100"></div></div></div>
<div class="contactType grid-24"><p class="nawlabel"><label for="csformdynid4" >Vì tôi có:</label></p><div class="nawinputcontainer"><div class="pulldown_form"><label class="pulldown_form">
                                                        <select name="contactType" id="icontactType" onchange="" class="pulldown_form" id="csformdynid4">
                                                        <option   value="3" class="pulldown">Câu hỏi</option><option   value="1" class="pulldown">Gợi ý</option><option   value="2" class="pulldown">Khiếu nại</option>
                                                        </select>
                                                </label></div></div></div>
<div class="name grid-24"><p class="nawlabel"><label for="csformdynid6" >Tên:</label></p><div class="nawinputcontainer"><div class="textfield_form"><input  type="text" name="name" value="" id="csformdynid6" class="textfield_form" id="iname" maxlength="100"></div></div></div>
<div class="telephone grid-24"><p class="nawlabel"><label for="csformdynid7" >Điện thoại:</label></p><div class="nawinputcontainer"><div class="textfield_form"><input  type="text" name="telephone" value="" id="csformdynid7" class="textfield_form" id="itelephone" maxlength="100"></div></div></div>
<div class="email grid-24"><p class="nawlabel"><label for="csformdynid8" >Email:</label></p><div class="nawinputcontainer"><div class="textfield_form"><input  type="text" name="email" value="" id="csformdynid8" class="textfield_form" id="iemail" maxlength="100"></div></div></div>
<div class="grid-24"><p class="nawlabel"><label for="csformdynid9" >Nội dung:</label></p><div class="nawinputcontainer"><div class="textarea_form">
                                                                                        <textarea rows="5" name="message" class="textarea_form" id="csformdynid9" rows="3" id="imessage"></textarea>
                                                                                    </div></div></div>
<div class="grid-24"><input type="submit"  value="Gửi" class="button_form button_form_blue"></div></div></div></form>    </div>
  </div>
    <div class="sidebars ">
      <div class="callus grid-06 off-06">
        <h3>Dịch vụ khách hàng</h3>
        <h4>1800 1088</h4>
      </div>
    </div>
</div></div>
    <!--============================= FOOTER =============================-->
    <footer class="main-block dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright &copy; 2018 Listing. All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <ul>
                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                            <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
