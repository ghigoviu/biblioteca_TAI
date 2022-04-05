@extends('layouts.admin')

@section('template_title')
    Renta
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Renta') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('rentas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Fechaini</th>
										<th>Fechafin</th>
										<th>Libro Id</th>
										<th>Cliente Id</th>
										<th>Status Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rentas as $renta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $renta->fechaini }}</td>
											<td>{{ $renta->fechafin }}</td>
											<td>{{ $renta->libro_id }}</td>
											<td>{{ $renta->cliente_id }}</td>
											<td>{{ $renta->status_id }}</td>

                                            <td>
                                                <form action="{{ route('rentas.destroy',$renta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('rentas.show',$renta->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('rentas.edit',$renta->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $rentas->links() !!}
            </div>
        </div>
    </div>
@endsection
