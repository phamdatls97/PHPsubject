<?php

for ($i=1;$i<10;$i++){
    if($i==5){
        //câu lệnh continue sẽ bỏ qua câu lệnh bên dưới vòng lặp
        //và chạy sang vòng lặp tiếp
        continue;
    }
    echo '<br>'. $i;
}