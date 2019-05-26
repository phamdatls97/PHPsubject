<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>Truy cập vào các giá trị của mảng thông qua key và thay đổi giá trị của chúng</pre>
    <?php
        $arr = array(2,4,6,8,10);
        echo "<br>". $arr[1];
        echo "<br>". $arr[3];
        echo "<pre>";
        print_r($arr);
        echo "</pre>";

        $arr[1] = 100;
        $arr[2] = 500;
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    ?>
</body>
</html>