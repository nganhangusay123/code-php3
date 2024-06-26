<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thông Tin Sinh Viên</h1>
    <table border='1'>
        <thead>
            <th>Mã Sinh Viên</th>
            <th>Họ Và Tên</th>
            <th>Tuổi</th>
            <th>Chuyên Ngành</th>
            <th>Email</th>
        </thead>
        <tbody>
            @foreach($sinhvien as $value)
                <tr>
                    <td><?=$value['msv'] ?></td>
                    <td><?=$value['ten'] ?></td>
                    <td><?=$value['tuoi'] ?></td>
                    <td><?=$value['chuyennganh'] ?></td>
                    <td><?=$value['Email'] ?></td>
                </tr>
            @endforeach
        </tbody>        
    </table>
    
</body>
</html>