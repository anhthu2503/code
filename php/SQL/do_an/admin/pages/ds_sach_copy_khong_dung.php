<?php
include_once('../model/xl_sach.php');

$xl_sach = new xl_sach();

 $so_sach_tren_trang = 10;

    // $db = new PDO('mysql:host=localhost;dbname=ban_sach_online_db', 'root', '');

    // $db->query("set names utf8");

    // $SQL_query = "SELECT * FROM bs_sach";

    // $statement = $db->prepare($SQL_query);
    // //PDO::prepare — Chuẩn bị một câu lệnh để thực thi và trả về một đối tượng câu lệnh
    // $statement->execute();
    // $ds_sach = $statement->fetchALL(PDO::FETCH_OBJ);

    // //cách 1:
    // // if(isset($_GET['trang'])){$ds_sach = $statement->fetchALL(PDO::FETCH_OBJ);
    // //     $trang_hien_tai = $_GET['trang'];
    // // }
    // // else{
    // //     $trang_hien_tai = 0;
    // // }

    // //cách 2:
    $trang_hien_tai = (isset($_GET['trang']))?$_GET['trang']:0;
    //PDO::FETCH_OBJ - Trả về một mảng chứa tất cả các hàng của tập hợp kết quả

    //lay danh sach theo trang

    $ds_sach_hien_thi = $xl_sach->ds_sach_phan_trang($trang_hien_tai, $so_sach_tren_trang);

    $so_luong_sach = ($xl_sach->so_luong_sach())->so_sach;

    echo $so_luong_sach;

    $so_trang = ceil($so_luong_sach/$so_sach_tren_trang);

    ?>
    <script type="text/javascript" src="./js/simple_pagination.js"></script>
    <link rel="stylesheet" href="./css/simple_pagination.css">

    <div class="title_page">
        Danh sach sach
    </div>
    <?php
    echo $so_trang;
    ?>
    <?php
    // $SQL_query = "SELECT * FROM bs_sach LIMIT " . $trang_hien_tai * $so_sach_tren_trang . ", $so_sach_tren_trang";

    // echo $SQL_query;

    // $statement = $db->prepare($SQL_query);
    // $statement->execute();

    // $ds_sach_hien_thi = $statement->fetchALL(PDO::FETCH_OBJ);

    // $so_luong_sach = count($ds_sach);
    // $so_trang = ceil($so_luong_sach/$so_sach_tren_trang);
?>

        <!--Cách 1 dùng php phân trang-->

        <!-- <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sách</th>
                    <th>Đơn giá</th>
                    <th>Giá bìa</th>
                    <th>Chọn</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    //foreach($ds_sach as $item_sach){
                    foreach($ds_sach_hien_thi as $item_sach){
                ?>
                <tr>
                    <td><?php echo $item_sach->id;?></td>
                    <td><?php echo $item_sach->ten_sach;?></td>
                    <td><?php echo $item_sach->don_gia;?></td>
                    <td><?php echo $item_sach->gia_bia;?></td>
                    <td>
                        <input type="checkbox" name='chon_sach[]' value="<?php echo $item_sach->id;?>">
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <div class="phan_trang">
            <ul class="pagination">
                <?php
                    for($i = 0;$i<$so_trang;$i++){
                ?>
                <li><a href="<?php echo $_SERVER['REQUEST_URI'];?>&trang=<?php echo $i;?>"><?php echo $i + 1;?></a></li>
                <?php
                    }
                ?>
            </ul>
        </div> -->

        <!--Cách 2 dùng js phân trang-->

        <!-- <table id="table_sach" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sách</th>
                    <th>Đơn giá</th>
                    <th>Giá bìa</th>
                    <th>Chọn</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($ds_sach as $item_sach){
                ?>
                <tr>
                    <td><?php echo $item_sach->id;?></td>
                    <td><?php echo $item_sach->ten_sach;?></td>
                    <td><?php echo $item_sach->don_gia;?></td>
                    <td><?php echo $item_sach->gia_bia;?></td>
                    <td>
                        <input type="checkbox" name='chon_sach[]' value="<?php echo $item_sach->id;?>">
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <script>
            $(document).ready( function () {
            $('#table_sach').DataTable();
            } );
        </script> -->

        <!--cách 3 dùng cả php và js-->

    <div class="include_button">
        <a href="/Thuzoi/php/SQL/do_an/admin/?page=them-sach">
            <button type="button" class="btn btn-info">Thêm Sách Mới</button>
        </a>
    </div>

    <table id="table_sach" class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sách</th>
                <th>Đơn giá</th>
                <th>Giá bìa</th>
                <th>Chọn</th>
            </tr>
        </thead>
        <tbody id="data_show">
        </tbody>
    </table>

    <div id="pagination" class="pagination"></div>

    <script>
    // $(document).ready( function () {
    //     $('#table_sach').DataTable();
    // } );

    function function_build_html(data_list){
        var string_html = '';

        for(var i = 0; i < data_list.length; i++){
            string_html += `
            <tr>
                <td>${data_list[i].id}</td>
                <td>
                    <a href="/Thuzoi/php/SQL/do_an/admin/?page=cap-nhat-sach&id_sach=${data_list[i].id}">
                    ${data_list[i].ten_sach}
                    </a>
                </td>
                <td>${data_list[i].don_gia}</td>
                <td>${data_list[i].gia_bia}</td>
                <td>
                    <input type="checkbox" name="chon_sach[]" value="${data_list[i].gia_bia}">
                </td>
            </tr>
            `
        }

        console.log(string_html);

        $('#data_show').html(string_html);
    }


    function get_ds_sach_theo_trang(pageNumber){
        $.get('http://localhost:8181/Thuzoi/php/SQL/do_an/admin/api.php?trang=' + (pageNumber - 1))
            .done((data) => {
                console.log(JSON.parse(data));

                function_build_html(JSON.parse(data));
            })
            .fail((err) => {
                console.log(err);
            })
    }

    $(function() {
        $('#pagination').pagination({
            items: <?php echo $so_luong_sach; ?>,
            itemsOnPage: 10,
            cssStyle: 'light-theme',
            onPageClick: function(pageNumber) {
                console.log(pageNumber - 1);
                // // We need to show and hide `tr`s appropriately.
                // var showFrom = perPage * (pageNumber - 1);
                // var showTo = showFrom + perPage;

                // // We'll first hide everything...
                // items.hide()
                //     // ... and then only show the appropriate rows.
                //     .slice(showFrom, showTo).show();

                get_ds_sach_theo_trang(pageNumber);

            }
        });

        get_ds_sach_theo_trang(1);
    });
    </script>
</div>
