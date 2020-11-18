<?php
if(file_exists('./model/database.php')){
    include_once('./model/database.php');
}
else{
    include_once('../model/database.php');
}

class xl_loai_sach extends database{

    function xl_loai_sach(){
        parent::database();
    }

    function ds_loai_sach_theo_id_cha($id_loai_cha = 0){

        $string_sql = "SELECT ls.*
                        FROM bs_loai_sach ls
                        WHERE id_loai_cha = " . $id_loai_cha;
        $this->setSQL($string_sql);
        $this->execute();
        $result = $this->loadAllRow();
        return $result;

    }

    //dùng đệ quy để in danh sách con( load  danh sach con )
    function ds_tat_ca_loai_sach_theo_cha(){

        $ds_loai_cha = $this->ds_loai_sach_theo_id_cha();

        $this->de_quy_lay_toan_bo_con($ds_loai_cha);

        return $ds_loai_cha;
    }

    function de_quy_lay_toan_bo_con(&$ds_loai_cha){

        foreach($ds_loai_cha as $loai_cha){
            $ds_loai_con = $this->ds_loai_sach_theo_id_cha($loai_cha->id);

            if(count($ds_loai_con) > 0){
                $this->de_quy_lay_toan_bo_con($ds_loai_con);
            }

            $loai_cha->ds_con = $ds_loai_con;
        }

    }

    //dùng đệ quy trên giao diện
    function print_ds_tat_ca_loai_sach_theo_cha($ds_loai_cha){
        foreach($ds_loai_cha as $item_loai_cha){
            ?>
            <li class="dropdown-submenu">
                <a href="/Thuzoi/php/SQL/do_an/?page=loai-sach&id_loai_sach=<?php echo $item_loai_cha->id; ?>"><?php echo $item_loai_cha->ten_loai_sach; ?></a>
                <?php $this->print_de_quy_loai_con($item_loai_cha); ?>
            </li>
            <?php
        }
    }

    function print_de_quy_loai_con($item_loai_cha){
        if(count($item_loai_cha->ds_con)){
            ?>
            <ul class="dropdown-menu hidden-xs hidden-sm">
                <?php
                foreach($item_loai_cha->ds_con as $loai_sach_con){
                    ?>
                    <li class="dropdown-submenu">
                        <a href="/Thuzoi/php/SQL/do_an/?page=loai-sach&id_loai_sach=<?php echo $loai_sach_con->id; ?>"><?php echo $loai_sach_con->ten_loai_sach; ?></a>
                        <?php $this->print_de_quy_loai_con($loai_sach_con); ?>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <?php
        }
    }
}
?>