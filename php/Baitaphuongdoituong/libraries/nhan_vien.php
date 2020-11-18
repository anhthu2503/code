<?php
    class nhan_vien{
        public $ma_nha_vien,$ho_ten_nhan_vien,$ngay_sinh,$he_so_luong,$so_con;
        function nhan_vien($ma_nha_vien,$ho_ten_nhan_vien,$ngay_sinh,$he_so_luong,$so_con){
            $this ->ma_nhan_vien = $ma_nha_vien;
            $this ->ho_ten_nhan_vien = $ho_ten_nhan_vien;
            $this ->ngay_sinh = $ngay_sinh;
            $this ->he_so_luong = $he_so_luong;
            $this ->so_con = $so_con;
        }
        function tien_luong(){
           return $this ->he_so_luong * 5000000;
        }

        function tien_tro_cap(){

        }

        function tien_thuong(){
        }
    }
    class nhan_vien_van_phong extends nhan_vien {
        public $so_ngay_vang;
        public $dinh_muc_vang = 1;
        public $dinh_gia_phat = 250000;
        function nhan_vien_van_phong($ma_nha_vien,$ho_ten_nhan_vien,$ngay_sinh,$he_so_luong,$so_con,$so_ngay_vang){//phuong thuc khoi tao (ten ham va ten class giong nhau)
            parent:: nhan_vien($ma_nha_vien,$ho_ten_nhan_vien,$ngay_sinh,$he_so_luong,$so_con,$so_ngay_vang);
            $this->so_ngay_vang = $so_ngay_vang;
        }

        function tien_luong(){
            return parent::tien_luong() - ($this->so_ngay_vang - $this->dinh_muc_vang) * $this->dinh_gia_phat;
        }
    }
    class nhan_vien_san_xuat extends nhan_vien {

    }
?>