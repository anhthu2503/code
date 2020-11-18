<?php
    include('./model/san_pham.php');
    if(isset($_POST['ten_file']) && isset($_POST['ten_hang']) && isset($_POST['so_luong']) && isset($_POST['don_gia'])){
        $san_pham_moi = new san_pham($_POST['ten_hang'],$_POST['so_luong'],$_POST['don_gia']);
        $san_pham_moi->luu_san_pham();
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
                    <legend>TẠO-GHI-ĐỌC FILE CÓ ĐỊNH DẠNG</legend>
                </div>
                <div class="form-group">
                    <div class="col-sm-2">
                    Tên file:
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="ten_file" id="input" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2">
                    Tên hàng
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="ten_hang" id="input" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2">
                    Số lượng
                    </div>
                    <div class="col-sm-10">
                        <input type="number" name="so_luong" id="input" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2">
                    Đơn giá
                    </div>
                    <div class="col-sm-10">
                        <input type="number" name="don_gia" id="input" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2">

                    </div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ghi và đọc file</button>
                    </div>
                </div>
        </form>
    </div>
</body>
</html>