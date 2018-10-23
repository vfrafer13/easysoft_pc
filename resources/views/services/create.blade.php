@extends('layouts.app')
@section('title')
    <title>easySOFT PC | Nuevo Servicio </title>
@stop
@section('content')
        <div class="purpose_block">
            <div class="container">
                <!-- ROW -->
                <div class="row">

                    <div class="col-lg-7 col-md-7 col-sm-7" data-appear-top-offset="-200" data-animated="fadeInLeft">
                        <h2><b>Nuevo Servicio</b></h2>
                    </div>
                </div>
                {{ Form::open(array('url' => 'services')) }}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            {{ Form::label('name', 'Nombre') }}
                            {{ Form::text('name', Input::old('name'), array('class' => 'form-control border-input', 'required'=>'required')) }}
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            {{ Form::label('icon', 'Ruta del ícono') }}
                            {{ Form::text('icon', Input::old('icon'), array('class' => 'form-control border-input', 'required'=>'required')) }}
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            {{ Form::label('img_detail', 'Imagen para detalle del servicio') }}
                            {{ Form::text('img_detail', Input::old('img_detail'), array('class' => 'form-control border-input', 'required'=>'required')) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                            {{ Form::label('description', 'Descripción corta') }}
                            {{ Form::text('description', Input::old('description'), array('class' => 'form-control border-input')) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::label('long_desc', 'Descripción larga') }}
                            {{ Form::textarea('long_desc', Input::old('long_desc'), array('class' => 'form-control border-input', 'required'=>'required','rows' => 10, 'cols' => 20)) }}
                        </div>
                    </div>
                </div>
                <div class="center">
                    {{ Form::submit('Guardar', array('class' => 'btn btn-primary')) }}
                    <a class="btn btn-small btn-secondary" href="{{ URL::to('/admin/services') }}">Cancelar</a>
                </div>
            </div>
        </div>
        {{ Form::close() }}
@stop