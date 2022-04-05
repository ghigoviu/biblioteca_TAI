@extends('layouts.app')

@section('template_title')
    {{ $libro->name ?? 'Show Libro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                        <span class="card-title">Detalles del Libro</span>
                        </div>
                        <div class="float-right">
                            <!-- <a class="btn btn-primary" href="{{ route('libros.index') }}"> Volver</a>  -->
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                        <img class="card-img-top" 
                            src={{$libro->imagen}}
                            alt="Caratula: {{$libro->titulo}}">
                        </div>
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $libro->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $libro->autor }}
                        </div>
                        <div class="form-group">
                            <strong>Categoría:</strong>
                            {{ $libro->categoría }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $libro->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
