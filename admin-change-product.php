<?php
    include("admin-header.php");
    include("db.php");
?>
    <h1 class="main-title font-eph">Sửa sản phẩm</h1>
    <form name="form-change" class="form-add-product" method="POST" action="">
        <?php
            $id_need = $_GET['id'];
            $sql = "SELECT * FROM tbl_product WHERE id=$id_need";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
        ?>
        <label for="txt-product-name">Tên sản phẩm</label>
        <input type="text" id="txt-product-name" name="txt-product-name" required value="<?php echo $row['product_name']; ?>">
        <label for="txt-price">Giá sản phẩm</label>
        <input type="text" id="txt-price" name="txt-price" required value="<?php echo $row['price']; ?>">
        <label for="txt-description">Mô tả sản phẩm</label>
        <textarea type="text" rows="5" id="txt-description" name="txt-description" required><?php echo $row['description']; ?></textarea>
        <label for="img-product">Ảnh sản phẩm</label>
        <input type="file" id="img-product" name="img-product" required>
        <br>
        <button class="edit" name="btn-add-product" type="submit">Cập nhật</button>
        <?php
                }
            }
        ?>
    </form>
    <?php
        if(isset($_POST['btn-add-product'])){ //isset là kiểm tra biến có tồn tại hay không
            $product_name = $_POST['txt-product-name'];
            $price = $_POST['txt-price'];
            $description = $_POST['txt-description'];
            $img = $_POST['img-product'];
            $image = './assets/images/'.$img;

            //B2 : Thực hiện truy vấn
            $sql = "UPDATE `tbl_product` SET `product_name` = '$product_name', `price` = '$price', `description` = '$description', `image`='$image' WHERE `tbl_product`.`id` = $id_need";
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