<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        @foreach ($productos as $pro)
        <tr>
            <td>{{$pro->titulo}} </td>
        </tr>
        <tr>
            <td>{{$pro->autor}} </td>
        </tr>
        @endforeach
    </table> 
</body>
</html>