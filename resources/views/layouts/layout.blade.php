<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>{{ page_title($title ?? '') }}</title>
    {{-- <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="../../../public/css/app.css" rel="stylesheet" type="text/css"> --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="/css/timepicki.css">
    <link rel="stylesheet" href="/css/jquery-ui.min.css">

    <style>
        *{
            font-family: Verdana, sans-serif !important;
        }
        html{
            position:relative;
            min-height: 100%;


        }
        h1,h2,h3,h4{
            font-family: 'Roboto', sans-serif !important;
        }
        .bg-black {
            background-color: #333333;
        }
        .text-black {
            color: #333333;
        }

        .text-orange {
            color: #f29d16;
        }
        .card-body{
                box-shadow: #0000002e 0px 0px 18px;
                }





        /* SLIDER */

        .rslides {
            position: relative;
            list-style: none;
            overflow: hidden;
            width: 100%;
            padding: 0;
            margin: 0;
        }

        .rslides li {
            -webkit-backface-visibility: hidden;
            position: absolute;
            display: none;
            width: 100%;
            left: 0;
            top: 0;
            top: -70%;
        }

        .rslides li:first-child {
            position: relative;
            display: block;
            float: left;
        }

        .rslides img {
            display: block;
            height: auto;
            float: left;
            width: 100%;
            border: 0;
        }

        #slider-animation {
            max-height: 550px;
        }

        .heading-box h2 {
            width: 100%;
            color: red;
        }

        h2,
        p {
            color: #fff;
        }

        .carousel-item img {
            width: 100%;
        }

        .text-box {
            position: absolute;
            top: 50%;
            left: 15%;
            right: 15%;
            color: #000;
            transform: translateY(-50%);
        }
        body {
            padding-top: 69px;
        }
        footer{
            color: white;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height:80px;
        }
        .pageContentWrapper {
            margin-bottom:100px;
            /* Height of footer*/
        }
        .cardMobile{
            display: none;
        }







        @media screen and (max-width: 1100px) {

.rslides li {
    top: 0;
}

}
        @media screen and (max-width: 800px) {

        .onPc{
            display: none;
        }
        .cardMobile{
            display: block;
        }
}

}
        @media screen and (max-width: 320px) {

            .navbar-brand {
                font-size: 4vw;

            }

        }

    </style>
</head>

<body>
    <div class="pageContentWrapper">
    @include('layouts.partials._menu')

    @if (request()->path() =='/')
        @yield('contentWelcome')

    @endif


    @if (request()->path() !=='/')
    <div class="flex-center position-ref full-height">
        <div class="container">
            <br />
            <div class="container-fluid">
                @if(session()->has('notification.message'))
                    <div class="alert alert-{{ session('notification.type')}}"">
                        {{ session('notification.message') }}
                    </div>
                @endif

            </div>
                @yield('content')
        </div>
    </div>

    @endif











                    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                        crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                        crossorigin="anonymous"></script>
                    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> --}}
                    {{-- <script src="/js/slide.js"></script> --}}


                    {{-- DATEPICKER --}}
                    <script src="/js/jquery-ui.min.js"></script>
                    <script src="/js/datepicker-fr.js"></script>

                    <script>
                    $( function() {
                        $( "#datepicker" ).datepicker( $.datepicker.regional[ "fr" ] );
                        $( "#locale" ).on( "change", function() {
                        $( "#datepicker" ).datepicker( "option",
                            $.datepicker.regional[ $( this ).val() ] );
                        });
                    } );
                    </script>




                    {{-- TIMEPICKER --}}
                    <script src="/js/timepicki.js"></script>

                    <script>
                    $(document).ready(function(){
                        $(".time_element").timepicki({
                        show_meridian:false,
                        min_hour_value:8,
                        max_hour_value:17,
                        step_size_minutes:30,
                        overflow_minutes:false,
                        increase_direction:'up',
                        disable_keyboard_mobile: true
                        });
                    });
                    </script>


                    {{-- RESPONSIVE SLIDES --}}
                    <script src="/js/responsiveslides.min.js"></script>

                    <script>
                        $(function () {
                            $(".rslides").responsiveSlides({
                                auto: true, // Boolean: Animate automatically, true or false
                                speed: 500, // Integer: Speed of the transition, in milliseconds
                                timeout: 4000, // Integer: Time between slide transitions, in milliseconds
                                pager: false, // Boolean: Show pager, true or false
                                nav: false, // Boolean: Show navigation, true or false
                                random: false, // Boolean: Randomize the order of the slides, true or false
                                pause: false, // Boolean: Pause on hover, true or false
                                pauseControls: true, // Boolean: Pause when hovering controls, true or false
                                prevText: "Previous", // String: Text for the "previous" button
                                nextText: "Next", // String: Text for the "next" button
                                maxwidth: "", // Integer: Max-width of the slideshow, in pixels
                                navContainer: "", // Selector: Where controls should be appended to, default is after the 'ul'
                                manualControls: "", // Selector: Declare custom pager navigation
                                namespace: "rslides", // String: Change the default namespace used
                                before: function () {}, // Function: Before callback
                                after: function () {} // Function: After callback
                            });
                        });

                    </script>

</body>

<footer class="mt-5 bg-black d-flex flex-column justify-content-center">
    <div class="d-flex justify-content-center">
        <a class="text-white" href="/mentionlegales">Mentions légales</a>
        <div class="mx-2"></div>
        <a class="text-white" href="/cookies">Utilisation des Cookies</a>
    </div>
</footer>
</div>
</html>
