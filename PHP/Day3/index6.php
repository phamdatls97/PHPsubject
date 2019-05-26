<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Sự khác biệt trong vòng lặp while và do while:
        -Vòng lặp while chỉ chạy khi điều kiện == true;
        -Vòng lặp do while sẽ chạy lần đầu tiên ngay cả khi điều kiejn == false
        từ lần thứ 2 trở đi vòng lặp do while chỉ chjay khi điều kiện == true
    </pre>
    <?php
        $i = 20;
        while ($i<10){
            echo "<br>while: ".$i;
            $i++;
        }
        $y = 20;
        do{
            echo "<br>do..while: ".$y;
            $y++;
        }while($y<10);
    ?>
</body>
</html>