@extends('layouts.admin')

@section('template_title')
    {{ $renta->name ?? 'Show Renta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Renta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('rentas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fechaini:</strong>
                            {{ $renta->fechaini }}
                        </div>
                        <div class="form-group">
                            <strong>Fechafin:</strong>
                            {{ $renta->fechafin }}
                        </div>
                        <div class="form-group">
                            <strong>Libro Id:</strong>
                            {{ $renta->libro_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $renta->cliente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Status Id:</strong>
                            {{ $renta->status_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
