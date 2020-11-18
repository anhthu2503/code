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
        if(isset($_POST["mang_1"]) && isset($_POST["mang_2"])){
            $mang_chuoi_1 = trim($_POST["mang_1"]);
            $mang_1 = explode(",",$mang_chuoi_1);

            $mang_chuoi_2 = trim($_POST["mang_2"]);
            $mang_2 = explode(",",$mang_chuoi_2);

            $phan_tu_duy_nhat_1 = array_diff($mang_1,$mang_2);
            $mang_duy_nhat_1 = implode(",",$phan_tu_duy_nhat_1);

            $phan_tu_duy_nhat_2 = array_diff($mang_2,$mang_1);
            $mang_duy_nhat_2 = implode(",",$phan_tu_duy_nhat_2);
        }
    ?>
    <div class="container">
        <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>TÌM PHẦN TỬ KHÁC NHAU GIỮA HAI MẢNG</legend>
            </div>
            <div class="form-group">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    Mảng chuỗi thứ nhất:
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                    <input type="text" name="mang_1" id="input" class="form-control" value="<?php echo $_POST["mang_1"] ?>" min="" max="" step=""  title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    Mảng chuỗi thứ hai:
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                    <input type="text" name="mang_2" id="input" class="form-control" value="<?php echo $_POST["mang_2"] ?>" min="" max="" step=""  title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <span></span>
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                    <button type="submit">Phân tích hai mảng</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    Phần tử chỉ có trong mảng thứ nhất:
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                    <input type="text" name="mang_duy_nhat_1" id="input" class="form-control" value="<?php echo $mang_duy_nhat_1?>" min="" max="" step=""  title="" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    Phầ ntử chỉ có trong mảng thứ hai:
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                    <input type="text" name="mang_duy_nhat_2" id="input" class="form-control" value="<?php echo $mang_duy_nhat_2?>" min="" max="" step=""  title="" readonly="readonly">
                </div>
            </div>
        </form>
    </div>
</body>
</html>