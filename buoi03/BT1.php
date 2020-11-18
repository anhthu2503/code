<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tính Số Ngày Trong Tháng</title>
    <style type="text/css">
        input.kq {
            background-color: #f2f5a9;
        }
    </style>
</head>
<body>
    <?php
        if (isset($_POST["nut1"])) //kt xem cai nut nay co dc dua len server chua
        {
            $th = $_POST["thang"];
            $nm =$_POST["nam"];
            if (empty($th) && empty($nm))
            {
                $kq = "Phải nhập dữ liệu tháng/năm";
            }
            else
                if(is_numeric($th) && is_numeric($nm))
                {
                    if ( $nm <= 0) //$th < 1 || $th >12 ||
                    {
                        $kq = "Tháng, năm không hợ lệ";
                    }
                    else 
                    {
                        switch($th)
                        {
                            case 1:
                            case 3:
                            case 5:
                            case 7:
                            case 8:
                            case 10:
                            case 12:
                            $kq = "Tháng $th năm $nm có 31 ngày";
                            break;
                            case 4:case 6:case 9:case 11:
                            $kq = "Tháng $th năm $nm có 30 ngày";
                            break;

                            case 2:
                                if (($nm % 4 == 0 && $Nm % 100 !=0) || ($nm % 400 ==0))
                                    $kq = "Tháng $th năm $nm có 29 ngày";
                                else 
                                    $kq = "Tháng $th năm $nm có 28 ngày";
                            break;
                            default:
                                $kq = "Thang nhap vao khong hop le"
                        }
                    }
                }
                else 
                {
                    $kq = "Phai nhap gia tri so";
                }
        }
        else 
        {
            $th = "";
            $nm = "";
            $kq = "";
        }
    ?>
    <form name="sonngay" method="post" >
        <table width="300" align="center" bgcolor="#f5a9f2">
            <tr bgcolor="#fa5858">
                <td colspan="2" align="center">Tính Số Ngày Trong Tháng</td>
            </tr>
            <tr>
                <td width="100">Thang/Nam</td>
                <td width="200">
                    <input type="text" name="thang" value="<?php echo $th;?>" size="4">
                    /
                    <input type="text" name="nam" value="<?php echo $nm;?>" size="6">

                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="nut1" value="Tinh so ngay">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input  class="kq" type="text" name="ketqua" value="<?php echo $kq;?>" size="20" readonly>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>