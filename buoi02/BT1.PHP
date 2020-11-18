<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
            table {
                background-color: rgb(204, 230, 238);
            }
            .title {
                background-color: #fdcb68;
                color: #944b03;
                font-size: 35px;
                /* font-family: 'Times New Roman', Times, serif; */
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }
            .content {
                background-color: #feebca;
            }
            .content1 {
                width: 150px;;
            }
            .button {
                background-color:#feebca;
                text-align: center;
            }
        </style>
</head>
<body>
    <?php
        if (isset($_POST["tinh"])) {
            $bk = $_POST["bk"];
            $cv = $_POST["cv"];
            $dt = $_POST["dt"];
            if (empty($bk))
            {
                $kqcv = "phai nhap du lieu";
            }
            else
                if (is_numeric($bk) )
                {
                    $kqcv = 3.14*2* $bk;

                }
                else
                    $kqcv  ="phải nhập só vào ô bán kính" ;

            if (empty($bk))
            {
                $kqdt = "phai nhap du lieu";
            }
            else
                if (is_numeric($bk))
                {
                    $kqdt = ($bk)*($bk)*3.14;
                }
                else
                    $kqdt  ="phải nhập só vào ô bán kính" ;
        }
        else {
            $bk ="";
            $cv ="";
            $dt ="";
            $kqcv ="";
            $kqdt = "";

        }
    ?>
    <form name="tinh dt va cv hinh tron" method="post" action="">
                <table border="0" width="400" cellpadding="5px" align="center" cellspacing="0">
                    <tr class="title">
                        <th colspan="2"><i>DIỆN TÍCH và CHU VI HÌNH TRÒN</i></th>
                    </tr>
                    <tr class="content">
                        <td class="content1">Bán kính:</td>
                        <td><input type ="text" name="bk" value="<?php $bk; echo $bk?>"></td>
                    </tr>
                    <tr class="content">
                        <td class="content1">Diện tích:</td>
                        <td><input type ="text" name="dt" value="<?php $dt; echo $kqdt?>" readonly></td>
                    </tr>
                    <tr class="content">
                        <td class="content1">Chu vi:</td>
                        <td><input type ="text" name="cv" value="<?php $cv; echo $kqcv?>" readonly></td>
                    </tr>
                    <tr class="button">
                        <td colspan="2">
                            <input type="submit" name="tinh" value="Tính <?php $kqdt && $kqcv; ?>">
                        </td>
                    </tr>
                </table>
        </form>
</body>
</html>