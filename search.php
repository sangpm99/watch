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
                <li><a href="index.php">Thông tin</a></li>
                <li><a href="index.php">Sản phẩm</a></li>
                <li><a href="index.php">Liên hệ</a></li>
                <li><a href="./login.php">Đăng nhập</a></li>
            </ul>
        </div>
    </div>

    <!-- Begin search -->
    <h2 class="font-eph text-center text-gray mg">Sản phẩm</h2>
    <?php
        include("db.php");
        if(count($_POST)>0) {
            $ip_search=$_POST['ip-search'];
            $sql = "select * from tbl_product where product_name like '%$ip_search%' or price like '%$ip_search%'";
            $result = mysqli_query($conn,$sql);
        }
        echo '<p class="key">Kết quả tìm kiếm cho "'.$ip_search.'"</p>';
        echo '<br>';
        echo '<div id="product" class="product">';
        echo '<div class="product-main">';
        while($row = mysqli_fetch_array($result)) {
    ?>
            <div class="product-box">
                <a href="product-info.php?id=<?php echo $row['id']; ?>">
                    <img src="<?php echo $row['image']; ?>" alt="Watch">
                </a>
                <p class="product-title"><?php echo $row['product_name']; ?></p>
                <p class="product-price"><?php echo $row['price']; ?> VND</p>
            </div>
    <?php
        }
        echo '</div>';
        echo '</div>';
        mysqli_close($conn);
    ?>
</body>
</html>