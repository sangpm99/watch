<?php
    //Nhận dữ liệu thông qua phương thức GET
    // Mở kết nối
    include("db.php");
    // Trong PHP : Khi sử dụng phương thức GET, mọi giá trị lưu trong 1 biến siêu toàn
    // cục ($_GET) => mảng
    $id_need_del = $_GET['id'];
    
    //B2: Thực hiện câu truy vấn
    $sql = "DELETE FROM tbl_employee WHERE id=$id_need_del";
    $result = mysqli_query($conn,$sql);

    //B3: Xử lý kết quả nếu mysqli_query thành công trả về true
    if($result == true){
        header('location:'.SITEURL.'/admin-employee.php');
    }
?>