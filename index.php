<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon -->
    <link rel="icon" href="https://img.icons8.com/emoji/48/000000/watch-emoji.png" type="image/x-icon" sizes="16x16"/>

    <!-- icon 2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">

    <!-- Css -->
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>Cửa hàng đồng hồ</title>
</head>
<body>
    <!-- Begin header -->
    <div id="header" class="header">
        <img src="./assets/images/header.png" alt="" class="header-bg">
        <div class="header-logo">
            <img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/64/000000/external-watch-interface-kiranshastry-lineal-kiranshastry.png"/>
            <h1 class="logo-title">WATCH STORE</h1>
        </div>
        <div class="header-navbar">
            <ul class="ul-navbar">
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="#about">Thông tin</a></li>
                <li><a href="#product">Sản phẩm</a></li>
                <li><a href="#footer">Liên hệ</a></li>
                <li><a href="">Đăng nhập</a></li>
            </ul>
        </div>
    </div>
    <!-- End header -->

    <!-- Begin slider -->
    <div class="slider">
        <h1 class="slider-title text-center text-white font-eph">
            The right time for life
        </h1>
    </div>
    <!-- End slider -->

    <!-- Begin About -->
    <div id="about" class="about">
        <h2 class="font-eph text-center text-gray">Thông tin</h2>
        <div class="about-container">
            <div class="box-video">
                <video src="./assets/video/watch.mp4" autoplay loop muted type="video/mp4"></video>
            </div>
            <div class="info">
                <h3>Vì sao nên chọn chúng tôi?</h3>
                <br>
                <p>
                    Đã từ lâu, vấn nạn hàng giả, hàng nhái diễn ra quá tinh vi và phổ biến dẫn tới người Việt mất niềm tin vào việc mua đồng hồ chính hãng tại Việt Nam. Bên cạnh đó, chất lượng dịch vụ của ngành đồng hồ lại thua xa Quốc tế
                </p>
                <br>
                <p>
                    Tại sao cùng bỏ một số tiền, thậm chí còn đắt hơn cả ở nước ngoài nhưng người Việt lại chưa được phục vụ xứng đáng? đó là những câu hỏi luôn khiến những người sáng lập của Watch Store trăn trở
                </p>
                <br>
                <p>
                    Chúng tôi nghĩ rằng, đã đến lúc người Việt có quyền được phục vụ <b>XỨNG ĐÁNG</b> ngay tại Việt Nam bằng việc <b>TỰ DO</b> mua sắm các sản phẩm đồng hồ chính hãng với chất lượng <b>DỊCH VỤ CHUẨN QUỐC TẾ</b> mà không phải lo ngại những vấn đề trên. Hơn ai hết, chính Watch Store sẽ thực hiện sứ mệnh này.
                </p>
                <br>
                <p>
                    Bằng chữ tín và khát vọng tiên phong nâng tầm dịch vụ cho người Việt, Watch Store phấn đấu trở thành nhà bán lẻ đồng hồ chính hãng số 1 tại Việt Nam về quy mô và chất lượng dịch vụ tiêu chuẩn Quốc tế.
                </p>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Begin benefit -->
    <div class="benefit">
        <div class="benefit-box">
            <img src="./assets/images/icon-1.png" alt="icon">
            <div class="benefit-box-2">
                <p class="benefit-p2">Giao hàng miễn phí</p>
                <p class="benefit-p3">Tất cả mặt hàng</p>
            </div>
        </div>
        <div class="benefit-box">
            <img src="./assets/images/icon-2.png" alt="icon">
            <div class="benefit-box-2">
                <p class="benefit-p2">10 ngày hoàn trả</p>
                <p class="benefit-p3">Bảo hành</p>
            </div>
        </div>
        <div class="benefit-box">
            <img src="./assets/images/icon-3.png" alt="icon">
            <div class="benefit-box-2">
                <p class="benefit-p2">Phục vụ và quà tặng</p>
                <p class="benefit-p3">Tri ân khách hàng</p>
            </div>
        </div>
        <div class="benefit-box">
            <img src="./assets/images/icon-4.png" alt="icon">
            <div class="benefit-box-2">
                <p class="benefit-p2">Bảo mật thanh toán</p>
                <p class="benefit-p3">Được bảo vệ bởi Paypal</p>
            </div>
        </div>
    </div>
    <!-- End benefit -->

    <!-- Begin Search -->
    <div class="search">
        <form class="search-form" action="">
            <input class="ip-search" type="text" id="" required placeholder="Tìm kiếm đồng hồ ...">
            <input class="ip-submit" type="submit" id="" value="Tìm kiếm">
        </form>
    </div>
    <!-- End Search -->

    <!-- Begin Product -->
    <div id="product" class="product">
        <h2 class="font-eph text-center text-gray">Sản phẩm</h2>
        <div class="product-main">
            <div class="product-box">
                <a href="#"><img src="./assets/images/b1.jpg" alt="Bentle"></a>
                <p class="product-title">Bentley BL2096-152WWI-S</p>
                <p class="product-price">16,500,000 VND</p>
            </div>
            <div class="product-box">
                <a href="#"><img src="./assets/images/b2.jpg" alt="Bentle"></a>
                <p class="product-title">Bentley BL2096-152KBI-S</p>
                <p class="product-price">17,000,000 VND</p>
            </div>
            <div class="product-box">
                <a href="#"><img src="./assets/images/b3.jpg" alt="Bentle"></a>
                <p class="product-title">Bentley BL1822-152KBI-S</p>
                <p class="product-price">13,500,000 VND</p>
            </div>
            <div class="product-box">
                <a href="#"><img src="./assets/images/b4.jpg" alt="Bentle"></a>
                <p class="product-title">Bentley BL1796-302TCI-S</p>
                <p class="product-price">12,300,000 VND</p>
            </div>
            <div class="product-box">
                <a href="#"><img src="./assets/images/b5.jpg" alt="Bentle"></a>
                <p class="product-title">Bentley BL1784-302KCD</p>
                <p class="product-price">8,050,000 VND</p>
            </div>
            <div class="product-box">
                <a href="#"><img src="./assets/images/o1.jpg" alt="Orient"></a>
                <p class="product-title">Orient Star RE-AV0116L00BL</p>
                <p class="product-price">21,410,000 VND</p>
            </div>
            <div class="product-box">
                <a href="#"><img src="./assets/images/o2.jpg" alt="Orient"></a>
                <p class="product-title">Orient Star RE-AU0406L00B</p>
                <p class="product-price">17,630,000 VND</p>
            </div>
            <div class="product-box">
                <a href="#"><img src="./assets/images/o3.jpg" alt="Orient"></a>
                <p class="product-title">Orient SK RA-AA0B03L19B</p>
                <p class="product-price">6,800,000 VND</p>
            </div>
            <div class="product-box">
                <a href="#"><img src="./assets/images/o4.jpg" alt="Orient"></a>
                <p class="product-title">Orient SK RA-AA0B01G19B</p>
                <p class="product-price">6,800,000 VND</p>
            </div>
            <div class="product-box">
                <a href="#"><img src="./assets/images/o5.jpg" alt="Orient"></a>
                <p class="product-title">Orient SK RA-AA0B01G19B</p>
                <p class="product-price">7,810,000 VND</p>
            </div>
            <div class="product-box">
                <a href="#"><img src="./assets/images/o6.jpg" alt="Orient"></a>
                <p class="product-title">Orient Star SDE00003B0</p>
                <p class="product-price">20,410,000 VND</p>
            </div>
            <div class="product-box">
                <a href="#"><img src="./assets/images/v1.jpg" alt="Vertu"></a>
                <p class="product-title">Vertu V01G-02-C13ER</p>
                <p class="product-price">90.000.000 VND</p>
            </div>
        </div>
    </div>
    <!-- End Product -->

    <!-- Begin Contact -->
    <div id="footer" class="footer">
        <h3 class="footer-title text-white font-eph text-title text-center">Thông tin liên hệ</h3>
        <div class="contact">
            <div class="contact-info">
                <div class="contact-box">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>176 Tây Sơn, Đống Đa, Hà Nội, Việt Nam</p>
                </div>
                <div class="contact-box">
                    <i class="fas fa-phone-alt"></i>
                    <p>6996.666.999</p>
                </div>
                <div class="contact-box">
                    <i class="fas fa-envelope"></i>
                    <p>nhom18@email.com</p>
                </div>
            </div>
            <div class="contact-map">
                <img src="./assets/images/map3.png" alt="Map">
            </div>
        </div>
        <div class="contact-2">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter-square"></i></a>
        </div>
        <h3 class="infor text-center">
            Powered by Group 18
        </h3>
    </div>
    <!-- End Contact -->
</body>
</html>