<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai tập 4</title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        //tạo các hàm tạo mảng, xuất mảng, tính tổng, tìm min, tìm max
        function tao_mang($n)
        {
            for($i=0;$i<$n;$i++){
                $mang[$i] = rand(0,20);
            }
            return $mang;
        }
        function xuat_mang($mang){
            $n = count($mang);
            $chuoi = "";
            for($i=0;$i<$n;$i++){
                $chuoi = $chuoi.$mang[$i]."  ";
            }
            return $chuoi;
        }
        function tinh_tong($mang){
            $n = count($mang);
            $tong = 0;
            for($i=0;$i<$n;$i++){
                $tong = $tong + $mang[$i];
            }
            return $tong;
        }
        function tim_max($mang){
            $n = count($mang);
            $max = $mang[0];
            for($i=0;$i<$n;$i++){
                if($mang[$i]>$max){
                    $max = $mang[$i];
                }
            }
            return $max;
        }
        function tim_min($mang){
            $n = count($mang);
            $min = $mang[0];
            for($i=0;$i<$n;$i++){
                if($mang[$i]<$min){
                    $min = $mang[$i];
                }
            }
            return $min;
        }
        if(isset($_POST["n"])){
            $n = $_POST["n"];
            $mang = tao_mang($n);
            $mang_kq = xuat_mang($mang);
            $tong = tinh_tong($mang);
            $max = tim_max($mang);
            $min = tim_min($mang);
        }
    ?>
    <div class="container">
        <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>PHÁT SINH MẢNG VÀ TÍNH TOÁN</legend>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Nhập số phần tử:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="n" id="input" class="form-control" value="<?php echo $_POST["n"] ?>" min="" max="" step="" required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                   <span></span>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <button type="submit" class="btn btn-primary">Phát sinh và tính toán</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Mảng:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="mang_kq" id="input" class="form-control" value="<?php echo $mang_kq ?>" min="" max="" step="" required="required" title="" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    GTLN (MAX) trong mảng:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="max" id="input" class="form-control" value="<?php echo $max ?>" min="" max="" step="" required="required" title="" readonly="readonly" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                GTNN (MIN) trong mảng:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="min" id="input" class="form-control" value="<?php echo $min ?>" min="" max="" step="" required="required" title="" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                Tổng mảng:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="tong" id="input" class="form-control" value="<?php echo $tong ?>" min="" max="" step="" required="required" title="" readonly="readonly">
                </div>
            </div>
        </form>
    </div>
</body>
</html>