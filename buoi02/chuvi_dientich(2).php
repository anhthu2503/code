<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST["tinh"])) {
            $cd = $_POST["chieudai"];
            $cr = $_POST["Chieurong"];
            $cv = $_POST["Chuvi"];
            $dt = $_POST["Dientich"];
            if (empty($cd) && empty($cr))
                $kq = "phai nhap du lieu";
            else 
                if (is_numeric($cd) && is_numeric($cr))
                    $kq = $cd * $cr;
        }
        else {
            $cd ="";
            $cr ="";
            $cv ="";
            $dt ="";
            $kq ="";

        }
    ?>
        <form name="tinh cv & dt" method="post" action="">
                <table border="1" width="500" cellpadding="5px" align="center">
                    <caption>CHU VI VA DIEN TICH HINH CHU NHAT</caption>
                    <tr>
                        <td>chieu dai</td>
                        <td><input type ="text" name="chieudai" value="<?php $cd;?>"></td>
                    </tr>
                    <tr>
                        <td>Chieu rong</td>
                        <td><input type ="text" name="Chieurong" value="<?php $cr;?>"></td>
                    </tr>
                    <tr>
                        <td>Chu vi</td>
                        <td><input type ="text" name="Chuvi" value="<?php $cv;?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Dien tich</td>
                        <td><input type ="text" name="Dientich" value="<?php $dt;?>" readonly></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="tinh" value="Tinh"></td>
                    </tr>
                </table>
            </form>
</body>
</html>