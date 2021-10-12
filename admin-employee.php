<?php
    //B1: Kết nối DB
    include("db.php");
    include("admin-header.php");
?>
    <h1 class="main-title font-eph">Quản lý nhân viên</h1>
    <a class="add" href="admin-add-employee.php">Thêm</a>
    <table>
        <thead>
            <th>STT</th>
            <th>HỌ TÊN</th>
            <th>TUỔI</th>
            <th>SỐ ĐIỆN THOẠI</th>
            <th>EMAIL</th>
            <th>ĐỊA CHỈ</th>
            <th>CHỨC VỤ</th>
            <th colspan="2">HÀNH ĐỘNG</th>
        </thead>
        <tbody>
            <?php
                    // B2: Định nghĩa và thực hiện truy vấn
                    $sql = "SELECT * FROM tbl_employee"; //đặt tên biến 
                    $result = mysqli_query($conn,$sql); //php thực hiện truy vấn(đối tượng đang kết nối,biến khai báo truy vấn), kết quả có thể là false hoặc object
                    // B3: Xử lý dữ liệu trả về
                    if(mysqli_num_rows($result) > 0){
                        $i = 1;
                        // Lặp để lấy từng bản ghi thông qua phương thức mysqli_fetch_assoc
                        while($row = mysqli_fetch_assoc($result)){ // lấy ra từng đối tượng có trong $result
                ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['number']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['position']; ?></td>
                        <td><a class="edit" href="admin-change-employee.php?id=<?php echo $row['id']; ?>">Sửa</a></td>
                        <td><a class="delete" onclick="del()" href="admin-delete-employee.php?id=<?php echo $row['id']; ?>">Xóa</a></td>
                    </tr>        
                <?php
                        $i++;
                        }
                    }
                    //B4 : Đóng kết nối
                    mysqli_close($conn);
                ?>
        </tbody>
    </table>
    <script>
        function del() {
        alert("Bạn đã xóa thành công!");
        }
    </script>
</body>
</html>