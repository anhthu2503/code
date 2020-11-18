<?php
if(file_exists('./model/database.php')){
    include_once('./model/database.php');
}
else{
    include_once('../model/database.php');
}

class xl_nha_xuat_ban extends database{

    function xl_nha_xuat_ban(){
        parent::database();
    }

    function ds_nha_xuat_ban(){

        $string_sql = "SELECT *
                    FROM bs_nha_xuat_ban";
        $this->setSQL($string_sql);
        $this->execute();
        $result = $this->loadAllRow();
        return $result;
    }
}
?>