<?php
    // Định nghĩa hằng số
    define('SITEURL','http://localhost/watch');
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB','watch');
    define('PORT','3306');
    // B1: Kết nối đến server
    // mysqli_connect('dia chi host','user name truy cap','pass','database','port')
    $conn = mysqli_connect(HOST,USER,PASS,DB,PORT); // luu vao bien conn
    if(!$conn){
        die("Không thể kết nối : ".mysqli_connect_error());
    }