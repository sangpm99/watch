<?php
    include("db.php"); //kết nối đến database
    include("admin-header.php"); //phần header của trang
?>
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
                <video src="./assets/videos/watch.mp4" autoplay loop muted type="video/mp4"></video>
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
            <?php
                //B1 : Kết nối DB ở đầu trang
                // B2: Định nghĩa và thực hiện truy vấn
                $sql = "SELECT * FROM tbl_product"; //đặt tên biến 
                $result = mysqli_query($conn,$sql); //php thực hiện truy vấn(đối tượng đang kết nối,biến khai báo truy vấn), kết quả có thể là false hoặc object
                // B3: Xử lý dữ liệu trả về
                if(mysqli_num_rows($result) > 0){
                    // Lặp để lấy từng bản ghi thông qua phương thức mysqli_fetch_assoc
                    while($row = mysqli_fetch_assoc($result)){ // lấy ra từng đối tượng có trong $result
            ?>
                        <div class="product-box">
                        <a href=""><img src="<?php echo $row['image']; ?>" alt="Watch"></a>
                            <p class="product-title"><?php echo $row['product_name']; ?></p>
                            <p class="product-price"><?php echo $row['price']; ?> VND</p>
                        </div>
            <?php
                    }
                }
                //B4 : Đóng kết nối
                mysqli_close($conn);
            ?>
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
                    <p>0123.456.789</p>
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