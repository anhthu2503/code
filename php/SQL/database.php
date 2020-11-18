<?php
    print_r(PDO::getAvailableDrivers());

    $db = new PDO('mysql:host=localhost;dbname=ban_sach_online_db','root','');
    // $sql = "INSERT INTO 'bs_menu'('id','tieu_de','alias','trang_thai','menu_cha') VALUES (NULL, 'test 2','test 2','1','0')";
    // $count = $db->exec($sql);
    // echo $count;

    $db->query("set names utf8");
    $SQL_query = "SELECT * FROM bs_sach";

    $statement = $db->prepare($SQL_query);
    //PDO::prepare — Chuẩn bị một câu lệnh để thực thi và trả về một đối tượng câu lệnh
    $statement->execute();
    $result = $statement->fetchALL(PDO::FETCH_OBJ);
    //PDO::FETCH_OBJ - Trả về một mảng chứa tất cả các hàng của tập hợp kết quả
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <?php
    //echo '<pre>',print_r($result),'</pre>';
    ?>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Sách</th>
                    <th>Đơn giá</th>
                    <th>Giá bìa</th>
                    <th>Chọn</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php
                            foreach($result as $item_sach){
                                ?>
                                <div class="id">
                                    <?php echo $item_sach->id;
                                        echo "<br>";
                                    ?>
                                </div>
                                <?php
                            }
                        ?>
                    </td>
                    <td>
                        <?php
                            foreach($result as $item_sach){
                                ?>
                                <div class="ten_sach">
                                    <?php echo $item_sach->ten_sach;
                                        echo "<br>";
                                    ?>
                                </div>
                                <?php
                            }
                        ?>
                    </td>
                    <td>
                        <?php
                            foreach($result as $item_sach){
                                ?>
                                <div class="don_gia">
                                    <?php echo $item_sach->don_gia ;
                                        echo " đ" ;
                                        echo "<br>";
                                    ?>
                                </div>
                                <?php
                            }
                        ?>
                    </td>
                    <td>
                        <?php
                            foreach($result as $item_sach){
                                ?>
                                <div class="gia_bia">
                                    <?php echo $item_sach->gia_bia;
                                        echo " đ";
                                        echo "<br>";
                                    ?>
                                </div>
                                <?php
                            }
                        ?>
                    </td>

                    <td>
                        <?php
                            foreach($result as $item_sach){
                                ?>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                        </label>
                                    </div>
                                <?php
                            }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>