<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Phạm vi của biến</h1>
    <pre>
        -Biến cục bộ: chỉ có ảnh hưởng và chỉ sử dụng trong 1 không gian nhất định
        -Biến toàn cục: có ảnh hưởng và có thể sd ở mọi nơi
        -Nếu tên biến bị trùng thì nếu sử dụng ngoài hàm thì php sẽ lấy giá trị của biến toàn cục
        ***
        Tham số khi khai báo hàm là biến cục bộ và chỉ có tác dụng trong hàm
    </pre>

    <?php
        //Biến toàn cục
    $r = 100;
    function chuvihtron($r=10){
        //$chuvi là biến cục bộ
        $chuvi = 3.14*$r*2;
        return $chuvi;
    }

    //$kq bên ngoài hàm là biến toàn cục
    $kq = chuvihtron(15);
    echo "<br> Biến r: ".$r;
    ?>
</body>
</html>
