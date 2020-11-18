<?php
if(file_exists('./model/database.php')){
    include_once('./model/database.php');
}
else{
    include_once('../model/database.php');
}

class xl_tac_gia extends database{
    function xl_tac_gia(){
        parent::database();
    }

    function ds_tac_gia(){

        $string_sql = "SELECT *
        FROM bs_tac_gia";
        $this->setSQL($string_sql);
        $this->execute();
        $result = $this->loadAllRow();
        return $result;
    }
}
?>