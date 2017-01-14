@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Fundacion</div>
                    <div class="panel-body">

                        <a href="{{ url('/fundacion/create') }}" class="btn btn-primary btn-xs" title="Add New Fundacion"><span class="" aria-hidden="true"/>crear fundacion</a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Nombre </th><th> Descripcion </th><th> Id Usuario </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($fundacion as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->Nombre }}</td><td>{{ $item->Descripcion }}</td><td>{{ $item->Id_Usuario }}</td>
                                        <td>
                                            <a href="{{ url('fundacion/' . $item->Id_Fundacion) }}" class="btn btn-success btn-xs" title="View Fundacion"><span class="" aria-hidden="true"/>ver</a>
                                            <a href="{{ url('fundacion/' . $item->Id_Fundacion . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Fundacion"><span class="" aria-hidden="true"/>editar</a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['fundacion', $item->Id_Fundacion],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="" aria-hidden="true" title="Delete Fundacion" >eliminar</span>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Fundacion',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $fundacion->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection