<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <div class="container">
        <div class="nav">
            <div class="title">
                <div class="admin">
                    <a href="./index.php"><h2>Admin</h2></a>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-user"></i>
                    <i class="fa-solid fa-sort-down"></i>
                </div>
            </div>
        </div>
        <div class="aside">
            <div class = "listMenu">
                <li><a href="../index.php"><i class="fa-solid fa-gauge-high"></i> Trang web</a></li>
                <li class="click"><i class="fa-solid fa-chart-column"></i> Loại hàng <i class="fa-solid fa-chevron-down"></i>
                    <ul class="listContainer">
                        <div class="list-small"><a href="index.php?act=listlh"><i class="fa-solid fa-circle"></i> Danh sách loại hàng</a></div>
                        <div class="list-small"><a href="index.php?act=addlh"><i class="fa-solid fa-circle"></i> Thêm loại hàng</a></div>
                    </ul>            
                </li>
                <li class="click2"><i class="fa-solid fa-dice-d6"></i> Hàng hóa <i class="fa-solid fa-chevron-down"></i>
                    <ul class="listContainer2">
                        <div class="list-small2"><a href="index.php?act=listsp"><i class="fa-solid fa-circle"></i> Danh sách hàng hóa</a></div>
                        <div class="list-small2"><a href="index.php?act=addsp"><i class="fa-solid fa-circle"></i> Thêm hàng hóa</a></div>
                    </ul>   
                </li>
                <li class="click3"><i class="fa-solid fa-users"></i> Khách Hàng <i class="fa-solid fa-chevron-down"></i>
                    <ul class="listContainer3">
                            <div class="list-small3"><a href="index.php?act=listkh"><i class="fa-solid fa-circle"></i> Danh sách khách hàng</a></div>
                            <div class="list-small3"><a href="index.php?act=addkh"><i class="fa-solid fa-circle"></i> Thêm khách hàng</a></div>
                        </ul> 
            </li>
                <li><a href="index.php?act=listbl"><i class="fa-solid fa-comment-dots"></i> Bình luận</a></li>
                <li><a href="index.php?act=thongke"><i class="fa-solid fa-database"></i> Thống kê</a></li>
            </div>
        </div>