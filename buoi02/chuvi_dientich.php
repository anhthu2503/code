<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tính chu vi và diện tích hình chữ nhật</title>
    <style>
        table {
            background-color: rgb(204, 230, 238);
        }
        caption {
            font-weight: bold;
            padding:  15px;
            font-size: 20px;
        }
        .title {
            background-color: rgb(191, 200, 218);
            font-weight: bold;
        }
        .button {
            background-color: rgb(168, 169, 223);
            text-align: center;
        }
        .tinh {
            padding: 10px 20px;
            font-size: 15px;
            background-color: rgb(228, 53, 53);
            color: white;
        }
    </style>
</head>
<body>
    <?php
        if (isset($_POST["tinh"])) {
            $cd = $_POST["chieudai"];
            $cr = $_POST["Chieurong"];
            $cv = $_POST["Chuvi"];
            $dt = $_POST["Dientich"];
            if (empty($cd) && empty($cr))
            {
                $kq = "phai nhap du lieu";
            }
            else
                if (is_numeric($cd) && is_numeric($cr))
                {
                    $kq = ($cd + $cr)*2  ;
                }
                else
                    $kq  ="phai nhap so vao" ;

            if (empty($cd) && empty($cr))
            {
                $kq1 = "phai nhap du lieu";
            }
            else
                if (is_numeric($cd) && is_numeric($cr))
                {
                    $kq1 = $cd * $cr  ;
                }
                else
                    $kq1  ="phai nhap so vao" ;
        }
        else {
            $cd ="";
            $cr ="";
            $cv ="";
            $dt ="";
            $kq ="";
            $kq1 = "";

        }
    ?>
        <form name="tinh cv & dt" method="post" action="">
                <table border="1" width="500" cellpadding="5px" align="center" cellspacing="0">
                    <caption>CHU VI VA DIEN TICH HINH CHU NHAT</caption>
                    <tr>
                        <td class="title">Chieu dai</td>
                        <td><input type ="text" name="chieudai" value="<?php $cd; echo $cd?>"></td>
                    </tr>
                    <tr>
                        <td class="title" >Chieu rong</td>
                        <td><input type ="text" name="Chieurong" value="<?php $cr; echo $cr?>"></td>
                    </tr>
                    <tr>
                        <td class="title">Chu vi</td>
                        <td><input type ="text" name="Chuvi" value="<?php $cv; echo $kq?>" readonly></td>
                    </tr>
                    <tr>
                        <td class="title">Dien tich</td>
                        <td><input type ="text" name="Dientich" value="<?php $dt; echo $kq1?>" readonly></td>
                    </tr>
                    <tr>
                        <td class="button" colspan="2"><input class="tinh" type="submit" name="tinh" value="<?php $kq && $kq1;?> Tinh"></td>
                    </tr>

            </form>
</body>
</html>