<?php
    if(isset($_POST['ten_file']) && isset($_POST['noi_dung'])){
        $f = fopen($_POST['ten_file'], 'a') or exit('Khong the mo file');
       $noi_dung = $_POST['noi_dung'];
       fwrite($f, $noi_dung);
       fclose($f);

    }
?>
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
    <div class="container">
        <form action="" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <legend>THÊM NỘI DUNG VÀO FILE</legend>
                </div>

                <div class="form-group">
                    <div class="col-sm-2">
                        Tên file:
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="ten_file" id="input" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2">
                        Nội dung:
                    </div>
                    <div class="col-sm-10">
                        <textarea name="noi_dung" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2">
                        <span></span>
                    </div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Thêm nội dung</button>
                    </div>
                </div>
        </form>
        <div class="them_thon_tin">
            <?php
                if(file_exists('test.txt')){
                    $f = fopen('test.txt', 'r') or exit('Khong the mo file');

                    while(!feof($f)){
                        echo fgets($f).'<br>';
                    }
                    fclose($f);
                }
            ?>
        </div>
    </div>
</body>
</html>