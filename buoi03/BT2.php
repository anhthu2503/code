<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tính nam am lich</title>
    <style type="text/css">
        input.kq {
            background-color: #f2f5a9;
        }
    </style>
</head>
<body>
    <?php
        if (isset($_POST["tinh"])) //kt xem cai nut nay co dc dua len server chua
        {
            $dl = $_POST["dl"];
            $can = $dl % 10;
            $chi = $dl % 12;
                        switch($can)
                        {
                            case 0:$al = "Canh"; break;
                            case 1:$al = "Tan"; break;
                            case 2:$al = "Nham"; break;
                            case 3:$al = "Quy"; break;
                            case 4:$al = "Giap"; break;
                            case 5:$al = "At"; break;
                            case 6:$al = "Binh"; break;
                            case 7:$al = "Dinh"; break;
                            case 8:$al = "Mau"; break;
                            case 9:$al = "ky"; break;
                        }
                        switch($chi)
                        {
                            case 0:$al = $al."Than"; break;
                            case 1:$al = $al."Dau"; break;
                            case 2:$al = $al."Tuat"; break;
                            case 3:$al = $al."Hoi"; break;
                            case 4:$al = $al."Ty"; break;
                            case 5:$al =$al."Suu"; break;
                            case 6:$al = $al."Dan"; break;
                            case 7:$al = $al."Meo"; break;
                            case 8:$al = $al."Thin"; break;
                            case 9:$al = $al."Ty"; break;
                            case 10:$al = $al."Ngo"; break;
                            case 11:$al = $al."Mui"; break;
                        }
                    }
        else
        {
            $dl = "";
            $al = "";
            $kq = "";
        }
    ?>
    <form name="sonngay" method="post" >
        <table width="300" align="center" bgcolor="#f5a9f2">
            <tr bgcolor="#fa5858">
                <td colspan="2" align="center">Tính nam am lich</td>
            </tr>
            <tr>
                <td width="130" align = "center">Nam duong lich</td>
                <td width = "130">sfdg</td>
                <td width="130">Nam am lich</td>
            </tr>
            <tr>
                <td align="center">
                        <td>
                                <input type="text" name="dl" value="<?php echo $dl;?>" size="6">
                        </td>
                        <td>
                                <input class = "kq" type="submit" name="tinh" value=" =>" size="6">
                        </td>
                        <td>
                                <input  class = "kq" type="submit" name="al" value="<?php echo $al;?>" size="18" readonly>
                        </td>

                </td>
            </tr>
        </table>
    </form>
</body>
</html>