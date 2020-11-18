<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai tập 5</title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
       function tim_kiem($mang,$gia_tri){
           $n = count($mang);
           $kq = -1;
           for($i=0;$i<$n;$i++){
               if($mang[$i] == $gia_tri){
                   $kq = $i;
               break;
               }
           }
           return $kq;
       }
       if(isset($_POST["mang"]) && isset($_POST["so"])){
           $mang_chuoi = trim($_POST["mang"]);
           $gia_tri = $_POST["so"];

           $mang = explode(",",$mang_chuoi);
           $kq = tim_kiem($mang,$gia_tri);
           $mang_kq = implode(",",$mang);
           if($kq<>-1){
               $kq = $kq + 1;
               $chuoi = "Tìm thấy $gia_tri tại vị trí $kq của mảng";
           }
           else{
               $chuoi = "Không tìm thấy $gia_tri của mảng";
           }
       }
    ?>
    <div class="container">
        <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>TÌM KIẾM</legend>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Nhập mảng:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="mang" id="input" class="form-control" value="<?php echo $_POST["mang"] ?>" min="" max="" step="" required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                   Nhập số cần tìm:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="so" id="input" class="form-control" value="<?php echo $_POST["so"] ?>" min="" max="" step="" required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <span></span>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                   Mảng:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="mang_kq" id="input" class="form-control" value="<?php echo $mang_kq ?>" min="" max="" step="" required="required" title="" readonly="readonly" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Kết quả tìm kiếm:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="chuoi" id="input" class="form-control" value="<?php echo $chuoi ?>" min="" max="" step="" required="required" title="" readonly="readonly">
                </div>
            </div>
        </form>
    </div>
</body>
</html>