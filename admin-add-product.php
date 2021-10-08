<?php
    include("admin-header.php");
    include("db.php");
?>
    <h1 class="main-title font-eph">Thêm sản phẩm</h1>
    <form class="form-add-product" method="POST" action="">
        <label for="txt-product-name">Tên sản phẩm</label>
        <input type="text" id="txt-product-name" name="txt-product-name" required placeholder="VD: Đồng hồ 1">
        <label for="txt-price">Giá sản phẩm</label>
        <input type="text" id="txt-price" name="txt-price" required placeholder="VD: 10,000,000">
        <label for="txt-description">Mô tả sản phẩm</label>
        <textarea type="text" rows="5" id="txt-description" name="txt-description" required placeholder="VD: Sản phẩm được nhập từ ..."></textarea>
        <label for="img-product">Ảnh sản phẩm</label>
        <input type="file" id="img-product" name="img-product" required>
        <br>
        <button class="add" name="btn-add-product" type="submit">Thêm</button>
    </form>
    <?php
        if(isset($_POST['btn-add-product'])){ //isset là kiểm tra biến có tồn tại hay không
            $product_name = $_POST['txt-product-name'];
            $price = $_POST['txt-price'];
            $description = $_POST['txt-description'];
            $image = $_POST['img-product'];

            //B2 : Thực hiện truy vấn
            $sql = "INSERT INTO `tbl_product` (`id`, `product_name`, `price`, `description`, `image`) VALUES (NULL, '$product_name', '$price', '$description', './assets/images/$image')";
            $result = mysqli_query($conn,$sql);
            //B3: Xử lý kết quả nếu mysqli_query thành công trả về true
            if($result == true){
                header('location:'.SITEURL.'/admin-product.php');
            }
        }
        mysqli_close($conn);
    ?>
</body>
</html>