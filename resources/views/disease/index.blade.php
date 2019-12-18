@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Especialidades</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'diseases.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear enfermedad', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Especialidad</th>


                                <th colspan="2">Acciones</th>
                            </tr>
                            @foreach ($diseases as $disease)


                                <tr>
                                    <td>{{ $disease->nombre }}</td>
                                    <td>{{ $disease->especialidad }}</td>

                                    <td>
                                        {!! Form::open(['route' => ['diseases.edit',$disease->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['diseases.destroy',$disease->id], 'method' => 'delete']) !!}
                                        {!!   Form::submit('Borrar', ['class'=> 'btn btn-danger' ,'onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection