<?php
    class sach{
        public $ma_sach,$ten_sach,$don_gia,$tac_gia,$nha_xuat_ban,$hinh;

        function sach($ma_sach = '',$ten_sach = '',$don_gia = '',$tac_gia = '',$nha_xuat_ban = '',$hinh = ''){
            
            $this->ma_sach = $ma_sach;
            $this->ten_sach = $ten_sach;
            $this->don_gia = $don_gia;
            $this->tac_gia = $tac_gia;
            $this->nha_xuat_ban = $nha_xuat_ban;
            $this->hinh = $hinh;
        }

        function luu_sach(){
            $f = fopen('../data_sach/danh_sach.txt', 'a+') or exit("khong the mo file");
            $noi_dung = $this->ma_sach. '||' .$this->ten_sach. '||' .$this->don_gia. '||'.$this->tac_gia. '||'.$this->nha_xuat_ban. '||' .$this->hinh;
            fwrite($f, $noi_dung);
            fclose($f);
        }

        function chuyen_dong_thanh_thong_tin($chuoi){
            $ma_thong_tin = explode('||', $chuoi);

            $this->ma_sach = $ma_thong_tin[0];
            $this->ten_sach = $ma_thong_tin[1];
            $this->don_gia = $ma_thong_tin[2];
            $this->tac_gia = $ma_thong_tin[3];
            $this->nha_xuat_ban = $ma_thong_tin[4];
            $this->hinh = $ma_thong_tin[5];
        }

        function in_dong_sach(){
            ?>
            <tr>
                <td>
                    <?php echo $this->ma_sach; ?>
                </td>
                <td>
                    <?php echo $this->ten_sach; ?>
                </td>
                <td>
                    <?php echo $this->don_gia; ?>
                </td>
                <td>
                    <?php echo $this->tac_gia; ?>
                </td>
                <td>
                    <?php echo $this->nha_xuat_ban; ?>
                </td>
                <td>
                    <?php echo $this->hinh; ?>
                </td>
            </tr>
            <?php
        }

        function in_menu_sach(){
            ?>
                <div class="item_menu_sach">
                    <a href="?ma_sach<?php   ?>"></a>
                </div>
            <?php
        }

        function in_thong_tin_chi_tiet_sach(){

        }
    }
    ?>