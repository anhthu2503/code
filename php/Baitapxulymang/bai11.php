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
<?php
    $mang_dia_danh = array(
        array(
            "ten_dia_danh" => "Biển Nha Trang",
        ),
        array(
            "ten_dia_danh" => "Đà Lạt"
        ),
        array(
            "ten_dia_danh" => "Biển Vũng Tàu"
        )
    );
    $id_dia_danh = 0;
    if(isset($_GET["id_dia_danh"])){
        $id_dia_danh = $_GET["id_dia_danh"];
    }
?>
<body>
    <div class="container">
        <div class="title_block">
            <Label>DANH LAM THẮNG CẢNH</Label>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <div>
                Danh sách địa danh
            </div>
            <div class="danh_sach_chon_dia_danh">
                <?php
                    foreach($mang_dia_danh as $key => $dia_danh){
                        ?>
                            <div class="ten_dia_danh">
                                <a href="?id_dia_danh=<?php echo $key;?>">
                                    <?php
                                        echo $dia_danh["ten_dia_danh"];
                                    ?>
                                </a>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <div class="hinh_anh">
                <?php
                    echo $mang_dia_danh[$id_dia_danh]["ten_dia_danh"];
                ?>
                <img src="../image/bien-nha-trang.jpg" alt="">
            </div>
        </div>
    </div>
</body>
</html>