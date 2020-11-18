<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap 1</title>
    <!--nhấn bs3-cdn để có đc link này từ bootstrap-->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        //để $ket_qua ở đây để ko bị  lỗi notice
        $ket_qua = 0;

        $mang_so = 0;
        //kiểm tra biến post có tồn tại dùng if(isset)
        if(isset($_POST["tong"])){
        //cách 1:
        //truyền giá trị để cắt ra
        $mang_so = explode(",", $_POST["nhap_day_so"]);
        //xem thử kq vừa viết đúng hay ko : echo '<pre>',print-r($mang_so),'</pre>";
        $n = count($mang_so);

        for($i = 0; $i < $n; $i++){
            //if(is_numeric($mang_so[$i])){...} để ko bị lỗi
            $ket_qua += $mang_so[$i];

        }
        //cách 2 dùng array_sum: $ket_qua= array_sum($mang_so);

        }
    ?>
    <div class="container">
        <form action="bai1.php" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>NHẬP VÀ TÍNH TRÊN DÃY SỐ</legend>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Nhập dãy số:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="nhap_day_so" id="input" class="form-control" value="<?php echo $_POST["nhap_day_so"]?>" min="" max="" step="" required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                </div>
                <div class="col-sm-10 col-sm-offset-2">
                    <button name="tong" type="submit" class="btn btn-primary">Tổng dãy số</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Tổng dãy số:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="ket_qua" id="input" class="form-control" value="<?php echo $ket_qua?>" min="" max="" step=""  title="" readonly="readonly">
                </div>
            </div>
    </div>
</body>
</html>