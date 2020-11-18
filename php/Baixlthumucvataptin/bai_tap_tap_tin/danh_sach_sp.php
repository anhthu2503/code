<?php
    include('../model/san_pham.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Tên hàng</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(file_exists('./data_sach/noi_dung_sap_pham.txt')){
                        $f = fopen('./data_sach/noi_dung_sap_pham.txt', 'r') or exit("Khong the mo file");
                        while(!feof($f)){
                            $dong = fgets($f);

                            if($dong){
                                $thong_tin_san_pham = new san_pham();
                                $thong_tin_san_pham->chuyen_dong_thanh_thong_tin($dong);
                                $thong_tin_san_pham->in_san_pham();
                            }
                        }
                    }
                ?>
                <tr>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>