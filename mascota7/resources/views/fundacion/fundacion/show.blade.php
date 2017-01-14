@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Fundacion {{ $fundacion->Id_Fundacion }}</div>
                    <div class="panel-body">

                        <a href="{{ url('fundacion/' . $fundacion->Id_Fundacion . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Fundacion"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['fundacion', $fundacion->Id_Fundacion],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Fundacion',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $fundacion->Id_Fundacion }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $fundacion->Nombre }} </td></tr><tr><th> Descripcion </th><td> {{ $fundacion->Descripcion }} </td></tr><tr><th> Id Usuario </th><td> {{ $fundacion->Id_Usuario }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection