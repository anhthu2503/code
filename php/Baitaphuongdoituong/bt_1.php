<?php
    class phep_tinh{
        private $so_thu_nhat,$so_thu_hai;
        function phep_tinh($gia_tri_1,$gia_tri_2){
            $this->so_thu_nhat = $gia_tri_1;
            $this->so_thu_hai = $gia_tri_2;
        }

        function so_1(){
            return $this->so_thu_nhat;
        }

        function so_2(){
            return $this->so_thu_hai;
        }

        function ket_qua(){
            return $ket_qua;
        }

        function tinh_tong(){
            return $this->so_thu_nhat + $this->so_thu_hai;
        }

        function tinh_hieu(){
            return $this->so_thu_nhat - $this->so_thu_hai;
        }
        function tinh_tich(){
            return $this->so_thu_nhat * $this->so_thu_hai;
        }
        function tinh_thuong(){
            return $this->so_thu_nhat / $this->so_thu_hai;
        }

    }
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
        <form action="" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <legend>PHÉP TÍNH</legend>
                </div>
                <div class="form-group">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        Số thứ nhất:
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <input type="number" name="so_1" id="input" class="form-control" value="<?php if(isset($_POST['so_1'])) echo $_POST['so_1']?>" required="required" pattern="" title="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        Số thứ hai:
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <input type="number" name="so_2" id="input" class="form-control" value="<?php if(isset($_POST['so_2'])) echo $_POST['so_2']?>" required="required" pattern="" title="">
                    </div>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="phep_tinh" id="cong" value="+" <?php if($_POST['phep_tinh'] == 'cong') echo 'checked';?>>
                        Cộng
                    </label>
                    <label>
                        <input type="radio" name="phep_tinh" id="tru" value="-" <?php if($_POST['phep_tinh'] == 'tru') echo 'checked';?>>
                        Trừ
                    </label>
                    <label>
                        <input type="radio" name="phep_tinh" id="nhan" value="*" <?php if($_POST['phep_tinh'] == 'nhan') echo 'checked';?>>
                        Nhân
                    </label>
                    <label>
                        <input type="radio" name="phep_tinh" id="chia" value="/" <?php if($_POST['phep_tinh'] == 'chia') echo 'checked';?>>
                        Chia
                    </label>
                    <button type="submit" class="btn btn-primary">Tính</button>
                </div>
            </div>
        </form>
        <div class="container">
            <legend>KẾT QUẢ</legend>
            <?php
                if(isset($_POST['so_1']) && isset($_POST['so_2'])){
                    $tinh = new phep_tinh($_POST['so_1'],$_POST['so_2']);
                    $string = $tinh->so_1().''.$_POST['phep_tinh'].''.$tinh->so_2(). '=';
                    switch ($_POST['phep_tinh']) {
                        case '+':
                            echo $string.$tinh->tinh_tong();
                            break;
                        case '-':
                            echo $string.$tinh->tinh_hieu();
                            break;
                        case '*':
                            echo $string.$tinh->tinh_tich();
                            break;
                        case '/':
                            if($_POST['so_2'] !=0){
                                echo $string.$tinh->tinh_thuong();
                            }
                            else{
                                echo "Số thứ hai phải khác 0";
                            }
                        break;
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>