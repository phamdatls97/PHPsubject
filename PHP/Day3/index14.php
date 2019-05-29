<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Mảng đa chiều là mảng lồng mảng
        Tức là mỗi phần tử của mảng là 1 mảng con
    </pre>
    <?php
        $cities = array();
        $cities['hn']       = array(
                'name' => 'Hà Nội',
            'district' => array(
                    'hbt' => array(
                            'name' => 'Hai bà trung',
                            'unit' => array('phường 1','phường 2','phường 3')
                    ),
                    'tx' => array(
                            'name' => 'Thanh xuân',
                            'unit' => array('phường 1','phường 2','phường 3')
                    ),
                    'cg' => array(
                            'name' => 'Cầu giấy',
                            'unit' => array('phường 1','phường 2','phường 3')
                    ),
            )
        );
        $cities['hcm'] = array(
                'name' => 'Hồ chí minh',
            'district' => array(
                    'hbt' => array(
                            'name' => 'Quận 1',
                            'unit' => array('phường 1','phường 2','phường 3')
                    ),
                    'tx' => array(
                            'name' => 'Quận 7',
                            'unit' => array('phường 1','phường 2','phường 3')
                    ),
                    'cg' => array(
                            'name' => 'Quận 5',
                            'unit' => array('phường 1','phường 2','phường 3')
                    ),
            )
        );
        echo '<pre>';
        print_r($cities);
        echo '</pre>';


        echo "truy cập phần tử của mảng đa chiều";
        echo "<br>".$cities['hn']['district']['hbt']['name'];
        echo "<br>".$cities['hn']['district']['hbt']['unit'][0];
        echo "<br>".$cities['hn']['district']['hbt']['unit'][1];
        echo "<br>".$cities['hn']['district']['hbt']['unit'][2];
        //----------------HCM------------------
        echo "<br>".$cities['hcm']['district']['hbt']['name'];
        echo "<br>".$cities['hcm']['district']['hbt']['unit'][0];
        echo "<br>".$cities['hcm']['district']['hbt']['unit'][1];
        echo "<br>".$cities['hcm']['district']['hbt']['unit'][2];
    ?>
</body>
</html>