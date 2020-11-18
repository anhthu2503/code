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
            $name = $_POST["name"];
            $csc = $_POST["csc"];
            $csm = $_POST["csm"];
            $dg = $_POST["dg"];
            if (empty($name) && empty($csc) && empty($csm) && empty($dg))
            {
                $kq = "phai nhap du lieu" ;
            }
            else
                if (is_numeric($csc) && is_numeric($csm) && is_numeric($dg) )
                {
                    $kq = ($csm - $csc)* $dg;

                }
                else
                    $kq  ="phải nhập só vào ";
        }
        else {
            $name ="";
            $csc ="";
            $csm ="";
            $dg ="";
            $kq ="";

        }
    ?>
    <form name="tinh tien dien" method="post" action="">
        <table border="0" width="400" cellpadding="5px" align="center" cellspacing="0">
            <tr class="title">
                <th colspan="2"><i>THANH TOÁN TIỀN ĐIỆN</i></th>
            </tr>
            <tr class="content">
                <td class="content1">Tên chủ hộ:</td>
                <td><input type ="text" name="name" value="<?php $name; echo $name?>"></td>
            </tr>
            <tr class="content">
                <td class="content1">Chỉ số cũ:</td>
                <td><input type ="text" name="csc" value="<?php $csc; echo $csc?>" >(Kw)</td>
            </tr>
            <tr class="content">
                <td class="content1">Chỉ số mới:</td>
                <td><input type ="text" name="csm" value="<?php $csm; echo $csm?>" >(Kw)</td>
            </tr>
            <tr class="content">
                <td class="content1">Đơn giá:</td>
                <td><input type ="text" name="dg" value="<?php $dg; echo $dg?>" >(VNĐ)</td>
            </tr>
            <tr class="content">
                <td class="content1">Số tiền thanh toán:</td>
                <td><input type ="text" name="st" value="<?php $kq; echo $kq?>" readonly>(VNĐ)</td>
            </tr>
            <tr class="button">
                <td colspan="2">
                    <input type="submit" name="tinh" value="Tính <?php $kq; ?>">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>