<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/app.css"/>

    
    <title>Catalogo</title>
</head>
<body>
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
     <!--   Cabecera--> 
    </div>
    @endif
    <table>
        @foreach ($productos as $pro)
        <tr>
            <td>{{$pro->titulo}} </td>
            <td>{{$pro->autor}} </td>
            <td>{{$pro->descripcion}} </td>
        </tr>
        @endforeach
    </table> 
    <!--   Footer>
</body>
</html>