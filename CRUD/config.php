<?php
/**
 * Created by PhpStorm.
 * User: ilove_000
 * Date: 09/06/2019
 * Time: 8:01 CH
 */
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_NAME","employees");

/*
 * Kết nối CSDL
*/

$connect = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);

if($connect -> connect_error == true){
    die("Không thể kết nối CSDL");
}