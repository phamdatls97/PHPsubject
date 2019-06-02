<?php

// Start session:
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Cách tạo ra 1 session trong php</h1>

    <?php
    //Tạo ra 1 session trong php
    $_SESSION["username"] = "admin";
    $_SESSION["password"] = "123456";
    $_SESSION["email"] = "abc@gmail.com";
    $location = "Hà Nội";
    $_SESSION["location"] = $location;

    //Xem tất cả các session:
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    echo "Địa điểm ng dùng : ".$_SESSION['location'];

    //In ra từng session trong $_SESSION
    echo "<br><br> Tên user: " . $_SESSION['username'];
    echo "<br> Mật khẩu: " . $_SESSION['password'];
    echo "<br> Email: " . $_SESSION['email'];
    echo "<br> Vị trí: " . $_SESSION['location'];

    $_SESSION['location'] = "HCM";

    //Xem tất cả các session:
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    echo "Địa điểm ng dùng: ".$_SESSION['location'];
    ?>
</body>
</html>

