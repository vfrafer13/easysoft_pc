@extends('layouts.app')
@section('title')
    <title>easySOFT PC | {{$service->name}}</title>
@stop
@section('content')
    <!-- ABOUT -->
    <section id="about" class="padbot20">
        <!-- MULTI PURPOSE -->
        <div class="purpose_block">

            <!-- CONTAINER -->
            <div class="container">

                <!-- ROW -->
                <div class="row">

                    <div class="col-lg-7 col-md-7 col-sm-7" data-appear-top-offset="-200" data-animated="fadeInLeft">
                        <h2><b></b>{{$service->name}}</h2>
                        <p>{{$service->long_desc}}</p>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-5 ipad_img_in" data-appear-top-offset="-200" data-animated="fadeInRight">
                        <img class="ipad_img1" src="{{ asset($service->img_detail)}}" alt="" />
                    </div>
                </div><!-- //ROW -->
            </div><!-- //CONTAINER -->
        </div><!-- //MULTI PURPOSE -->
    </section><!-- //ABOUT -->
@stop