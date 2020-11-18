<?php
if(isset($_POST['dieu_kien_cap_nhat_gio_hang'])){
    $dieu_kien_cap_nhat_gio_hang = $_POST['dieu_kien_cap_nhat_gio_hang'];
}
if(!isset($mang_gio_hang)){
    if(isset($_SESSION['gio_hang'])){
        $mang_gio_hang = $_SESSION['gio_hang'];
    }
    else{
        $mang_gio_hang = [];
    }
}
?>

<form action="" method="POST">

    <table class="table table-striped table-hover table_gio_hang">
        <thead>
            <tr>
                <th>id</th>
                <th>Tên sách</th>
                <th>Hình</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Thành tiền</th>
                <?php
                if($dieu_kien_cap_nhat_gio_hang){
                    ?>
                    <th>Hành động</th>
                    <?php
                }
                else{
                    //do nothing
                }
                ?>
            </tr>
        </thead>

        <tbody>
        <?php
        foreach($mang_gio_hang as $item_gio_hang){
            ?>
            <tr>
                <td><?php echo $item_gio_hang->id; ?></td>
                <td><?php echo $item_gio_hang->ten_sach; ?></td>
                <td>
                    <img src="/Thuzoi/php/SQL/do_an/public/images/sach/<?php echo $item_gio_hang->hinh; ?>" alt="">
                </td>
                <?php
                 if($dieu_kien_cap_nhat_gio_hang){
                    ?>
                    <td>
                    <input type="number" name="so_luong_cap_nhat[<?php echo $item_gio_hang->id; ?>]" value="<?php echo $item_gio_hang->so_luong; ?>"
                        id="so_luong_<?php echo $item_gio_hang->id; ?>" class="form_control" min="1" step ="1" title="">
                    </td>
                    <td><?php echo $item_gio_hang->don_gia; ?></td>
                    <td><?php echo $item_gio_hang->so_luong * $item_gio_hang->don_gia; ?></td>
                    <td>
                        <a href="/Thuzoi/php/SQL/do_an/?page=gio-hang&id_xoa=<?php echo $item_gio_hang->id; ?>">
                            <button type="button" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true">
                                </span>Xoá
                            </button>
                        </a>
                    </td>
                    <?php
                }
                else{
                    ?>
                    <td>
                        <?php echo $item_gio_hang->so_luong; ?>
                    </td>
                    <td><?php echo $item_gio_hang->don_gia; ?></td>
                    <td><?php echo $item_gio_hang->so_luong * $item_gio_hang->don_gia; ?></td>
                    <?php
                }
                ?>

            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>

    <div class="include_button">
        <?php
        if($dieu_kien_cap_nhat_gio_hang){
            ?>
            <input type="submit" name="btn_cap_nhat" class="btn btn-primary" value="Cập nhật giỏ hàng" />
            <button type="button" class="btn btn-danger">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Xoá giỏ hàng
            </button>

            <a href="/Thuzoi/php/SQL/do_an/?page=thanh-toan" class="btn btn-success">
                <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
                Thanh Toán
            </a>
            <?php
        }
        else{
            ?>
            <a href="/Thuzoi/php/SQL/do_an/?page=gio-hang" class="btn btn-info">
                <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                Quay lại trang giỏ hàng
            </a>
            <?php
        }
        ?>

    </div>

</form>