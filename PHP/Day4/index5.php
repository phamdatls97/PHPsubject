<?php

$arr1 = array(1,2,3,4,7,9,10,5);

/*sắp xếp lại mảng theo thứ tự giảm dần
sử dụng hàm rsort*/
echo "<pre>";
print_r($arr1);
echo "</pre>";

echo rsort($arr1);

echo "<pre>";
print_r($arr1);
echo "</pre>";