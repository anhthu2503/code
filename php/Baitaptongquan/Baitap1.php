<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai tap 1</title>
    <style>
        table {
            background-color: #ffebca;
        }
        caption {
            background-color: #ffcc66;
            font-size: 20px ;
            color: #99542e;
        }
        .color-input {
            background-color: #ffcccc;
        }
        .button {
            text-align: center;
        }
    </style>
    <?php
        $dai = $_POST["chieudai"];
        $rong = $_POST["chieurong"];
        $dientich = $dai * $rong;
    ?>
</head>
<body>
    <form name="tinh dien tich" method="post" action="Baitap1.php">
        <table width="400" cellpadding="5px" align="center" cellspacing="0">
            <caption>DIỆN TÍCH HÌNH CHỮ NHẬT</caption>
            <tr>
                <td class="title">Chiều dài:</td>
                <td><input type="text" name="chieudai" value="<?php echo $dai?>"></td>
            </tr>
            <tr>
                <td class="title">Chiều rộng:</td>
                <td><input type="text" name="chieurong" value="<?php echo $rong?>"></td>
            </tr>
            <tr>
                <td class="title">Diện tích:</td>
                <td><input class="color-input" type="text" name="dientich" value="<?php echo $dientich?>" readonly="readonly"></td>
            </tr>
            <tr>
                <td class="button" colspan="2"><input class="tinh" type="submit" name="tinh" value="Tính"></td>
            </tr>
        </table>
    </form>
</body>
</html>