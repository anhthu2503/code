    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 3</title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        if(isset($_POST["duong_lich"])){
            $duong_lich = $_POST["duong_lich"];
            if(is_numeric($duong_lich)){
                $nam = ($duong_lich - 3) % 10;
                switch($nam){
                    case 0:
                        $can = "Quý";
                    break;
                    case 1:
                        $can = "Giáp";
                    break;
                    case 2:
                        $can = "Ất";
                    break;
                    case 3:
                        $can = "Bính";
                    break;
                    case 4:
                        $can = "Đinh";
                    break;
                    case 5:
                        $can = "Mậu";
                    break;
                    case 6:
                        $can = "Kỷ";
                    break;
                    case 7:
                        $can = "Canh";
                    break;
                    case 8:
                        $can = "Tân";
                    break;
                    case 9:
                        $can = "Nhâm";
                    break;
                }
                $nam = ($duong_lich - 3) % 12;
                switch($nam){
                    case 0:
                        $chi = "Hợi";
                    break;
                    case 1:
                        $chi = "Tý";
                    break;
                    case 2:
                        $chi = "Sửu";
                    break;
                    case 3:
                        $chi = "Dần";
                    break;
                    case 4:
                        $chi = "Mẹo";
                    break;
                    case 5:
                        $chi = "Thình";
                    break;
                    case 6:
                        $chi = "Tỵ";
                    break;
                    case 7:
                        $chi = "Ngọ";
                    break;
                    case 8:
                        $chi = "Mùi";
                    break;
                    case 9:
                        $chi = "Thân";
                    break;
                    case 10:
                        $chi = "Dậu";
                    break;
                    case 11:
                        $chi = "Tuất";
                    break;
                }
                $am_lich = $can."".$chi;
            }
        }
    ?>
    <div class="container">
        <form action="" method="POST" class="form-horizontal" role="form">
            <table width="400" align="center">
                <tr>
                    <td colspan="3" align="center">TÍNH NĂM ÂM LỊCH</td>
                </tr>
                <tr>
                    <td align="center">Năm dương lịch</td>
                    <td width=57><span></span></td>
                    <td align="center">Năm âm lịch</td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="number" name="duong_lich" id="input" class="form-control" value="<?php echo $_POST["duong_lich"]?>" min="" max="" step="" required="required" title="">
                    </td>
                    <td align="center">
                        <button>=></button>
                    </td>
                    <td align="center">
                        <input type="text" name="am_lich" id="input" class="form-control" value="<?php echo $am_lich ?>" min="" max="" step="" required="required" title="" readonly="readonly">
                </tr>
            </table>
        </form>
    </div>
</body>
</html>