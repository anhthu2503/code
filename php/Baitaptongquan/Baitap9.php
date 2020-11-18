<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai tập 9</title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
    <?php

    ?>
    <div class="container">
        <form method="post" action=""action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>KẾT QUẢ THI ĐẠI HỌC</legend>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Toán:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="diem_hk1" id="input" class="form-control" value="<?php echo $_POST["diem_hk1"]?>" min="" max="" step="" required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Lý:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="diem_hk2" id="input" class="form-control" value="<?php echo $_POST["diem_hk2"] ?>" min="" max="" step="" required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Hóa:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="diem_tb" id="input" class="form-control" value="<?php echo $diem_tb ?>" min="" max="" step="" required="required" title="" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Điểm chuẩn:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="kq" id="input" class="form-control" value="<?php echo $kq ?>" min="" max="" step="" required="required" title="" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Tổng điểm:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="kq" id="input" class="form-control" value="<?php echo $kq ?>" min="" max="" step="" required="required" title="" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Kết quả thi:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="kq" id="input" class="form-control" value="<?php echo $kq ?>" min="" max="" step="" required="required" title="" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Xem kết quả</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>