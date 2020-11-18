<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài tập 3</title>
    <style>
        .container {
            width: 50%;
            border: 1px solid black;
            margin: 0 25%;
        }
        
        h3 {
            text-align: center;
        }
        .content1 {
            width: 100%;
            border-collapse: collapse ;

            
        }
        .a {
            background-color: rgb(190, 205, 233);
        }
        .a th {
            width: 25%;
            text-align: right;
            color: darkblue;
        }
        .table-2 {
            margin: 15px 5px;

        }
        .table-2   .b tr, .b th, .b td {
            border: 1px solid black;
            border-right: none;
            border-left: none;
        }
        .table-2  .b{
            border-collapse: collapse ;
            width:  100%;
        }
       .footer {
           text-align: center;
           padding: 15px;
           padding-bottom: 60px ;

       }
       .footer p {
        margin: -5px;  

       }
    </style>
</head>
<body>
    <div class ="container">
        <div class="logo">
            <img src="../buoi01/hinh/logo-bt3.jpg">
        </div>
        <div class= "table-1">
            <h3 style="color: rgb(80, 114, 26);">MỘT SỐ ĐỊA ĐIỂM DU LỊCH</h3>
            <table class="content1">
                <tr class="a">
                    <th >Địa danh</th>
                    <th></th>
                    <th style="text-align: left;">Tỉnh-Thành phố </th>
                </tr>
                <tr>
                    <td >Suối nước nóng</td>
                    <td style="text-align: center;">Bình Châu- Vũng Tàu</td>
                </tr>
                <tr>
                    <td > Biển Hồ Cốc</td>
                    <td style="text-align: center;">Bình Châu- Vũng Tàu</td>
                </tr>
                <tr>
                    <td >Mũi Né</td>
                    <td style="text-align: center;">Phan Thiết- Bình Thuận</td>
                </tr>
                <tr>
                    <td >Suối vàng- bạc</td>
                    <td style="text-align: center;">Đà Lạt-Lâm Đồng</td>
                </tr>
            </table>
        </div>
        <div class= "table-2">
            <table class="b">
                <tr>
                    <th colspan="3" style="background-color: rgb(199, 199, 199); color: rgb(30, 163, 96);">MỘT SỐ DANH LAM THẮNG CẢNH</th>
                </tr>
                <tr>
                    <th style="border-right: 1px solid black; color: blue; background-color: rgb(236, 236, 236); width: 33.33%;">Đồi cừu ở Đà Lạt</th>
                    <th style="border-right: 1px solid black; color: blue;background-color: rgb(236, 236, 236);width: 33.33%;">Huế-Lăng Cổ</th>
                    <th style="color: blue;background-color: rgb(236, 236, 236);width: 33.33%;">Đèo Hải Vân- Đà Nẵng</th>
                </tr>
                <tr>
                    <td style="border-right: 1px solid black; text-align: center;">
                        <img src="../buoi01/hinh/anh1.PNG" >
                    </td>
                    <td style="border-right: 1px solid black;text-align: center;">
                        <img src="../buoi01/hinh/anh2.PNG">
                    </td>
                    <td style ="text-align: center;">
                        <img src="../buoi01/hinh/anh3.PNG">
                    </td>
                </tr>
            </table>
        </div>
        <div class= footer>
            <p>Mọi chi tiết xin liên hệ</p>
            <p>Văn phòng du lịch Saigontuorist gần nhất của bạn</p>
            <p>Điện thoại: (08) 8735868</p>
        </div>
    </div>
   
</body>
</html>