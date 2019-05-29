<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Hàm trong php</h1>
    <pre>
        Hàm là 1 tập hợp các dòng lệnh thực hiện 1 chức năng
        ví dụ như hàm tính chu vi hình tròn, hàm tính diện tích hình chữ nhật
        hàm xuất file Pdf.....
        - Thay vì phải viết lại nhiều dòng code khi thực hiện 1 chức năng nhiều lần
        người ta sd hàm. Để khi cần dùng chỉ cần gọi tên hàm và sd
        Hàm khai báo bằng từ khóa function
        function tên_hàm(tham_số1, tham_soos2,..){
            //code chạy trong hàm

            //return có thể có hoặc không
            //và sẽ kết thúc hàm tại câu lệnh return
            return giá_trị;
        }
    </pre>

    <?php
        // khai báo hàm với r là tham số cần truyền vào
    function chuvihtron($r){
        $chuvi = 3.14*$r*2;
        return $chuvi;
    }
    //gọi hàm
    $kq = chuvihtron(5);
    echo "<br> Chu vi hình tròn là: ".$kq;

    function dtichhtron($r){
        $dt = 3.14*$r*$r;
        return $dt;
    }
    echo "<br> Diện tích hình tròn là:" .dtichhtron(5);
    ?>
</body>
</html>
