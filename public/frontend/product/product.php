<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DA_TTCN_WEBSITE_BANGIAY</title>
    <link rel="stylesheet" href="/public/frontend/css/style.css">
    <link rel="stylesheet" href="/public/frontend/css/product.css">

</head>
<body>
    <?php include_once '../header/header.php'; ?>
    <div class="product">
        <div class="container">
            <div class="product_top row">
                <p>Trang chủ</p> <span>&#10230;</span> <p>Giày Sneakers</p><span>&#10230;</span> <p>Giày Sneakers không họa tiết</p>
            </div>
            <div class="product_content row">
                <div class="product_content_left row">
                    <div class="product_content_left_big_img">
                        <img src="/public/frontend/images/giay_1.png" alt="">
                    </div>
                    <div class="product_content_left_small_img">
                        <img src="/public/frontend/images/giay_1.png" alt="">
                        <img src="/public/frontend/images/giay_2.png" alt="">
                        <img src="/public/frontend/images/giay_3.png" alt="">
                        <img src="/public/frontend/images/giay_4.png" alt="">
                    </div>
                </div>
                <div class="product_content_right">
                    <div class="product_content_right_product_name">
                        <h1>GIÀY SNEAKERS KHÔNG HỌA TIẾT</h1>
                        <P>Mã SP: SP1234</P>
                    </div>
                    <div class="product_content_right_product_price">
                        <p>300.000<sup>đ</sup></p>
                    </div>
                    <div class="product_content_right_product_color">
                        <p><span style="font-weight:bold;">Màu sắc</span>: Đen bóng<span style="color:red;">*</span></p>
                    </div>
                    <div class="product_content_right_product_size">
                        <p style="font-weight:bold;">Size:</p>
                        <div class="size">
                            <span>S</span>
                            <span>M</span>
                            <span>L</span>
                        </div>
                        <p style="color:red;">Vui lòng chọn size</p>
                    </div>
                    <div class="quantity">
                        <p style="font-weight:bold;">Số lượng:</p>
                        <input type="number" min="0" value="1">
                        
                    </div>
                    <div class="product_content_right_product_button">
                        <button><img src="/public/frontend/images/logo_tuigiohang.png" alt=""> MUA HÀNG</button>
                        
                    </div>
                    <!-- <div class="product_content_right_bottom">
                        <div class="product_content_right_bottom_top">

                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
   <?php include_once '../footer/footer.php'; ?>
    
</body>
</html>