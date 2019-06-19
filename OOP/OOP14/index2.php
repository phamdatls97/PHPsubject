<?php

function helloWorld($str){
    echo "<br> Hello".$str;
}

/**
 * Lamba Hàm không tên
 */
$lang = "PHP";

$hello = function ($str) use ($lang){
    echo "<br> Hello".$str ." With ". $lang;
};

//Gọi hàm lamba khi được gán vào biến
$hello("World !!!");