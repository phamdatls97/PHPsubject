<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Vòng lặp do..While
        Cú pháp :

        sự khởi đầu vòng lặp
        do{
            //các câu lệnh thực thi của vòng lặp

            sự thay đổi biến đếm sau mỗi lần chạy
        }while(điều kiện chạy của vòng lặp);
    </pre>
    <?php
        echo "<br>In ra các số từ 0-19 <br>";
        $i=0;
        do{
            echo $i . "<br>";
            $i++;
        }while($i<20);
    ?>
</body>
</html>