<?php
//hàm isset() check xem giá trị của biến có tồn tại hay k
if(isset($_POST) && isset($_POST['email']) && isset($_POST['password'])){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $email = $_POST['email'];
    $password = $_POST['password'];
    echo '<br>$email: '.$email;
    echo '<br>$pass: '.$password;
}
?>