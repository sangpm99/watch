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
<body>
    <div class="login">
        <form method="POST" action="" class="frm-login">
            <h5>Đăng Nhập</h5>
            <input type="text" id="txt-user" name="txt-user" placeholder="Username">
            <input type="password" id="txt-pass" name="txt-pass" placeholder="Password">
            <button class="submit" name="btn-login" type="submit">Đăng nhập</button>
        </form>
        <?php
            include("db.php");

            if(isset($_POST['btn-login'])){ //isset là kiểm tra biến có tồn tại hay không
                $user = $_POST['txt-user'];
                $pass = $_POST['txt-pass'];

                //B2 : Thực hiện truy vấn
                $sql = "SELECT * FROM tbl_user WHERE user='$user' AND password='$pass'";
                $result = mysqli_query($conn,$sql);
                $count = mysqli_num_rows($result);
                if($count == 1){
                    header('location:'.SITEURL.'/admin-index.php');
                }
                else
                {
                    header('location:'.SITEURL.'/login.php');
                }
            }
        ?>
    </div>
</body>
</html>