<section class="slider d-flex align-items-center">
        <!--<img src="images/slider2.jpg" class="img-fluid" alt="#">-->
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                    <h1>Đặt đồ uống dễ dàng</h1>
                                    <h5>Chọn cửa hàng trong khu vực của bạn</h5>
                                </div>
                            </div>
                        </div>
<script>
    function getNhaHang(maquan)
    {
        alert(maquan);
        $("#nhahang").load("nhahangtheoquan.php?maquan="+maquan);
    }
</script>

                        <div class="row d-flex justify-content-center">
                            <div class="col-md-10">
                                <form class="form-wrap mt-4">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                       <select name="searchstring1" id="isearchstring1" onchange="xmlRequest('/fillDistricts.php', 'locid='+escape(this.options[this.selectedIndex].value)+'&submit', 'idistrictpulldown');" class="btn-group1">
                                                        <option   value="0" class="pulldown">Chọn Thành Phố</option>
                                                        <option   value="1908534" class="pulldown">Hà Nội</option>
                                                        <option   value="5559384" class="pulldown">Hội An</option>
                                                        <option   value="5559254" class="pulldown">Nha Trang</option>
                                                        <option   value="1908654" selected class="pulldown">Tp. Hồ Chí Minh</option>
                                                        <option   value="1908884" class="pulldown">Đà Nẵng</option>
                                                        </select>
                                       <select name="searchstring2" id="isearchstring2" onchange="getNhaHang(this.value) " class="btn-group2">
                                                        <option   value="0" class="pulldown">Chọn quận</option>
                                                       <?php
                                                        include"include/connect.php";
                      
                            $sql="select * from quan ";

                            $result=mysqli_query($connection,$sql);
                            while($r =mysqli_fetch_assoc($result))
                            {
                                ?>
                             <option   value="<?php echo $r['maquan'] ?>" class="pulldown"><?php echo $r['quan'] ?></option>
                                <?php
                            }
                                                       ?>
                                                        </select>
                                        <button type="submit" class="btn-form"><span class="icon-magnifier search-icon"></span>SEARCH<i class="pe-7s-angle-right"></i></button>
                                    </div>
                                </form>
                                <!--<div class="slider-link">
                                    <a href="#">Browse Popular</a><span>or</span> <a href="#">Recently Added</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>