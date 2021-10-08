<?php
    include("admin-header.php");
    include("db.php");
?>
    <h1 class="main-title font-eph">Xem hóa đơn</h1>
    <table>
        <thead>
            <th>STT</th>
            <th>KHÁCH HÀNG</th>
            <th>SẢN PHẨM</th>
            <th>GIÁ TIỀN</th>
            <th>NGÀY MUA</th>
            <th>SỐ ĐIỆN THOẠI</th>
            <th>EMAIL</th>
            <th>ĐỊA CHỈ</th>
        </thead>
        <tbody>
            <?php
                // B2: Định nghĩa và thực hiện truy vấn
                $sql = "SELECT * FROM tbl_bill"; //đặt tên biến
                $result = mysqli_query($conn,$sql); //php thực hiện truy vấn(đối tượng đang kết nối,biến khai báo truy vấn), kết quả có thể là false hoặc object
                // B3: Xử lý dữ liệu trả về
                if(mysqli_num_rows($result) > 0){
                    $i = 1;
                    // Lặp để lấy từng bản ghi thông qua phương thức mysqli_fetch_assoc
                    while($row = mysqli_fetch_assoc($result)){ // lấy ra từng đối tượng có trong $result
            ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $row['customer_name']; ?></td>
                            <td><?php echo $row['product_name']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['purchase_date']; ?></td>
                            <td><?php echo $row['number']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                        </tr>
            <?php
                    $i++;
                    }
                }
                //B4 : Đóng kết nối
                mysqli_close($conn);
            ?>
</body>
</html>