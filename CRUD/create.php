<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
    //Nạp kết nối CSDL
    include_once "config.php";
    $name = "";
    $salary = "";
    $adress = "";

    /*
     * Kiểm tra xem có dữ liệu submit đi hay không
     * !empty($_POST)
     * isset($_POST)
     */

    if(isset($_POST) && !empty($_POST)){
        //Tạo ra 1 biến check lỗi mặc định rỗng
        $errors = array();
        if(!isset($_POST["name"]) || empty($_POST["name"])){
            $errors[] = "Tên nv k hợp lệ";
        }
        if(!isset($_POST["address"]) || empty($_POST["address"])){
            $errors[] = "Địa chỉ k hợp lệ";
        }
        if(!isset($_POST["salary"]) || empty($_POST["salary"])){
            $errors[] = "Lương nv k hợp lệ";
        }

        // $errors rỗng là không có lỗi;
        if(empty($errors)){
            $name = $_POST["name"];
            $adress = $_POST["address"];
            $salary = $_POST["salary"];

            $sqlInsert = "INSERT INTO employees(name, address, salary) VALUES ('$name','$adress',$salary)";

            // thực hiện câu lệnh sql
            $resurt = $connect -> query($sqlInsert);

            if($resurt==true){
                echo "<div class='alert alert-success'> Thêm nv mới thành công! <a href='index.php'>Trang chủ</a></div>";
            }else{
                echo "<div class='alert alert-danger'> Thêm nv mới thất bại</div>";
            }
        }else{
            //Chuyển mảng $errors thành chuỗi = hàm implode()
            $errors_str = implode("<br>",$errors);
            echo "<div class='alert alert-danger'>$errors_str</div>";
        }
    }
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Tạo nhân viên mới</h1>
            <form name="create" action="" method="post">
                <div class="form-group">
                    <label>Tên nhân viên:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Địa chỉ nhân viên:</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="form-group">
                    <label>Lương nhân viên:</label>
                    <input type="text" name="salary" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Tạo nhân viên</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>