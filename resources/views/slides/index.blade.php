@extends('layouts.app')
@section('title')
    <title>easySOFT PC | Admin Slides</title>
@stop
@section('content')
        <div class="purpose_block">

            <!-- CONTAINER -->
            <div class="container">
                <h2><b>Slides de Inicio</b></h2>
                <div class='table-responsive'>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <td><b>ID</b></td>
                            <td><b>Título</b></td>
                            <td><b>Descripción</b></td>
                            <td><b>Imagen</b></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($slides as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->title . " " . $value->title_2 . " " . $value->title_3 }}</td>
                                <td>{{ $value->description }}</td>
                                <td>{{ $value->img }}</td>
                                <td>
                                    {{ Form::open(array('url' => 'slides/' . $value->id, 'class' => 'pull-right')) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Eliminar', array('class' => 'btn btn-danger')) }}
                                    {{ Form::close() }}

                                    <a class="btn btn-small btn-default" href="{{ URL::to('admin/slides/' . $value->id . '/edit') }}"><i class="ti-pencil"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@stop