<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Gán giá trị mặc định cho tham số</h1>
    <pre>
        Nếu không truyền biến hoặc giá trị cho tham số của hàm thì sẽ bị lỗi

        Để tránh điều này nếu trong 1 số trường hợp ngta sẽ gán giá trị mặc định
        cho tham số
    </pre>

    <?php
    function chuvihtron($r){
        $chuvi = 3.14*$r*2;
        return $chuvi;
    }
    $kq = chuvihtron();
    echo "<br> Chu vi hình tròn là: ".$kq;
    ?>
</body>
</html>
