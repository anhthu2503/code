<?php
include_once('./model/xl_don_hang.php');

$xl_don_hang = new xl_don_hang();

$thong_tin_don_hang = $xl_don_hang->thong_tin_don_hang($_GET['id_don_hang']);

?>
<div class="container don_hang" >
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <div class="thong_tin_user">
            <h4>Thông tin khách hàng:</h4>
            <div class="ho_ten_nguoi_nhan">
                Họ tên: <?php echo $thong_tin_don_hang->ho_ten_nguoi_nhan; ?>
            </div>
            <div class="dia_chi_nguoi_nhan">
                Địa chỉ: <?php echo $thong_tin_don_hang->dia_chi_nguoi_nhan; ?>
            </div>
            <div class="email_nguoi_nhan">
                Email: <?php echo $thong_tin_don_hang->email_nguoi_nhan; ?>
            </div>
            <div class="so_dien_thoai_nguoi_nhan">
                Sđt: <?php echo $thong_tin_don_hang->so_dien_thoai_nguoi_nhan; ?>
            </div>
        </div>
    </div>

    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <h4>Thông tin sản phẩm:</h4>
        <?php
        print_chi_tiet_don_hang($thong_tin_don_hang->ds_chi_tiet_don_hang);
        ?>
    </div>
</div>