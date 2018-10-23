@extends('layouts.app')
@section('title')
    <title>easySOFT PC | Admin Clientes</title>
@stop
@section('content')
        <div class="purpose_block">

            <!-- CONTAINER -->
            <div class="container">
                <h2><b>Clientes</b></h2>
                <div class='table-responsive'>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <td><b>ID</b></td>
                            <td><b>Nombre</b></td>
                            <td><b>Descripción de Proyecto</b></td>
                            <td><b>Imagen</b></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clients as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->description }}</td>
                                <td>{{ $value->img }}</td>
                                <td>
                                    {{ Form::open(array('url' => 'clients/' . $value->id, 'class' => 'pull-right')) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Eliminar', array('class' => 'btn btn-small btn-danger')) }}
                                    {{ Form::close() }}

                                    <a class="btn btn-small btn-default" href="{{ URL::to('admin/clients/' . $value->id . '/edit') }}"><i class="ti-pencil"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@stop