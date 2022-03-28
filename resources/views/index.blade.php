<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./css/app.css"/>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light-dark bg-primary">
        <ul class="nav navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="#">Biblioteca</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="catalogo">Libros</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="nosotros">Nosotros</a>
            </li>
        </ul>
    </nav>
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
    </div>
    @endif
    <div class="container">
    <br/>
        <div class="row">

   <div class="jumbotron">
        <h1 class="display-3">Jumbo heading</h1>
        <p class="lead">Jumbo helper text</p>
        <hr class="my-2">
        <p>More info</p>
        <p class="lead">
             <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
        </p>
    </div>

        </div>
    </div>

</body>
</html>
