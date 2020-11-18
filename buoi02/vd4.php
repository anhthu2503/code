<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input , td {
            font-size: 16pt;
            color: blue;
        }
        table {
            border-collapse: collapse;
        }
        
    </style>
</head>
<body>
    <?php
    if (isset($_POST["tinh"]))
        // if (isset($_POST["hoten"])) $$ isset($_POST["lgng"]) $$ isset($_POST["ngaycong"])
        {
            $ht = $_POST["hoten"];
            $ln = $_POST["lgng"];
            $nc = $_POST["ngaycong"]


            if (empty($ln) && empty($nc)) {
                $lt ="phai nhap du lieu";

            }
            else
                if (is_numeric($ln) && is_numeric($nc))
                    $lt = $ln * $nc;
                else 
                    $lt ="phai nhap so vao";
        }
        else
        {
            $ht ="";
            $ln ="";
            $nc ="";
            $lt = "";
        }
    ?>
    <form name="tinh luong" method="post" action="">
        <table border="1" width="500" cellpadding="5px" align="center">
            <caption>TiNH LUONG NHAN VIEN</caption>
            <tr>
                <td>Ho va ten</td>
                <td><input type ="text" name="hoten" value="<?php $ht;?>"></td>
            </tr>
            <tr>
                <td>Luong 1 ngay</td>
                <td><input type ="text" name="lgng" value="<?php $lt;?>"></td>
            </tr>
            <tr>
                <td>ngay cong</td>
                <td><input type ="text" name="ngaycong" value="<?php $nc;?>"></td>
            </tr>
            <tr>
                <td>Luong thang</td>
                <td><input type ="text" name="lgth" value="" readonly></td>
            </tr>
            <tr><
        </table>
    </form>
</body>
</html>