<?php
    $tong =0;
    $so_lon_nhat = '';
    $so_nho_nhat = '';
    $mang_pt = '';
    $mang_phat_sinh = '';
    if(isset($_POST["so_phan_tu"])){

        if($_POST["so_phan_tu"] > 0){
        for($i=0;$i<$_POST;$i++){
            $phat_sinh= rand(1,100);
            $mang_phat_sinh[] = $phat_sinh;
            if($so_lon_nhat<$phat_sinh){
                $so_lon_nhat = $phat_sinh;
            }
            if($so_lon_nhat>$phat_sinh){
                $so_nho_nhat = $phat_sinh;
            }
            if($i == 0){
                $so_nho_nhat = $phat_sinh;
            }
            $tong += $phat_sinh;
        }
        }
    }
?>