@extends('layouts.app')
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
    @section('content')
    <div class="container">
        <div class="row">
            <div class="jumbotron">
                <h1 class="display-3">Biblioteca Borges</h1>
                <p class="lead">Visítanos. Porque se gana mas cuando compartes</p>
                <hr class="my-2">
                <p>Presentación...</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="catalogo" role="button">Empieza aquí a explorar</a>
                </p>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
