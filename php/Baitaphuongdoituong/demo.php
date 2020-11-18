 <?php
    include('./libraries/nhan_vien.php');//ko bao loi
    //require();bao loi va ko chay chuong trinh
    $nhan_vien_van_phong = new nhan_vien_van_phong('nv1','Huynh Anh','26-2001',1.7,0,2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <div class="container">
        <?php
         echo '<pre>',print_r($nhan_vien_van_phong),'</pre>';
         echo $nhan_vien_van_phong ->tien_luong();
         ?>
    </div>
</body>
</html> 