<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai tap 2</title>
    <style>
        .button {
            background-color: #ff9966;
        }
        .content {
            width: 260px;
        }
        .container {
            margin-top: 20px;
            font-size: 20px;
        }
        .title {
            font-size: 20px;
            color: #ffff;
        }
    </style>
</head>
<body>
    <?php
        $content = $_POST["content"];
        $backgrouncolor = $_POST["backgroundcolor"];
        $color = $_POST["color"];
    ?>
    <form name="dinh dang mau" method="post" action="Baitap2.php">
        <table width="400" align="center" bgcolor="#ffcccc">
            <tr>
                <td class="title" colspan="2"  bgcolor="#dd4800"><div align="center">ĐỊNH MÀU CHỮ - MÀU NỀN</div></td>
            </tr>
            <tr>
                <td>Nội dung:</td>
                <td><input class="content" type="text" name="content" value="<?php echo $content?>" ></td>
            </tr>
            <tr>
                <td>Màu nền:</td>
                <td><input type="text" name="backgroundcolor" value="<?php echo $backgroundcolor?>"></td>
            </tr>
            <tr>
                <td>Màu chữ:</td>
                <td><input type="text" name="color" value="<?php echo $color?>"></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input class="button" type="submit" value="Xem kết quả"></td>
            </tr>
        </table>
    </form>
    <table class="container" width="400" align="center" bgcolor="#<?php echo $backgroundcolor;?>">
        <tr>
        <td align="center"> <font color="#<?php echo $color;?>"><?php echo $content;?></font></td>
        </tr>
    </table>
</body>
</html>