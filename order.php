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
    <h4 class="text-center text-gray font-eph">Thông tin hóa đơn</h4>
    <?php
        include("db.php");
        $id_need = $_GET['id'];
        $sql = "SELECT * FROM tbl_product WHERE id=$id_need";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $product_name = $row['product_name'];
                $price = $row['price'];
    ?>
                <div class="order-form">
                    <form method="POST" action="" class="form-order">
                        <fieldset class="form-1">
                            <legend>
                                Đồng hồ đã chọn
                            </legend>
                            <div class="order-product-img">
                                <img src="<?php  echo $row['image']; ?>" alt="Watch">
                            </div>
                            <div class="order-product-desc">
                                <h5><?php echo $row['product_name']; ?></h5>
                                <p><?php echo $row['price']; ?> VND</p>
                            </div>
                        </fieldset>
                        <fieldset class="form-2">
                            <legend>
                                Thông tin khách hàng
                            </legend>
                            <label for="#form-2-name">Họ tên</label>
                            <input type="text" id="form-2-name" name="form-2-name" required placeholder="Ví dụ: Phạm Văn A">
                            <label for="#form-2-phone">Số điện thoại</label>
                            <input type="tel" id="form-2-phone" name="form-2-phone" required placeholder="Ví dụ: 0123456789">
                            <label for="#form-2-email">Email</label>
                            <input type="email" id="form-2-email" name="form-2-email" required placeholder="Ví dụ: email@email.com">
                            <label for="#form-2-address">Địa chỉ</label>
                            <textarea type="text" rows="5" id="form-2-address" name="form-2-address" required placeholder="Ví dụ: Số 178 Đống Đa, Hà nội"></textarea>
                            <label for="">Phương thức thanh toán : Thanh toán khi nhận hàng</label>
                            <button class="add" name="btn-add-employee" type="submit">Đặt Hàng</button>
                        </fieldset>
                    </form>
                </div>
    <?php
            }
        }
    ?>
    <?php
        if(isset($_POST['btn-add-employee'])){ //isset là kiểm tra biến có tồn tại hay không
            $name = $_POST['form-2-name'];
            $number = $_POST['form-2-phone'];
            $email = $_POST['form-2-email'];
            $address = $_POST['form-2-address'];
            $day = date("d");
            $month = date("m");
            $year = date("y");
            $num = 20;
            $date = $num.''.$year.'-'.$month.'-'.$day;

            $subject = "Hóa đơn mua hàng tại WATCH STORE";
            $line1 = "Xin chào : ".$name;
            $line2 = "\nCảm ơn bạn đã mua hàng tại WATCH STORE";
            $line3 = "\nHóa đơn của bạn là :";
            $line4 = "\n    Tên sản phẩm : ".$product_name;
            $line5 = "\n    Giá sản phẩm : ".$price." VND";
            $line6 = "\n    Ngày mua : ".$day."/".$month."/".$num.''.$year;
            $line7 = "\n    Số điện thoại liên hệ : ".$number;
            $line8 = "\n    Địa chỉ : ".$address;
            $line9 = "\nBạn vui lòng kiểm tra lại hóa đơn. Nếu có sai sót hoặc góp ý xin vui lòng liên hệ đến hotline: 0123.456.789 , để được nhân viên tư vấn hỗ trợ";
            $message = $line1.''.$line2.''.$line3.''.$line4.''.$line5.''.$line6.''.$line7.''.$line8.''.$line9;
            $headers = "From: phamsang050599@gmail.com";
            
            mail($email, $subject, $message, $headers);
            $sql = "INSERT INTO `tbl_bill` (`id`, `product_name`, `price`, `purchase_date`, `customer_name`, `number`, `email`, `address`) VALUES (NULL, '$product_name', '$price', '$date', '$name', '$number', '$email' , '$address')";
            $result = mysqli_query($conn,$sql);
            if($result == true){
                header('location:'.SITEURL.'/index.php');
            }
        }
    ?>
</body>
</html>