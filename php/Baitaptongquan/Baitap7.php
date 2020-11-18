<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai tập 7</title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        if(isset($_POST["nhap_gio"])){
            $nhap_gio = $_POST["nhap_gio"];
            if($nhap_gio >= 0 && $nhap_gio <= 13){
                echo "Chao buoi sang";
            }elseif($nhap_gio >= 13 && $nhap_gio <= 18){
                echo "Chao buoi chieu";
            }elseif($nhap_gio >=19 || $nhap_gio <= 23){
                echo "Chao buoi toi";
            }
        }
    ?>
    <div class="container">
        <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>CHÀO THEO GIỜ</legend>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Nhập giờ:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="nhap_gio" id="input" class="form-control" value="<?php echo $_POST["nhap_gio"] ?>" min="" max="" step="" required="required" title="">
                </div>
            </div>
            <div class="form-grou">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" value="<?php echo $nhap_gio?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Chào</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>