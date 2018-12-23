<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Thông tin nhân viên</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                 <li>
                        <li><a href="#">Xin chào</a>
                        </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profile.php?mail=<?php echo $_SESSION['mail']; ?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                        <li>
                            <a href="them.php"><i class="fa fa-edit fa-fw"></i>Thêm Nhân Viên</a>
                        </li>
                        <li>
                            <a href="tables.php"><i class="fa fa-table fa-fw"></i>Danh sách nhân viên</a>
                        </li>
                        <li>
                            <a href="khachhang.php"><i class="fa fa-table fa-fw"></i>Danh sách thành viên</a>
                        </li>
                        <li>
                            <a href="nhahang.php"><i class="fa fa-table fa-fw"></i>Danh sách nhà hàng</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i>Chức vụ<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="chucvu.php">Danh sách chức vụ</a>
                                </li>
                                <li>
                                    <a href="themchucvu">Thêm chức vụ</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="donhang.php"><i class="fa fa-table fa-fw"></i>Danh sách đơn hàng</a>
                        </li>
                        <li>
                            <a href="qlygiaohang.php"><i class="fa fa-table fa-fw"></i>Quản lý Giao hàng</a>
                        </li>
                        <li>
                            <a href="qlynhahang.php"><i class="fa fa-table fa-fw"></i>Thông tin đơn hàng</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>