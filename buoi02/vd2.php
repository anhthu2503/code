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
        if (isset($_POST["hoten"]))
        {
        /* isset: Kt xem tren server co cai ho va ten chua*/
            $ht = $_POST["hoten"];
            if (empty($ht))
            {
                $ht = "Chua nhap ho ten";
            }
        }
        else
        {
            $ht = "";
        }
    ?>
    <form name="chaoban" method="post" action="">
        <table border="1" width= "500" align="center">
            <tr>
                <td>Nhap ho ten:</td>
                <td>
                <input type= "text" name="hoten" value="<?php echo $ht; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="nut1" value="Chao">
                </td>
            </tr>
            <?php
                if ($ht!="" && $ht!="Chua nhap ho ten")
                {
                    echo "<tr>";
                    echo "<td colspan='2' align='center'>Chao ban $ht</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </form>

</body>
</html>