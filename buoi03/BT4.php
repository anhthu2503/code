<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        input.do {
            background-color: #f5a9a9;
        }
        input.cam , td.cam{
            background-color: #ffbff0;
        }
        span {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        if (isset($_POST["tinh"]))
        {
            $bd = $_POST["batdau"];
            $kt = $_POST["ketthuc"];
            if(empty($bd) && empty($kt))
            {
                $tb = "Chua nhap du lieu";
                $tgcs=""; $tics= ""; $tgsc="";$tgsl="";
            }
            else
                if (is_numeric($bd) && is_numeric($kt))
                {
                    $tb = "";
                    $tgcs=0; $tics=1; $tgsc=0; $tgsl=0;
                    for($i=$bd; $i <= $kt; $i++)
                    {
                        $tgcs = $tgcs + $i;
                        $tics = $tics * $i;
                        if($i % 2 == 0)
                            $tgsc = $tgsc +$i;
                        else
                            $tgsl = $tgsl + $i;
                    }
                }
                else
                    $tb = "Phai nhap so nguyen duong";
                    $tgcs=""; $tics= ""; $tgsc="";$tgsl="";

        }
        else
        {
            $bd=""; $kt=""; $tb=""; $tgcs=""; $tics=""; $tgsc=""; $tgsl="";

        }
    ?>
    <form name="tinh toan" method="post" action="">
        <table width= "500" align="center" bgcolor="#f6e3c3">
            <tr>
                <tr>
                    <td colspan="2" class="cam" align="center">Tinh toan tren day so</td>
                </tr>
                <td width="200">Gioi han cua day so</td>
                <td width="300">
                    So bat dau:<input type="text" name="batdau" value="<?php echo $bd;?>" size="4">
                    So ket thuc:<input type="text" name="ketthuc" value="<?php echo $kt;?>" size="4">
                </td>
            </tr>
            <tr>
                <td colspan="2">Ket qua<span><?php echo $tb ?></span></td>
            </tr>
            <tr>
                <td>Tong cac so</td>
                <td><input  class= "do"type="text" name="tgcs" value="<?php echo $tgcs;?>" readonly></td>
            </tr>
            <tr>
                <td>Tich cac so</td>
                <td><input  class= "do"type="text" name="tics" value="<?php echo $tics;?>" readonly></td>
            </tr>
            <tr>
                    <td>Tong cac so chan</td>
                    <td><input  class= "do"type="text" name="tgsc" value="<?php echo $tgsc;?>" readonly></td>
            </tr>
            <tr>
                    <td>Tong cac so le</td>
                    <td><input  class= "do"type="text" name="tgsl" value="<?php echo $tgsl;?>" readonly></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="tinh" class="cam" value="Tinh toan">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>