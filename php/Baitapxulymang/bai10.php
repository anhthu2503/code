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
        if(isset($_POST["mang"])){
            $mang = $_POST["mang"];
            $phan_tu = explode(",",$mang);

            $mang_slxh = array_count_values($phan_tu);
            $slxh = "";
            foreach($mang_slxh as $pt => $gia_tri){
                $slxh = $slxh.$pt.":".$gia_tri." ";
            }

            $mang_duy_nhat = array_unique($phan_tu);
            $duy_nhat = implode(",",$mang_duy_nhat);
        }
    ?>
    <div class="container">
    <form action="" method="POST" class="form-horizontal" role="form">
        <div class="form-group">
            <legend>ĐẾM SÔ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</legend>
        </div>
        <div class="form-group">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                Mảng:
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <input type="text" name="mang" id="input" class="form-control" value="<?php echo $_POST["mang"] ?>" min="" max="" step=""  title="">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                Số lần xuất hiện:
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <input type="text" name="slxh" id="input" class="form-control" value="<?php echo $slxh?>" min="" max="" step=""  title="" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                Mảng duy nhất:
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <input type="text" name="duy_nhat" id="input" class="form-control" value="<?php echo $duy_nhat?>" min="" max="" step=""  title="" readonly="readonly">
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
    </form>
    </div>
</body>
</html>