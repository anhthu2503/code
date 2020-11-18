<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai tập 8</title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        if(isset($_POST["diem_hk1"]) && isset($_POST["diem_hk2"])){
            $diem_hk1 = $_POST["diem_hk1"];
            $diem_hk2 = $_POST["diem_hk2"];
            //$kq = $_POST["kq"];
            // $xep_loai = $_POST["xep_loai"];
            $hk2 = $diem_hk2*2;
            $diem_tb = ($diem_hk1 + $hk2)/3;
            if($diem_tb >= 5){
                $kq = "Được lên lớp";
            }
            else{
                $kq = "Ở lại lớp";
            }

            if($diem_tb >= 8){
                $xep_loai = "Giỏi";
            }elseif($diem_tb > 6.5 && $diem_tb < 8){
                $xep_loai = "Khá";
            }elseif($diem_tb >= 5 && $diem_tb < 6.5){
                $xep_loai = "Trung bình";
            }
            else {
                $xep_loai = "Yếu";
            }
        }
    ?>
    <div class="container">
        <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>KẾT QUẢ HỌC TẬP</legend>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Điểm HK1:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="diem_hk1" id="input" class="form-control" value="<?php echo $_POST["diem_hk1"]?>" min="" max="" step="" required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Điểm HK2:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="diem_hk2" id="input" class="form-control" value="<?php echo $_POST["diem_hk2"] ?>" min="" max="" step="" required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Điểm trung bình:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="diem_tb" id="input" class="form-control" value="<?php echo $diem_tb ?>" min="" max="" step="" required="required" title="" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Kết quả:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="kq" id="input" class="form-control" value="<?php echo $kq ?>" min="" max="" step="" required="required" title="" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Xếp loại học lực:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="xep_loai" id="input" class="form-control" value="<?php echo $xep_loai ?>" min="" max="" step="" required="required" title="" readonly="readonly">
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