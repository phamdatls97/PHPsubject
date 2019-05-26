<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Ví dụ là kiểu dữ liệu dạng số, chuỗi, float, booleen ... thì chỉ chứa
        các giá trị đơn 3 , "ab" , true, false, null
        Nếu muốn lưu trữ nhiều giá trị thì sẽ phải sử dụng kiểu dữ liệu dạng mảng
        Mảng có 3 loại chính:
        1 - mảng chỉ số (index) có key là số
        2 - mảng kết hợp (mảng có key là chuỗi);
        3 - mảng đa chiều (mảng lồng mảng)
        Tìm hiểu về mảng chỉ số
        mảng sẽ chứa nhiều phần tử phân cách bằng dấu ,
        Các phần tử này thì sẽ có 2 thành phần
        thành phần 1 là key (STT)
        thành phần 2 là value (Gtri)
    </pre>
    <?php
        $arr = array(2,4,6,8,10);
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    ?>
</body>
</html>