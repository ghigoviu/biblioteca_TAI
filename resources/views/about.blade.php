<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/app.css"/>

    <title>Nosotros</title>
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
                            <a class="nav-link" href="clientes"></a>
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
            <h1>Acerca de Librería Borges</h1>
            <h2>Somos una librería dedicada a fomentar el grato hábito de la lectura ofreciendo accesibilidad</h2>
            <h3>Sobre Jorge Luis Borges</h3>
            <p>Jorge Luis Borges, fue un destacado escritor de cuentos, poemas y ensayos argentino, 
                extensamente considerado una figura clave tanto para la literatura en habla hispana 
                como para la literatura universal.​ También fue bibliotecario, profesor, conferencista, 
                crítico literario y traductor. Sus dos libros más conocidos, Ficciones y El Aleph, 
                publicados en los años cuarenta, son recopilaciones de cuentos conectados por temas 
                comunes de forma fantástica; como los sueños, los laberintos, las bibliotecas, los espejos, 
                los autores ficticios y las mitologías europeas (como la griega y la nórdica), con 
                argumentos que exploran ideas filosóficas relacionadas, por ejemplo, con la memoria, la 
                eternidad, la posmodernidad y la metaficción.​</p>
                <p>Las obras de Borges han contribuido 
                ampliamente a la literatura filosófica, al género fantástico y al posestructuralismo. 
                Según marcan numerosos críticos, el comienzo del realismo mágico en la literatura 
                hispanoamericana del siglo XX se debe en gran parte a su obra.</p>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Jorge_Luis_Borges.jpg/220px-Jorge_Luis_Borges.jpg" 
            alt="Fotografía de Jorge Luis Borges">

        </div>
    </body>
    
</html>