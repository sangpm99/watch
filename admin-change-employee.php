<?php
    include("admin-header.php");
    include("db.php");
?>
    <h1 class="main-title font-eph">Sửa nhân viên</h1>
    <form class="form-add-employee" method="POST" action="">
        <?php
            $id_need = $_GET['id'];
            $sql = "SELECT * FROM tbl_employee WHERE id=$id_need";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
        ?>
            <label for="txt-name">Tên nhân viên</label>
            <input type="text" id="txt-name" name="txt-name" required value="<?php echo $row['name']; ?>">
            <label for="txt-age">Tuổi</label>
            <input type="number" id="txt-age" name="txt-age" required value="<?php echo $row['age']; ?>">
            <label for="txt-number">Số điện thoại</label>
            <input type="text" id="txt-number" name="txt-number" required value="<?php echo $row['number']; ?>">
            <label for="txt-email">Email</label>
            <input type="email" id="txt-email" name="txt-email" required value="<?php echo $row['email']; ?>">
            <label for="txt-address">Địa chỉ</label>
            <textarea type="text" rows="5" id="txt-address" name="txt-address"><?php echo $row['address']; ?></textarea>
            <label for="txt-position">Chức vụ</label>
            <input type="text" id="txt-position" name="txt-position" required value="<?php echo $row['position']; ?>">
            <br>
            <button class="edit" name="btn-add-employee" type="submit">Cập nhật</button>
            <?php
            }
        }
    ?>
    </form>
    <?php
        if(isset($_POST['btn-add-employee'])){ //isset là kiểm tra biến có tồn tại hay không
            $name = $_POST['txt-name'];
            $age = $_POST['txt-age'];
            $number = $_POST['txt-number'];
            $email = $_POST['txt-email'];
            $address = $_POST['txt-address'];
            $position = $_POST['txt-position'];

            //B2 : Thực hiện truy vấn
            $sql = "UPDATE `tbl_employee` SET `name` = '$name', `age` = '$age', `number` = '$number', `email`='$email', `address` = '$address', `position`='$position'  WHERE `tbl_employee`.`id` = $id_need";
            $result = mysqli_query($conn,$sql);
            //B3: Xử lý kết quả nếu mysqli_query thành công trả về true
            if($result == true){
                header('location:'.SITEURL.'/admin-employee.php');
            }
        }
        mysqli_close($conn);
    ?>
</body>
</html>