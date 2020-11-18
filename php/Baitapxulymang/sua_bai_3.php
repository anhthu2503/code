<?php
    $nam_can_chi =' ';
    $mang_can = [Canh	Tân	Nhâm	Quý	Giáp	Ất	Bính	Đinh	Mậu	Kỷ  ];
    $mang_chi = [Thân	Dậu	Tuất	HợiTý	Sửu	Dần	Mão	Thìn	Tỵ	Ngọ	Mùi	];
    //tải hình 12 con giáp
    //b1 in hình bằng tọa độ
    //b2 chiều rộng/cao chia 6
    //b4 sau khi qua css chinh tao mang hinh =[dua so vao day];
    if(isset($_POST["duong_lich"])){
        $index_can = $_POST["nam_sinh"] % 10;
        $index_chi = $_POST["nam_sinh"] % 12;

        $nam_can_chi = $mang_can[$index_can]." ".$mang_chi[$index_chi];
    }

?>
<!--b3
    tạo div hinh
    qua css .div hinh{
        width: 165.3px;
        hight: 206px;
        overflow: hiden;
    }
    qua hinh kế bên thì nhân đôi
   transform: translate(-165.3px,0);
-->