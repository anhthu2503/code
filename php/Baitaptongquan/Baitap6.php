<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai tập 6</title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
    if(isset($_POST["so_a"]) && isset($_POST["so_b"]))
    {
        $so_a = $_POST["so_a"];
        $so_b = $_POST["so_b"];
        if($so_a > $so_b)
        {
            $so_lon = $so_a;
        }
        else
        {
            $so_lon = $so_b;
        }
    }
    ?>
    <div class="container">
        <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>TÌM SỐ LỚN HƠN</legend>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Số A:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="so_a" id="input" class="form-control" value="<?php echo $_POST["so_a"] ?>" min="" max="" step="" required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                   Số B:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="so_b" id="input" class="form-control" value="<?php echo $_POST["so_b"] ?>" min="" max="" step="" required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Số lớn hơn:
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="so_lon_hon" id="input" class="form-control" value="<?php echo $so_lon ?>" min="" max="" step="" required="required" title="" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">Tìm</button>
                    </div>
                </div>
        </form>
    </div>
</body>
</html>