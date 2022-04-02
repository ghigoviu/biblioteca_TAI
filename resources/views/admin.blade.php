@extends('layouts.admin')

@section('title', 'Administración del sitio')

@section('content_header')
    <h1>Menú de administrador</h1>
@stop

@section('content')
    <p>Bienvenido de nuevo usuario administrador.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop