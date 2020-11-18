<?php
    //mo file neu file hop le, nguoc clai thi thong bao loi
    $f = fopen("hoa.text", "a+") or exit("khong the mo file");
    while(!feof($f)){
        echo fgets($f);
    }
    //doc file theo dong
    //$chuoi_file = readfile("hoa.text");
    //echo str_replace('<br>',$chuoi_file);

    //ghi file
    $noi_dung ="Thu ghi file";
    fwrite($f,$noi_dung);
    fclose($f);
?>