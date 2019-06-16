<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Kết nối CSDL MySQL</h1>
    <?php
        $severIPDatabase = "localhost";
        $severDatabaseUsername = "root";
        $severDatabasePassword = "";
        $databaseName = "northwind";

        /*
         * tạo ra 1 biến connection
         */

        $connection = new mysqli($severIPDatabase,$severDatabaseUsername,$severDatabasePassword,$databaseName);

        /*
         * kiểm tra kết nối đến csdl
         */

        if($connection -> connect_error){
            /*
             * ngắt chương trình khi kết nối thất bại
             */
            die("Kết nối fail");
        }
        echo "<br> Kết nối thành công !!";
    ?>
</body>
</html>