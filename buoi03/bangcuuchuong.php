<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td.xanh {
            background-color: #088A85;
            font-weight: bold;
            color: white;
        }
    </style>
</head>
<body>
    <?php
        if (isset($_POST["thuchien"]))
        {
            $so =$_POST["so"];
                    $kq = "";
                    for ($i = 1; $i <= 10; $i++)
                    {
                        $kq =$kq. $so."x".$i."=".$so*$i ."<br>";
                    }
        }
        else 
        {
            $so = "";
            $kq = "";
        }
    ?>
    <form name="tinh bcc" method="post" accept="">
        <table width= "500" align="center">
            <tr>
                <td class="xanh" colspan="2" align="center">BANG CUU CHUONG</td>
            </tr>
            <tr>
                <td width="100">Cuu chuong:</td>
                <td>
                    <input type="text" name="so" value=""size= "4">
                    <input type="submit" name="thuchien" value="Thuc hien">
                </td>
            </tr>
            <tr>
                <td class="xanh" colspan="2" align="center">KET QUA</td>
            </tr>
            <?php
            if (!empty($kq))
            {
            echo "<tr>";
            echo "<td colspan='2' align='center";
            echo $kq;
            echo "</td>";
            echo "</tr>";
            }
            ?>
        </table>
    </form>
</body>
</html>