<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài tập 2</title>
    <style>
        table, th, td {
			border: 1px solid black;
			/* border-collapse: collapse; */

		}
        th {
            padding:  5px 15px;
        }
        td {
            padding: 5px 25px 5px 5px;
            text-align: left;
        }
        .right {
            padding-right: 5px ;
            text-align: right;
        }
        h2, h3 {
            color: red;
        }
        .container {
            background-image: url("../buoi01/hinh/background.jpg");
			width: 40%;
		    margin: 0 30%;
		}
        .container img {
            padding: 1% 25%;
        }
        .content {
            padding: 5px;
        }
        
        .title {
            background-color: rgb(29, 194, 70);
        }
        .table {
            text-align: center;
            padding-bottom: 1%;

        }
        .table table{
            margin: 0 40px;
            margin-top: -15px;

        }
    </style>
</head>
<body>
    <!-- <div class="wrap"> -->
        <div class="container">
            <img src="../buoi01/hinh/logo-bt2.png">
            <div class="content">
                <h2>Gargoyle Products</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quo quisquam maxime velit libero, ut sed ipsa possimus recusandae nobis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti eum corporis consequatur reiciendis optio quaerat dolorem perferendis illo eligendi at? Sapiente, consectetur. Debitis ipsa, explicabo suscipit quis delectus vero praesentium!</p>
            </div>
            <div class="table">
                <h3>Products in the Gargoyle Collection</h3>
                <table>
                    <tr class="title">
                        <th>Name</th>
                        <th>Item#</th>
                        <th colspan="2"> Type and Finish</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td style="background-color: rgb(245, 245, 56);">Bacchus</td>
                        <td>48059</td>
                        <td>Wall Mount</td>
                        <td>Interior Plaster</td>
                        <td class="right">$95</td>
                    </tr>
                    <tr>
                        <td style="background-color: rgb(245, 245, 56);">Praying Gragoyle</td>
                        <td>48159</td>
                        <td>Garden Figure</td>
                        <td>Gothic Stone</td>
                        <td class="right">$125</td>
                    </tr>
                    <tr>
                        <td style="background-color: rgb(245, 245, 56);" rowspan="2">Gargoyle Judge</td>
                        <td>48222</td>
                        <td>Bust</td>
                        <td>Interior Plaster</td>
                        <td class="right">$140</td>
                    </tr>
                    <tr>
                        <td>48223</td>
                        <td>Bust</td>
                        <td>Gothic Stone</td>
                        <td class="right">$155</td>
                    </tr>
                </table>
            </div>
        </div>
    <!-- </div> -->
</body>
</html>