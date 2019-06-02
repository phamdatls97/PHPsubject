<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Nạp 1 hay nhiều file php vào 1 file khác</h1>
<pre>
        Để nạp file vào 1 file khác thì sử dụng:
        cách 1: include "đường dẫn của file.php"
        cách 2: include_once "đường dẫn của file.php";
        cách 3: require "đường dẫn của file.php"
        cách 4: required_once "đường dẫn của file.php"
        Hàm var($bien) trả về kiểu dl của biến và giá trị của biến
    hàm này được sd để debug
    </pre>

<?php
//nạp file function.php vào trong file hiện tại
include "function.php";
include "function.php";
/*
 * gặp lỗi nếu sd 2 lần
 * => Nên sd include_once thay vì include
 */
$r = 5;
$kq = tinhchuvihtron($r);
echo "tính chu vi hình tròn";
echo "</br>";


var_dump($kq);
/*
 * xuất hiện lỗi vì k tìm thấy hàm tinhchuvihtron();
 */
?>
</body>
</html>
