<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    if(isset($_POST["a"]) && isset($_POST["b"])){
        $a = trim($_POST["a"]);
        $mang_a = explode(",",$a);//tach chuoi a cach mhau boi dau phay
        $phan_tu_a = count($mang_a);//dem so phan tu trong mang a

        $b = trim($_POST["b"]);
        $mang_b = explode(",",$b);//tach chuoi b cach mhau boi dau phay
        $phan_tu_b = count($mang_b);//dem so phan tu trong mang b

        $c = array_merge($mang_a,$mang_b);//noi mang
        $chuoi_c = implode(",",$c);//noi chuoi

        sort($c);//xep tang dan
        $tang = implode(",",$c);

        rsort($c);//xep giam dan
        $giam = implode(",",$c);//noi chuoi
    }
?>
    <div class="container">
        <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>ĐẾM PHẦN TỬ , GHÉP MẢNG VÀ SẮP XẾP</legend>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Mảng A:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="a" id="input" class="form-control" value="<?php echo $_POST["a"] ?>" min="" max="" step=""  title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Mảng B:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="b" id="input" class="form-control" value="<?php echo $_POST["b"] ?>" min="" max="" step=""  title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <span></span>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <button type="submit">Thực hiện</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Số phần tử mảng A:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="phan_tu_a" id="input" class="form-control" value="<?php echo $phan_tu_a?>" min="" max="" step=""  title="" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Số phần tử mảng B:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="phan_tu_b" id="input" class="form-control" value="<?php echo $phan_tu_b ?>" min="" max="" step=""  title="" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Mảng C:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="chuoi_c" id="input" class="form-control" value="<?php echo $chuoi_c?>" min="" max="" step=""  title="" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Mảng C tăng dần:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="tang" id="input" class="form-control" value="<?php echo $tang?>" min="" max="" step=""  title="" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Mảng C giảm dần:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="giam" id="input" class="form-control" value="<?php echo $giam?>" min="" max="" step=""  title="" readonly="readonly">
                </div>
            </div>
        </form>
    </div>
</body>
</html>