<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Mảng kết hợp là mảng có ít nhất 1 key là chuỗi
    </pre>
    <?php
        //cách 1:
        $cities = array (
            'hn' => 'Hà Nội',
            'dn' => 'Đà Nẵng',
            'hcm' => 'Hồ Chí Minh',
            'ct' => 'Cần Thơ',
            'hp' => 'Hải Phòng',
        );
        echo "<pre>";
        print_r($cities);
        echo "</pre>";

        //cách 2:
        $cities = array();
        $cities['hn'] = "Hà nội";
        $cities['dn'] = "Đà nẵng";
        $cities['hcm'] = "Hồ chí minh";
        $cities['ct'] = "Cần thơ";
        $cities['hp'] = "Hải phòng";
        echo "<pre>";
        print_r($cities);
        echo "</pre>";

        //Truy cập vào các phần tử của mảng qua key
        echo '<br>$cities["hn"]: '.$cities['hn'];
        echo '<br>$cities["hcm"]: '.$cities['hcm'];

        foreach ($cities as $key_city => $city){
            echo "<br>key= ".$key_city;
            echo "<br>value= ".$city;
        }
    ?>
</body>
</html>