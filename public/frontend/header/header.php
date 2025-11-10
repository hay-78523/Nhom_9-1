<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="/public/frontend/css/style.css">
    <link rel="stylesheet" href="/public/frontend/css/header.css">
</head>
<body>
    <header>
            <div class="logo">
                <img src="/public/frontend/images/logo.png" alt="">
            </div>
            <div class="menu">
                <li><a href="/index.php">TRANG CHỦ</a></li>
                <li><a href="/public/frontend/gioithieu/gioithieu.php">GIỚI THIỆU</a></li>
                <li><a href="">DANH MỤC</a>
                    <ul class="sub_menu">
                        <li><a href="/index.php">Sneakers</a></li>
                        <li><a href="">Giày tây</a></li>
                        <li><a href="">Giày nam</a></li>
                        <li><a href="">Giày nữ</a></li>
                        <li><a href="">Sandal</a></li>
                        <li><a href="">Giày da</a></li>

                    </ul>
                </li>
                <li><a href="">TIN TỨC</a></li>
                <li><a href="/public/frontend/lienhe/lienhe.php">LIÊN HỆ</a></li>
            
           
            </div>
            <div class="others">
                <li class="search">
                    <input type="text" placeholder="Tìm kiếm"> <a href=""><img src="/public/frontend/images/logo_search.png" alt=""></a>
                </li>
                <?php
                    if (!isset($_SESSION)) session_start();
                    if (!isset($_SESSION['admin'])){
                        echo '<li><a href="/public/frontend/auth/login.html"><img src="/public/frontend/images/logo_user.png"></a></li>';
                    }else {
                        echo '<li><a href="/public/frontend/auth/logout.html"><img src="/public/frontend/images/logo_user.png"></a></li>';
                    }
                ?>
                 
                 <li><a href=""><img src="/public/frontend/images/logo_giohang.png"></a></li>
            </div>
            
    </header>
</body>
</html>