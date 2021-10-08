<?php
    include("admin-header.php");
    include("db.php");
?>
    <h1 class="main-title font-eph">Thêm nhân viên</h1>
    <form class="form-add-employee" method="POST" action="">
        <label for="txt-name">Tên nhân viên</label>
        <input type="text" id="txt-name" name="txt-name" required placeholder="VD: Nguyễn Văn A">
        <label for="txt-age">Tuổi</label>
        <input type="number" id="txt-age" name="txt-age" required placeholder="VD: 18">
        <label for="txt-number">Số điện thoại</label>
        <input type="tel" id="txt-number" name="txt-number" required placeholder="VD: 0987654321">
        <label for="txt-email">Email</label>
        <input type="email" id="txt-email" name="txt-email" required placeholder="VD: Email@email.com">
        <label for="txt-address">Địa chỉ</label>
        <textarea type="text" rows="5" id="txt-address" name="txt-address" required placeholder="VD: Hà Nội"></textarea>
        <label for="txt-position">Chức vụ</label>
        <input type="text" id="txt-position" name="txt-position" required placeholder="VD: Nhân viên">
        <br>
        <button class="add" name="btn-add-employee" type="submit">Thêm</button>
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
            $sql = "INSERT INTO `tbl_employee` (`id`, `name`, `age`, `number`, `email`, `address`, `position`) VALUES (NULL, '$name', '$age', '$number', '$email', '$address', '$position')";
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