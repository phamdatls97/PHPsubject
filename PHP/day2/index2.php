<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Câu lệnh điều kiện trong php</h1>
<?php
$age = 70;
if($age<18){
    echo "trẻ em";
}elseif($age < 30) {
    echo "Thanh niên";
}elseif($age < 50) {
    echo "trung niên";
}else{
    echo "già";
}
?>
</body>
</html>