<div class="nav-menu">
        <div class="bg transition">
            <div class="container-fluid fixed">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.php">giaohangnhanh.tk</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-menu"></span>
              </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Xin chào
                  <?php echo $_SESSION['tendn']?>
                  <span class="icon-arrow-down"></span>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="nav-link" href="quanlytaikhoan.php?tendn=<?php echo $_SESSION['tendn']; ?>">Quản lí tài khoản</a>
                                        <a class="nav-link" href="donhang.php?tendn=<?php echo $_SESSION['tendn']; ?>">Đơn hàng của tôi</a>
                                    </div>
                                </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="giohang.php">Giỏ Hàng</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Đăng kí
                  <span class="icon-arrow-down"></span>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="nav-link" href="dangkikhach.php">Thành viên</a>
                                        <a class="nav-link" href="dangkinhahang.php">Nhà hàng</a>
                                        <a class="nav-link" href="logout.php">Đăng xuất</a>
                                        <a class="nav-link" href="doipass.php">Đổi Mật Khẩu</a>
                                    </div>
                                </li>
                                    <li><a href="login.php" class="btn btn-outline-light top-btn"><span class="ti-plus"></span> Đăng Nhập</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
</div>
