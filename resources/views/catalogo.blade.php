@extends('layouts.app')
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
    <div>
    @section('content')
        <div class="container">
            <br>
            <div class="row">
                <h1>Catálogo</h1>
                <h2>Encuentra una nueva experiencia</h2>
                <br>
                @foreach ($productos as $pro)
                <div class="col-md-3">
                    <div class="card">
                    <img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title">{{$pro->titulo}}</h4>
                            <h4 class="card-subtitle">{{$pro->autor}}</h4>
                            <a name="" id="" class="btn btn-primary" href="" role="button">Ver más </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection
    <!--   Footer -->
</body>
</html>