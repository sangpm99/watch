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
<body class="body-2">
    <h2 class="text-center text-gray font-eph mgb-5">Thông tin sản phẩm</h2>
    <?php
        include("db.php");
        $id_need = $_GET['id'];
        $sql = "SELECT * FROM tbl_product WHERE id=$id_need";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
    ?>
                <div class="product-info">
                    <div class="product-img">
                        <img src="<?php echo $row['image']; ?>" alt="Watch">
                    </div>
                    <div class="product-text">
                        <h3>
                        <?php echo $row['product_name']; ?>
                        </h3>
                        <p class="product-text-price">
                            <?php echo $row['price']; ?> VND
                        </p>
                        <p class="information">
                            <?php echo $row['description']; ?>
                        </p>
                        <a class="order" href="./order.php?id=<?php echo $row['id']; ?>">Đặt hàng</a>
                    </div>
                </div>
    <?php
            }
        }
    ?>
</body>
</html>