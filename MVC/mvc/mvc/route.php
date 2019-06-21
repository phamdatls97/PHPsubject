<?php

namespace MVC;
use MVC\Controllers\EmployeeController;

class Route{
    public function run(){

    }
}

// $_REQUEST lấy tất cả các dl điều hướng từ method và get

echo "<br> $ REQUEST";
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

if(isset($_REQUEST["controller"]) && ($_REQUEST["controller"]=="employee")) {
    $controller = new EmployeeController();

    if(isset($_REQUEST["action"]) && ($_REQUEST["action"]=="index")) {
        $controller->index();
    }elseif (isset($_REQUEST["action"]) && ($_REQUEST["action"] == "create")) {
        $controller->create();
    }elseif (isset($_REQUEST["action"]) && ($_REQUEST["action"] == "edit")) {
        $controller->edit();
    }elseif (isset($_REQUEST["action"]) && ($_REQUEST["action"] == "delete")) {
        $controller->delete();
    }else{
        echo "Không tồn tại phương thức này";
        exit;
    }
}else{
    echo "Không tồn tại trang này";
    exit;
}