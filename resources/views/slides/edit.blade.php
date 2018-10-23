@extends('layouts.app')
@section('title')
    <title>easySOFT PC | Editar Slide </title>
@stop
@section('content')
        <!-- MULTI PURPOSE -->
        <div class="purpose_block">
            <div class="container">
                <!-- ROW -->
                <div class="row">

                    <div class="col-lg-7 col-md-7 col-sm-7" data-appear-top-offset="-200" data-animated="fadeInLeft">
                        <h2><b>Editar Slide</b></h2>
                    </div>
                </div>
                {{ Form::model($slide, array('route' => array('slides.update', $slide->id), 'method' => 'PUT')) }}
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            {{ Form::label('title', 'Título') }}
                            {{ Form::text('title', Input::old('title'), array('class' => 'form-control border-input', 'required'=>'required')) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('title_2', 'Título 2') }}
                            {{ Form::text('title_2', Input::old('title_2'), array('class' => 'form-control border-input')) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('title_3', 'Título 3') }}
                            {{ Form::text('title_3', Input::old('title_3'), array('class' => 'form-control border-input')) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            {{ Form::label('description', 'Descripción') }}
                            {{ Form::text('description', Input::old('description'), array('class' => 'form-control border-input', 'required'=>'required')) }}
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            {{ Form::label('img', 'Ruta de la Imagen') }}
                            {{ Form::text('img', Input::old('img'), array('class' => 'form-control border-input', 'required'=>'required')) }}
                        </div>
                    </div>
                </div>
                <div class="center">
                    {{ Form::submit('Guardar cambios', array('class' => 'btn btn-primary')) }}
                    <a class="btn btn-small btn-secondary" href="{{ URL::to('/admin/slides') }}">Cancelar</a>
                </div>
            </div>
        </div>
        {{ Form::close() }}
@stop