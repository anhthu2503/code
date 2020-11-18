<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài tập 4</title>
    <style>
        form {
            border: 1px solid rgb(236, 92, 39);
            margin: 0 38%;

        }
    </style>
</head>
<body>
    <form>
        <table>
            <tr>
                <th colspan="2">ĐĂNG KÝ THÀNH VIÊN</th>
            </tr>
            <tr>
                <th >THÔNG TIN TÀI KHOẢN</th>
            </tr>
            <tr>
                <td >Username:</td>
                <td >
                    <input type="text">
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>
                    <input type="password">
                </td>
            </tr>
            <tr>
                <td>Nhập lại password:</td>
                <td>
                    <input type="password">
                </td>
            </tr>
            <tr>
                <th>THÔNG TIN CÁ NHÂN</th>
            </tr>
            <tr>
                <td>Họ và tên:</td>
                <td>
                    <input type="text">
                </td>
            </tr>
            <tr>
                <td>Giới tính:</td>
                <td>
                    <select>
                        <option value="Nam">Nam</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Địa chỉ:</td>
                <td>
                    <textarea cols="20" rows="4"></textarea>
                </td>
            </tr>
            <tr>
                <td>Ngày sinh:</td>
                <td>
                    <input type="date">
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>
                    <input type="email">
                </td>
            </tr>
            <tr>
                <td>Tình trạng hôn nhân</td>
                <td>
                    <input type="radio" >độc thân
                    <input type="radio" >đã đính hôn<br>
                    <input type="radio" >ly dị
                    <input type="radio" >quá phụ
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Gửi đi">
                    <input type="reset" value="Nháp lại">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>