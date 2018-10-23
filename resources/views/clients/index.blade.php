@extends('layouts.app')
@section('title')
    <title>easySOFT PC | Clientes </title>
@stop
@section('content')
    <!-- PROJECTS -->
    <section id="projects" class="padbot120">

        <!-- CONTAINER -->
        <div class="container">
            <h2><b>Nuestros</b> Clientes</h2>

            <!-- ROW -->
            <div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">

                <!-- TEAM SLIDER -->
                <div class="owl-demo owl-carousel team_slider">
                    @foreach($clients as $key => $value)
                    <div class="item">
                        <div class="crewman_item">
                            <div class="crewman">
                                <img src="{{ asset($value->img)}}" alt="" />
                            </div>
                            <div class="crewman_descr center">
                                <div class="crewman_descr_cont">
                                    <p>{{$value->name}}</p>
                                    <span>{{$value->description}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div><!-- TEAM SLIDER -->
            </div><!-- //ROW -->
        </div><!-- //CONTAINER -->
    </section><!-- //TEAM -->
@stop