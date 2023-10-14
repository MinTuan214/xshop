<div class="row mb">
                    <div class="boxtitle">Tài Khoản</div>
                    <div class="boxcontent formtaikhoan">
                        <?php
                            if(isset($_SESSION['user'])){
                                extract($_SESSION['user']);
                        ?>
                            <div class="row mb10">
                                Xin chào<br>
                                <?=$user?>
                            </div>
                            <div class="row mb10">
                                <li><a href="#">Quên mật khẩu</a></li>
                                <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                                <li><a href="admin/index.php">Đăng nhập Adim</a></li>
                                <li><a href="index.php?act=thoat">Đăng xuất</a></li>
                            </div>
                        <?php

                            }else{
                        ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                                Tên đăng nhập <br>
                                <input type="text" name="user">
                            </div>
                            <div class="row mb10">
                                Mật khẩu <br>
                                <input type="password" name="pass">
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name="" id=""> Ghi nhớ tài khoản ?
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập" name="dangnhap">
                            </div>
                        </form>
                        <li><a href="#">Quên mật khẩu</a></li>
                        <li><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
                        <?php }?>
                    </div>
                </div>

                <div class="row mb">
                    <div class="row mb">
                        <div class="boxtitle">Danh Mục</div>
                        <div class="boxcontent2 menudoc">
                            <ul>
                                <?php 
                                    foreach ($dslh as $lh) {
                                        extract($lh);
                                        $linklh ="index.php?act=sanpham&iddm=".$id;
                                        echo '<li><a href="'.$linklh.'">'.$name.'</a></li>';
                                    }
                                ?>
                                <!-- <li><a href="#">Đồng Hồ</a></li>
                                <li><a href="#">Laptop</a></li>
                                <li><a href="#">Điện thoại</a></li>
                                <li><a href="#">Xe Máy</a></li>
                                <li><a href="#">Quạt Gió</a></li>
                                <li><a href="#">Nước hoa</a></li>
                                <li><a href="#">Nữ trang</a></li>
                                <li><a href="#">Nón thời trang</a></li>
                                <li><a href="#">Túi xách du lịch</a></li>
                                <li><a href="#">Apple</a></li> -->
                            </ul>
                        </div>
                        <div class="boxfooter searchbox">
                            <form action="index.php?act=sanpham" method="post">
                                <input type="search" name="kyw">
                                <input type="submit" class="search" name="timkiem" value="Tìm kiếm">
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row mb">
                        <div class="boxtitle">Top 10 Yêu Thích</div>
                        <div class="row boxcontent">
                            <?php
                                foreach ($dstop10 as $sanpham) {
                                    extract($sanpham);
                                    $linksp ="index.php?act=sanphamct&idsp=".$id;
                                    $img = $img_path.$img;
                                    echo '<div class="row mb10 top10">
                                    <img src="'.$img.'" alt="">
                                    <a href="'.$linksp.'">'.$name.'</a>
                                </div>';
                                }
                            ?>
                            <!-- <div class="row mb10 top10">
                                <img src="view/images/1064.jpg" alt="">
                                <a href="#">Sir Rodney's Marmalade</a>
                            </div>
                            <div class="row mb10 top10">
                                <img src="view/images/1064.jpg" alt="">
                                <a href="#">Sir Rodney's Marmalade</a>
                            </div>
                            <div class="row mb10 top10">
                                <img src="view/images/1064.jpg" alt="">
                                <a href="#">Sir Rodney's Marmalade</a>
                            </div> -->
                        </div>
                    </div>