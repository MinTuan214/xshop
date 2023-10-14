<div class="row mb">
            <div class="boxtrai mr">
                <div class="row">
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                    <img src="view/images/1004.jpg" style="width:100%">
                    </div>

                    <div class="mySlides fade">
                    <img src="view/images/1005.jpg" style="width:100%">
                    </div>

                    <div class="mySlides fade">
                    <img src="view/images/1006.jpg" style="width:100%">
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                    <!-- The dots/circles -->
                    <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
                </div>
                <?php
                    $i = 0;
                    foreach ($spnew as $sp) {
                    extract($sp);
                    $linksp ="index.php?act=sanphamct&idsp=".$id;
                    $hinh = $img_path.$img;
                    if(($i==2)||($i==5)||($i==8)){
                            $mr="";
                    }else{
                            $mr="mr";
                    }
                    echo '<div class="boxsp '.$mr.'">
                            <div class="row img">
                                <img src="'.$hinh.'" alt="">
                                </div>
                                    <div class="content">
                                        <p class="content-price">'.$price.'đ</p>
                                        <div class="title"><a href="'.$linksp.'">'.$name.'</a></div>
                                    </div>
                        </div>';
                        }
                    ?>
                <!-- <div class="row">
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="view/images/1075.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Đồng Hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="view/images/1075.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Đồng Hồ</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img">
                            <img src="view/images/1075.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Đồng Hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="view/images/1075.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Đồng Hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="view/images/1075.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Đồng Hồ</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img">
                            <img src="view/images/1075.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Đồng Hồ</a>
                    </div>
                </div> -->
            </div>

            <div class="boxphai ">
            <?php 
                    include 'boxright.php';
                ?>
                </div>
            </div>
        </div>