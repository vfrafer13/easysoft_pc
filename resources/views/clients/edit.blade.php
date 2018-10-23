@extends('layouts.app')
@section('title')
    <title>easySOFT PC | Editar Cliente </title>
@stop
@section('content')
        <div class="purpose_block">
            <div class="container">
                <!-- ROW -->
                <div class="row">

                    <div class="col-lg-7 col-md-7 col-sm-7" data-appear-top-offset="-200" data-animated="fadeInLeft">
                        <h2><b>Editar Cliente</b></h2>
                    </div>
                </div>
                {{ Form::model($client, array('route' => array('clients.update', $client->id), 'method' => 'PUT')) }}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            {{ Form::label('name', 'Nombre') }}
                            {{ Form::text('name', Input::old('name'), array('class' => 'form-control border-input', 'required'=>'required')) }}
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            {{ Form::label('img', 'Imagen del cliente') }}
                            {{ Form::text('img', Input::old('img'), array('class' => 'form-control border-input', 'required'=>'required')) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                            {{ Form::label('description', 'Descripción del proyecto') }}
                            {{ Form::text('description', Input::old('description'), array('class' => 'form-control border-input')) }}
                        </div>
                    </div>
                </div>
                <div class="center">
                    {{ Form::submit('Guardar Cambios', array('class' => 'btn btn-primary')) }}
                    <a class="btn btn-small btn-secondary" href="{{ URL::to('/admin/clients') }}">Cancelar</a>
                </div>
            </div>
        </div>
        {{ Form::close() }}
@stop