@extends('layouts.app')
@section('title')
    <title>easySOFT PC | Admin Servicios</title>
@stop
@section('content')
        <div class="purpose_block">

            <!-- CONTAINER -->
            <div class="container">
                <h2><b>Servicios</b></h2>
                <div class='table-responsive'>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <td><b>ID</b></td>
                            <td><b>Nombre</b></td>
                            <td><b>Descripción corta</b></td>
                            <td><b>Descripción</b></td>
                            <td><b>Ícono</b></td>
                            <td><b>Imagen</b></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->description }}</td>
                                <td>{{ $value->long_desc }}</td>
                                <td>{{ $value->icon }}</td>
                                <td>{{ $value->img_detail }}</td>
                                <td>
                                    <a class="btn btn-small btn-default" href="{{ URL::to('admin/services/' . $value->id . '/edit') }}"><i class="ti-pencil"></i></a>
                                    {{ Form::open(array('url' => 'services/' . $value->id, 'class' => 'pull-right')) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Eliminar', array('class' => 'btn btn-small btn-danger')) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@stop