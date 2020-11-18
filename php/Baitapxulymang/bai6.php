<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai tập 6</title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
       function thay_the($mang,$cu,$moi){
           $n = count($mang);
           for($i=0;$i<$n;$i++){
               if($mang[$i] == $cu){
                   $mang[$i] = $moi;
               }
           }
           return $mang;
       }
       if(isset($_POST["day"]) && isset($_POST["cu"]) && isset($_POST["moi"])){
          $day = $_POST["day"];
          $cu = $_POST["cu"];
          $moi = $_POST["moi"];
          $mang = explode(",",$day);
          $mang_cu  = implode(" ",$mang);
          $mang = thay_the($mang,$cu,$moi);
          $mang_moi = implode(" ",$mang);
       }
    ?>
    <div class="container">
        <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>THAY THẾ</legend>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Nhập các phần tử:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="day" id="input" class="form-control" value="<?php echo $_POST["day"] ?>" min="" max="" step="" required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                   Giá trị cần thay thế:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="cu" id="input" class="form-control" value="<?php echo $_POST["cu"] ?>" min="" max="" step="" required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Giá trị thay thế:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="moi" id="input" class="form-control" value="<?php echo $_POST["moi"] ?>" min="" max="" step="" required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                  <span></span>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <button type="submit" class="btn btn-primary">Thay thế</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Mảnng cũ:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="mang_cu" id="input" class="form-control" value="<?php echo $mang_cu ?>" min="" max="" step="" required="required" title="" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Mảnng sau khi thay thế:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="mang_moi" id="input" class="form-control" value="<?php echo $mang_moi ?>" min="" max="" step="" required="required" title="" readonly="readonly">
                </div>
            </div>
        </form>
    </div>
</body>
</html>