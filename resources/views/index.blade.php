@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="./css/app.css"/>
    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            align-self: middle; 
            width: 100%;
            height: 100%;
        }
    </style>
    <title>Biblioteca</title>
  
    
</head>
<body>
    @section('content')
    <div class="container">
        <div class="row">
            <div class="jumbotron">
                <h1 class="display-3">Biblioteca Borges</h1>
                <p class="lead">Conócenos. Porque ganamos mas al compartir</p>
                <hr class="my-2">
                <p>Somos una organiación que brinda servicio de renta de libros especializados a la comunidad</p>
                <p>Ven y visita las instalaciones que tenemos para ti.</p>
                <div class="container mt-3">

                    <h2></h2>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    
                    <!-- Indicators -->
                    
                    <ul class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ul>
                    
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="https://www.comunidadbaratz.com/wp-content/uploads/Todas-las-bibliotecas-son-bellas-por-el-servicio-que-ofrecen-a-sus-comunidades.jpg" 
                          alt="img" width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                          <img src="https://www.udg.mx/sites/default/files/img_noticias/200303_alista_prestamo_de_libros_la_biblioteca_publica_juan_jose_arreola_fv6.jpg" 
                          alt="img" width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                          <img src="https://newsweekespanol.com/wp-content/uploads/2020/04/Bibliotecas_apertura.jpg" 
                          alt="img" width="1100" height="500">
                        </div>
                      </div>
                    
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                    </div>
                    
                </div>
                <br>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="catalogo" role="button">Empieza aquí a explorar</a>
                </p>
                
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
