<!doctype html>
<html>
<head>
    <title>Bài Tập 04</title>
    <meta charset="utf-8">
    <style type="text/css">
         input.do {background-color:#F5A9A9;}
         input.cam, td.cam {background-color:#FFBF00;}
         span {color:red;}
    </style>
</head>
<body>
<?php
    if (isset($_POST["tinh"]))
    {
       $bd = $_POST["batdau"];
       $kt = $_POST["ketthuc"];

       if (empty($bd) && empty($kt))
       {
           $tb = "Chưa nhập dữ liệu em ơi !!";
           $tgcs=""; $tics=""; $tgsc=""; $tgsl="";
       }
       else
           if (is_numeric($bd) && is_numeric($kt))
           {
             $tb="";

             $tgcs=0; $tics=1; $tgsc=0; $tgsl=0;
             for($i=$bd; $i<=$kt; $i++)
             {
                $tgcs = $tgcs+ $i;
                $tics = $tics * $i;
                if ($i % 2 == 0)
                   $tgsc = $tgsc + $i;
                else
                   $tgsl = $tgsl + $i;
             }
           }
           else
           {
              $tb="Phải nhập số nguyên dương";
		 $tgcs=""; $tics=""; $tgsc=""; $tgsl="";
           }
    }
    else
    {
       $bd=""; $kt=""; $tb=""; $tgcs=""; $tics=""; $tgsc=""; $tgsl="";
    }
?>
<form name="tinhtoan" method="post" action="">
    <table width="500" align="center" bgcolor="#F6E3CE">
        <tr>
             <td colspan="2" align="center" class="cam">
                  TÍNH TOÁN TRÊN DÃY SỐ
             </td>
        </tr>
        <tr>
           <td width="150">Giới hạn của dãy số</td>
           <td width="350" bgcolor="white">
               Số Bắt Đầu : <Input type="text" name="batdau" value="<?php echo $bd; ?>" size="4">
               Số Kết thúc: <Input type="text" name="ketthuc" value="<?php echo $kt; ?>" size="4">
           </td>
        </tr>
        <tr>
           <td colspan="2">Kết Quả : <span><?php echo $tb; ?></span></td>
        </tr>
        <tr>
            <td>Tổng Các Số:</td>
            <td><input type="text" name="tgcs" value="<?php echo $tgcs; ?>" readonly class="do"></td>
        </tr>
        <tr>
            <td>Tích Các Số:</td>
            <td><input type="text" name="tics" value="<?php echo $tics; ?>" readonly class="do"></td>
        </tr>
        <tr>
            <td>Tổng Các Số Chẳn:</td>
            <td><input type="text" name="tgsc" value="<?php echo $tgsc; ?>" readonly class="do"></td>
        </tr>
        <tr>
            <td>Tổng Các Số Lẻ:</td>
            <td><input type="text" name="tgsl" value="<?php echo $tgsl; ?>" readonly class="do"></td>
        </tr>
        <tr>
             <td colspan="2" align="center">
                  <input type="submit" name="tinh" Value=" Tính Toán " class="cam">
             </td>
        </tr>
    </table>
</form>
</body>
</html>