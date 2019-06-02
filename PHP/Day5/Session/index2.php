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

    //Xem tất cả các session:
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    ?>

</body>
</html>

