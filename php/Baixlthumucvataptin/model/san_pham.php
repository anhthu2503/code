<?php
    class san_pham{
        public $ten_hang,$so_luong,$don_gia,$thanh_tien;

        function san_pham($ten_hang ='',$so_luong ='',$don_gia ='',$thanh_tien=''){
            $this->ten_hang = $ten_hang;
            $this->so_luong = $so_luong;
            $this->don_gia = $don_gia;
            $this->thanh_tien = $thanh_tien;
        }

        function luu_san_pham(){
            $f = fopen('../data_sach/noi_dung_san_pham.txt', 'a+') or exit("khong the mo file");
            $noi_dung = $this->ten_hang.'||'.$this->so_luong.'||'.$this->don_gia.;
            fwrite($f,$noi_dung);
            fclose($f);
        }

        function chuyen_dong_thanh_thong_tin($chuoi){
            $ma_thong_tin = explode('||',$chuoi);

            $this->ten_hang = $ma_thong_tin[0];
            $this->so_luong = $ma_thong_tin[1];
            $this->don_gia = $ma_thong_tin[2];
            $this->thanh_tien = $ma_thong_tin[3];
        }

        function thanh_tien(){
            return $this ->so_luong * $this->don_gia;
         }

        function in_san_pham(){
            ?>
            <tr>
                <td>
                    <?php echo $this->ten_hang; ?>
                </td>
                <td>
                    <?php echo $this->so_luong; ?>
                </td>
                <td>
                    <?php echo $this->don_gia; ?>
                </td>
                <td>
                    <?php echo $this->thanh_tien; ?>
                </td>
            </tr>
            <?php
        }
    }
?>