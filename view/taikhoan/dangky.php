<div class="row mb">
            <div class="boxtrai mr">
            <div class="row mb">
                    <div class="boxtitle">ĐĂNG KÝ THÀNH VIÊN</div>
                    <div class="row boxcontent formtaikhoan">
                     <form action="index.php?act=dangky" method="post">
                        <label for="#">Email:</label><br>
                        <input type="email" name="email" id=""><br><br>
                        <label for="#">Tên:</label><br>
                        <input type="text" name="user" id=""><br><br>
                        <label for="#">Mật khẩu:</label><br>
                        <input type="password" name="pass" id=""><br><br>
                        <input type="submit" name="dangky" id="" value="Đăng ký">
                        <input type="reset" id="" value="Nhập lại">
                     </form>
                     <p class="thongbao">
                     <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo $thongbao;
                        }

                     ?>
                     </p>
                    </div>
                
            </div>
            </div>
        
            <div class="boxphai ">
            <?php 
                    include 'view/boxright.php';
                ?>
            </div>
        </div>