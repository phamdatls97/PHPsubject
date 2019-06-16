<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
//Nạp kết nối csdl
include_once "config.php";
$id = (int)$_GET["id"];
$sqlSelect = "SELECT * FROM employees WHERE id=$id";
$resul = $connect -> query($sqlSelect);
$row = $resul -> fetch_assoc();
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Xóa nhân viên</h1>
            <form name="delete" action="" method="post">
                <div class="form-group">
                    <label>Tên nhân viên: <?php echo $row["name"] ?></label>
                </div>
                <button type="submit" class="btn btn-primary">Xóa nhân viên</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>