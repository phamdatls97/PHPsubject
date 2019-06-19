<?php

function helloWorld($str){
    echo "<br> Hello".$str;
}

/**
 * Lamba Hàm không tên
 */

$hello = function ($str){
    echo "<br> Hello".$str;
};

//Gọi hàm lamba khi được gán vào biến
$hello("world");