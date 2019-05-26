<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Vòng lặp trong php
        Vòng lặp thực hiện chu trình theo 1 số lần nhất định
        Ví dụ: Vòng lặp các thứ trong tuần
        Chạy từ chủ nhật cho đến thứ 7 sau đó sẽ lặp lại
        Vòng lặp for:
        1- điểm bắt đầu của vòng lặp
        2- điều kiện chạy của vòng lặp
        3- sự thay đổi của biến đếm sau mỗi lần chạy vòng lặp

        Cú pháp lệnh for:
        for(điểm bắt đầu; điều kiện chạy vòng lặp; sự thay đổi biến đếm){
                //Code thực thi của vòng lặp
        }
    </pre>

    <?php
        echo "In ra các số từ 0-20 <br>";
        for($i=0;$i<=20;$i++){
            echo $i . "<br>";
        }
        echo "In ra các số chẵn từ 0-19 <br>";
        for($i=0;$i<19;$i++){
            if ($i % 2 ==0){
                echo $i;
            }
        }
        echo "<br> In ra các số chẵn từ 0-19 <br>";
        for($i=0;$i<19;$i+=2){
                echo $i ;
        }
    ?>
</body>
</html>