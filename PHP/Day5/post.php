<?php
if (isset($_POST['cao']) && isset($_POST['nang'])) {
    function tinhBMI($cao, $nang){
        $MBI = $nang/(($cao*$cao)/10000);
        return $MBI;
    }
    $MBII = tinhBMI($_POST['cao'],$_POST['nang']);
    echo "tỉ lệ MBI của bạn là: ".$MBII;
    if($MBII<18.5){
        echo "</br>Gầy";
    }elseif($MBII==18.5 && $MBII<=24.9){
        echo "</br>Bình thường";
    }elseif ($MBII>=25 && $MBII<30){
        echo "</br>Hơi béo";
    }elseif ($MBII>=30 && $MBII<35){
        echo "</br>Béo phì cấp độ 1";
    }elseif ($MBII>=35 && $MBII<40){
        echo "</br>Béo phì cấp độ 2";
    }elseif ($MBII>=40) {
        echo "</br>Béo phì cấp độ 3";
    }
}
