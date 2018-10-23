@extends('layouts.app')
@section('title')
    <title>easySOFT PC | Servicios </title>
@stop
@section('content')
    <!-- CLEAN CODE -->
    <div class="cleancode_block">

        <!-- CONTAINER -->
        <div class="container" data-appear-top-offset="-200" data-animated="fadeInUp">

            <!-- CASTOM TAB -->
            <div id="myTabContent" class="tab-content">
                @foreach($services as $key => $value)
                    @if ($value->id == 1)
                        <div class="tab-pane fade in active clearfix" id= "{{"tab" . ($value->id)}}">
                            <a href="{{ URL::to('services/' . $value->id) }}"><p class="title">{{$value->name}}</p></a>
                            <span>{{$value->description}}</span>
                        </div>
                    @else
                        <div class="tab-pane fade clearfix" id= "{{"tab" . ($value->id)}}">
                            <a href="{{ URL::to('services/' . $value->id) }}"><p class="title">{{$value->name}}</p></a>
                            <span>{{$value->description}}</span>
                        </div>
                    @endif
                @endforeach
            </div>
            <ul id="myTab" class="nav nav-tabs">
                @foreach($services as $key => $value)
                    @if ($value->id == 1)
                        <li class="active">
                            <a class="{{$value->icon}}" href="{{"#tab" . $value->id}}" data-toggle="tab" ><i></i>
                                <span>{{$value->name}}</span>
                            </a>
                        </li>
                    @else
                        <li>
                            <a class="{{$value->icon}}" href="{{"#tab" . $value->id}}" data-toggle="tab" ><i></i>
                                <span>{{$value->name}}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul><!-- CUSTOM TAB -->
        </div><!-- //CONTAINER -->
    </div><!-- //CLEAN CODE -->
@stop