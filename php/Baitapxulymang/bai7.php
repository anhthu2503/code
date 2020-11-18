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
    //"&" LÀ THAM CHIÉU
        function hoan_vi(&$a,&$b){
            $tam = $a;
            $a = $b;
            $b = $tam;
        }
        function sap_tang(&$mang){
            $n = count($mang);
            for($i=0;$i<$n-1;$i++){
                for($j =$i + 1;$j<$n;$j++){//$i +1 để nó  ko chạy lùi
                    if($mang[$i]>$mang[$j]){
                        hoan_vi($mang[$i],$mang[$j]);
                    }
                }
                return $mang;
            }
        }
        function sap_giam(&$mang){
            $n = count($mang);
            for($i=0;$i<$n;$i++){
                for($j =$i;$j<$n;$j++){
                    if($mang[$i]<$mang[$j]){
                        hoan_vi($mang[$i],$mang[$j]);
                    }
                }
                return $mang;
            }
        }

        if(isset($_POST["day_so"])){
            $day_so = trim($_POST["day_so"]);//lay chuoi da bo het khoang trang du thua
            $mang = explode(",",$day_so);
            $mang1 = sap_tang($mang);
            //implode: tạo chuỗi
            $chuoi_tang = implode(",",$mang1);
            $mang2 = sap_giam($mang);
            $chuoi_giam = implode(",",$mang2);
        }
    ?>
    <div class="container">
        <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>SẮP XẾP MẢNG</legend>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Nhập mảng:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="day_so" id="input" class="form-control" value="<?php echo $_POST["day_so"] ?>" min="" max="" step=""  title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                  <span></span>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <button type="submit" class="btn btn-primary">Sắp xếp tăng/giảm</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Sau khi sắp xếp:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <span></span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                   Tăng dần:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="chuoi_tang" id="input" class="form-control" value="<?php echo $chuoi_tang ?>" min="" max="" step="" required="required" title="" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Giảm dần:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="chuoi_giam" id="input" class="form-control" value="<?php echo $chuoi_giam ?>" min="" max="" step="" required="required" title="" readonly="readonly">
                </div>
            </div>
        </form>
    </div>
</body>
</html>