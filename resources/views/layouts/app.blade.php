<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        @yield('title')
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="{{asset("img/favicon.ico")}}">
        <!-- CSS -->
        <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{asset("css/flexslider.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{asset("css/prettyPhoto.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{asset("css/animate.css")}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset("css/owl.carousel.css")}}"rel="stylesheet">
        <link href="{{asset("css/app.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{asset("css/themify-icons.css")}}" rel="stylesheet" type="text/css" />

        <!-- FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <!-- SCRIPTS -->
        <!--[if IE]<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if IE]<html class="ie" lang="en"> <![endif]-->


        <script src="{{ asset("js/jquery.min.js")}}" type="text/javascript"></script>
        <script src="{{ asset("js/bootstrap.min.js")}}" type="text/javascript"></script>
        <script src="{{ asset("js/jquery.prettyPhoto.js")}}" type="text/javascript"></script>
        <script src="{{ asset("js/jquery.nicescroll.min.js")}}" type="text/javascript"></script>
        <script src="{{ asset("js/superfish.min.js")}}" type="text/javascript"></script>
        <script src="{{ asset("js/jquery.flexslider-min.js")}}" type="text/javascript"></script>
        <script src="{{ asset("js/owl.carousel.js")}}" type="text/javascript"></script>
        <script src="{{ asset("js/animate.js")}}" type="text/javascript"></script>
        <script src="{{ asset("js/jquery.BlackAndWhite.js")}}" type="text/javascript"></script>
        <script src="{{ asset("js/myscript.js")}}" type="text/javascript"></script>
        <script src="{{ asset("js/app.js")}}" type="text/javascript"></script>
        <script>

            //PrettyPhoto
            jQuery(document).ready(function() {
                $("a[rel^='prettyPhoto']").prettyPhoto();
            });

            //BlackAndWhite
            $(window).load(function(){
                $('.client_img').BlackAndWhite({
                    hoverEffect : true, // default true
                    // set the path to BnWWorker.js for a superfast implementation
                    webworkerPath : false,
                    // for the images with a fluid width and height
                    responsive:true,
                    // to invert the hover effect
                    invertHoverEffect: false,
                    // this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
                    intensity:1,
                    speed: { //this property could also be just speed: value for both fadeIn and fadeOut
                        fadeIn: 300, // 200ms for fadeIn animations
                        fadeOut: 300 // 800ms for fadeOut animations
                    },
                    onImageReady:function(img) {
                        // this callback gets executed anytime an image is converted
                    }
                });
            });

        </script>


    </head>
    <body>
        <!-- PRELOADER -->
        <img id="preloader" src="{{asset("img/preloader.gif")}}" alt="" />
        <!-- //PRELOADER -->
        <div class="preloader_hide">
            <!-- PAGE -->
            <div id="page">

                <!-- HEADER -->
                <header>

                    <!-- MENU BLOCK -->
                    <div class="menu_block">

                        <!-- CONTAINER -->
                        <div class="container clearfix">

                            <!-- LOGO -->
                            <div class="logo pull-left">
                                <a href="{{ url('/') }}" ><span class="b1">easy</span><span class="b2">s</span><span class="b3">o</span><span class="b4">f</span><span class="b5">t</span></a>
                            </div><!-- //LOGO -->

                            @if(Request::is('admin')|| Request::is('admin/*') )
                                @include('includes.menu_admin')
                            @else
                                @include('includes.menu')
                            @endif
                        </div>
                    </div>
                </header>
                @yield('content')
            </div>
        </div><!-- //PAGE -->
        <!-- CONTACTS -->
        <section id="contacts">
        </section><!-- //CONTACTS -->
        @if(!Request::is('admin')&& !Request::is('admin/*') )
            @include('includes.footer')
            @include('includes.chat')
        @endif
    </body>
</html>
