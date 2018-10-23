@extends('layouts.app')
@section('title')
    <title>easySOFT PC | Soluciones Informáticas</title>
@stop
@section('content')
    <!-- HOME -->
    <section id="home" class="padbot0">

        <!-- TOP SLIDER -->
        <div class="flexslider top_slider">
            <ul class="slides">
                @foreach($slides as $key => $value)
                <li class="{{"slide" . ($value->id)}}">
                    <div class="flex_caption1">
                        <p class="title1 captionDelay6 FromLeft">{{$value->title}}</p>
                        @if (!is_null($value->title_2))
                            <p class="title2 captionDelay4 FromLeft">{{$value->title_2}} </p>
                        @endif
                        @if (!is_null($value->title_3))
                            <p class="title3 captionDelay2 FromLeft">{{$value->title_3}}</p>
                        @endif
                        @if (!is_null($value->description))
                            <p class="title4 captionDelay5 FromBottom">{{$value->description}}</p>
                        @endif
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div id="carousel">
            <ul class="slides">
                @foreach($slides as $key => $value)
                    <li><img src="{{ asset($value->img)}}" alt="" /></li>
                @endforeach
            </ul>
        </div><!-- //TOP SLIDER -->
    </section><!-- //HOME -->

@stop