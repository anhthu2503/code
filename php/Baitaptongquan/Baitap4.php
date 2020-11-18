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
    if(isset($_POST["ten_chu_ho"]) && isset($_POST["chi_so_cu"]) && isset($_POST["chi_so_moi"]))
    {
        $ten_chu_ho = $_POST["ten_chu_ho"];
        $chi_so_cu = $_POST["chi_so_cu"];
        $chi_so_moi = $_POST["chi_so_moi"];
        $don_gia = $_POST["don_gia"];
        $so_tien_thanh_toan = ($chi_so_moi-$chi_so_cu)*$don_gia;
    }
    ?>
    <div class="container">
        <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>THANH TOÁN TIỀN ĐIỆN</legend>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Tên chủ hộ:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="ten_chu_ho" id="input" class="form-control" value="<?php echo $_POST["ten_chu_ho"] ?>" min="" max="" step="" required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Chỉ số cũ:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="chi_so_cu" id="input" class="form-control" value="<?php echo $_POST["chi_so_cu"] ?>" min="" max="" step="" required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Chỉ số mới:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="chi_so_moi" id="input" class="form-control" value="<?php echo $_POST["chi_so_moi"] ?>" min="" max="" step="" required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Đơn giá:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="don_gia" id="input" class="form-control" value="<?php echo $_POST["don_gia"] ?>" min="" max="" step="" required="required" title="" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Số tiền thanh toán:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="so_tien_thanh_toan" id="input" class="form-control" value="<?php echo $so_tien_thanh_toan ?>" min="" max="" step="" required="required" title="" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">Tính</button>
                    </div>
                </div>
        </form>
    </div>
</body>
</html>