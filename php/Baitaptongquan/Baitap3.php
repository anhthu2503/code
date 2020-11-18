<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai tập 3</title>
</head>
<style>
    .color-input{
        background-color: #ffcccc;
    }
</style>
<body>
<?php
    if(isset($_POST["ban_kinh"]))
    {
        $ban_kinh=$_POST["ban_kinh"];
        define("PI",3.14);
        // cách khai báo giá trị mặc định ban đầu
        $dien_tich=PI*pow($ban_kinh,2);
        //pi nhan ban kinh binh phuong
        // pow = tính số mũ
        $chu_vi=2*PI*$ban_kinh;
}
?>
    <form method="post" action="Baitap3.php">
        <table width="400" align="center" bgcolor="#ffebca">
            <tr>
                <td colspan="2" align="center" bgcolor="#ffcc66">DIỆN TÍCH và CHU VI HÌNH TRÒN</td>
            </tr>
            <tr>
                <td>Bán kính:</td>
                <td><input type="number" name="ban_kinh" value="<?php echo $ban_kinh?>"></td>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <td><input class="color-input" type="number" name="dien_tich" value="<?php echo $dien_tich?>"></td>
            </tr>
            <tr>
                <td>Chu vi:</td>
                <td><input class="color-input" type="number" name="chu_vi" value="<?php echo $chu_vi?>"></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input  type="submit" value="Tính">
            </tr>
        </table>
    </form>
</body>
</html>