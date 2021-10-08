<?php
    include("db.php");
    include("admin-header.php");
?>
    <h1 class="main-title font-eph">Quản lý sản phẩm</h1>
    <a class="add" href="admin-add-product.php">Thêm</a>
    <table>
        <thead>
            <th>STT</th>
            <th>TÊN SẢN PHẨM</th>
            <th>GIÁ</th>
            <th>HÌNH ẢNH</th>
            <th>MÔ TẢ</th>
            <th colspan="2">HÀNH ĐỘNG</th>
        </thead>
        <tbody>
            <?php
                //B1: Kết nối DB
                //B2: Định nghĩa và thực hiện truy vấn
                $sql = "SELECT * FROM tbl_product";
                $result = mysqli_query($conn,$sql);
                //B3: Xử lý dữ liệu trả về
                if(mysqli_num_rows($result) > 0){
                    $i = 1;
                    while($row = mysqli_fetch_assoc($result)){
            ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $row['product_name']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['image']; ?></td>
                            <td class="over-hidden"><?php echo $row['description']; ?></td>
                            <td><a class="edit" href="admin-change-product.php?id=<?php echo $row['id']; ?>">Sửa</a></td>
                            <td><a class="delete" onclick='del()' href="admin-delete-product.php?id=<?php echo $row['id']; ?>">Xóa</a></td>
                        </tr>
            <?php
                    $i++;
                    }
                }
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