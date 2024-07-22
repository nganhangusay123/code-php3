<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<<<<<<< HEAD
    <h1>hello wolrd</h1>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Name</th>
        </thead>
        <tbody>
    
            @foreach($products as $value)
            <tr>
                <td>{{ $value['id']}}</td>
                <td>{{ $value['name'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
=======
    <h1>wellcome to my wolrd</h1>
    <table border='1'>
        <thead>
            <th>id</th>
            <th>name</th>
        </thead>
        <tbody>
            @foreach($products as $value)
                <tr>
                    <td><?=$value['id'] ?></td>
                    <td><?=$value['name']?></td>
                </tr>
            @endforeach
        </tbody>        
    </table>
    
>>>>>>> 866fac8ccb9a75a6612372ff1780eb2357e75559
</body>
</html>