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
    <style>
        .title_block{
            text-align: center;
            background-color: #ffcc66;
            padding: 5px 5px;
        }
    </style>
</head>
<?php
    $mang_dong_vat = array(
        array(
            "ten_dong_vat" => "Chim cánh cụt",
            "mo_ta" => "Chim cánh cụt hay còn gọi là chim cụt cánh (bộ Sphenisciformes, họ Spheniscidae - lấy theo chi Spheniscus nghĩa là hình nêm) là một bộ chim không cánh sinh sống dưới nước là chủ yếu tại khu vực Nam bán cầu. Châu Nam Cực chỉ toàn băng tuyết, với nhiệt độ trung bình hàng năm thấp nhất trong các châu lục trên Trái Đất, nhưng chim cánh cụt vẫn sống và có tới hàng chục loài khác nhau. Chúng có lông rậm, mỡ dày để chịu rét. Khối lượng thay đổi tùy loài, có thể lên đến vài chục kilôgam. Chúng thường sống thành bầy, đông tới hàng nghìn con."
        ),
        array(
            "ten_dong_vat" => "Gấu trắng Bắc cực",
            "mo_ta" => "Gấu trắng Bắc Cực là một loài động vật có vú lớn của bộ Ăn thịt, họ Gấu. Chúng là loài động vật sống gần địa cực tìm thấy xung quanh Bắc Băng Dương và chúng là loài động vật ăn thịt lớn nhất trên đất liền. Gấu Bắc Cực sinh sống trên lãnh thổ của năm quốc gia khác nhau."
        ),
        array(
            "ten_dong_vat"  => "Hổ",
            "mo_ta" => "Hổ, còn gọi là cọp, hùm, ông 30, khái là một loài động vật có vú thuộc Họ Mèo, và là một trong năm loài meo lon thuộc chi Panthera. Hổ là một loài thú ăn thịt, chúng dễ nhận biết nhất bởi các sọc vằn dọc sẫm màu trên bộ lông màu đỏ cam với phần bụng trắng."
        )
    );

    $id_dong_vat = 0;
    if(isset($_GET["id_dong_vat"])){
        $id_dong_vat = $_GET["id_dong_vat"];
    }
?>
<body>
    <div class="container">
        <div class="title_block">
           <h4>TỪ ĐIỂN ĐỘNG VẬT</h4>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <div class="title">
                Danh sách động vật
            </div>
            <div class="danh_sach_chon_dong_vat">
                <?php
                    foreach($mang_dong_vat as $key => $dong_vat){
                        ?>
                        <div class="ten_dong_vat">
                            <a href = "?id_dong_vat=<?php echo $key; ?>">
                                <?php
                                    echo $dong_vat["ten_dong_vat"];
                                ?>
                            </a>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>

        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <div>
                Thông tin động vật
            </div>
            <div class="mieu_ta">
                <?php
                    echo $mang_dong_vat[$id_dong_vat]["ten_dong_vat"];
                    echo "</br>";
                    echo $mang_dong_vat[$id_dong_vat]["mo_ta"];
                ?>
            </div>
        </div>
    </div>
</body>
</html>