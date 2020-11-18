<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 2</title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        $ho = '';
        $t_dem = '';
        $ten = '';
        //Lấy dữ liệu người dùng nhập lên server
        $ho_va_ten = $_POST["ho_va_ten"];
        //Dùng hàm explode để tách họ và tên thành một mảng
        $mang = explode(" ",$ho_va_ten);
        //Tìm phần họ và phần tên
        $n = count($mang);
        $ho = $mang[0];//ptử đầu tiên
        $ten = $mang[$n-1];//ptử cuối cùng
        //cách 1
        //Dùng vòng lặp for để lấy phần tên đệm
        $t_dem = "";
        for($i = 1; $i < ($n-1); $i++){
            $t_dem = $t_dem.$mang[$i]." ";
        }
        //cách 2:
        //array_pop($mang);
        //$mang[0] = '';
        // $t_dem = implode(" ",$mang);
    ?>
    <div class="container">
        <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>TÁCH HỌ VÀ TÊN</legend>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Họ và tên:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="ho_va_ten" id="input" class="form-control" value="<?php echo $_POST["ho_va_ten"]?>" min="" max="" step="" required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Họ:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="ho" id="input" class="form-control" value="<?php echo $ho ?>" min="" max="" step="" required="required" title="" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Tên đệm:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="t_diem" id="input" class="form-control" value="<?php echo $t_dem ?>" min="" max="" step="" required="required" title=""  readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Tên:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="ten" id="input" class="form-control" value="<?php echo $ten ?>" min="" max="" step="" required="required" title="" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Tách họ và tên</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>