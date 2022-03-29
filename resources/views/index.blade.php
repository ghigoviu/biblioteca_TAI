<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css"/>

    <title>Biblioteca</title>
    
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-blue shadow-sm">
        <div class="container"> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Biblioteca</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="libros">Libros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clientes">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros">Nosotros</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
    <br/>
        <div class="row">

   <div class="jumbotron">
        <h1 class="display-3">Biblioteca Borges</h1>
        <p class="lead">Visítanos. Porque se gana mas cuando compartes</p>
        <hr class="my-2">
        <p>Presentación...</p>
        <p class="lead">
             <a class="btn btn-primary btn-lg" href="libros" role="button">Empieza aquí a explorar</a>
        </p>
    </div>

        </div>
    </div>

</body>
</html>
