<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Truyền tham chiếu và truyền tham trị cho function</h1>
    <pre>
        -Truyền tham trị là chỉ truyền giá trị
        -Truyền tham chiếu hiểu 1 cách đơn giản là 2 biến sẽ cùng tham chiếu đến 1 ô nhớ
        khi 1 biến thay đổi thì biến còn lại cũng thay đổi theo
    </pre>

    <?php
        //truyền tham trị
    $a = 5;
    function truyenthamtri($b){
        $b *= 2;
    }
    truyenthamtri($a);
    echo 'Giá trị của a:' .$a;

        //truyền tham chiếu
    $c = 10;
    function truyenthamchieu(&$d){
        $d *= 2;
    }
    truyenthamchieu($c);
    echo '<br> Giá trị của c:' .$c;
    ?>
</body>
</html>
