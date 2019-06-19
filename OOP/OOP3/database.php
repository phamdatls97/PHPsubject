<?php
/**
 * Created by PhpStorm.
 * Yêu cầu : Xây dựng class tên là Database
 * có 1 thuộc tính là connection để lưu trữ kết nội đến CSDL
 * và có 4 thuộc tính : ip database ( localhost ) , user db , pass db , tên CSDL
 * Class này có 1 method khởi tạo là __construct() làm nhiệm vụ kết nội đến CSDL
 * constructor này sẽ có 4 tham số dùng để kết nối đến CSDL truyền vào
 * và trong method này sẽ khởi tạo kết nối CSDL và gán kết nối cho thuộc tính connection
 *
 */
class Database{
    public $connection;
    public $ipdatabase;
    public $username;
    public $password;
    public $csdlname;

    public function __construct($ip,$user_name,$pass,$csdl)
    {
        $this->ipdatabase = $ip;
        $this->username = $user_name;
        $this->password = $pass;
        $this->csdlname = $csdl;

        $this->connection = new mysqli($ip,$user_name,$pass,$csdl);

    }

    public function disconnect(){
        mysqli_close($this->connection);
    }
}

?>