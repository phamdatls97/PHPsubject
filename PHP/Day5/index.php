<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        .container .row{
            padding: 50px;
        }
    </style>
</head>
<body>
    <pre>Xây dựng 1 form nhập chiều cao(m) cân nặng(kg) để tính ra chỉ số BMI và tính toán xếp loại </pre>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="post.php" method="post">
                    <h2>SD Post</h2>
                    <div class="BMI">
                        <label>Chiều cao(m)</label>
                        <input type="number" name="cao" class="form-inline" placeholder="Chiều cao(cm)">
                        <label>Cân nặng(kg)</label>
                        <input type="number" name="nang" class="form-inline" placeholder="Kilogram(KG)">
                        <input type="submit" value="Check" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="get.php" method="get">
                    <h2>SD Get</h2>
                    <div class="BMI">
                        <label>Chiều cao(m)</label>
                        <input type="number" name="cao" class="form-inline" placeholder="Meter(m)">
                        <label>Cân nặng(kg)</label>
                        <input type="number" name="nang" class="form-inline" placeholder="Kilogram(KG)">
                        <input type="submit" value="Check" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
