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
        <nav class="navbar navbar-expand-lg navbar-light-dark bg-primary">
            <ul class="nav navbar-nav">
    
                <li class="nav-item">
                    <a class="nav-link" href="#">Biblioteca</a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" href="productos.php">Libros</a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" href="nosotros">Nosotros</a>
                </li>
            </ul>
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