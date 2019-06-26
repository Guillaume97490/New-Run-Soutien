@extends('layouts.layout')
@section('contentWelcome')

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            .slider{
                height: 33vh;
            }
            .logo{
                max-width: 15vw;
            }
            .card-body{
                box-shadow: #0000002e 0px 0px 18px;
            }
            hr {
                margin-top: 3rem;
                margin-bottom: 1rem;
                border: 0;
                border-top: 1px solid rgb(242, 157, 22);
                max-width: 29vw;
            }

            @media screen and (max-width: 640px) {

            .slider{
                height: initial;
            }

}

}

}
        </style>
    </head>
    <body>




                {{-- SLIDER --}}
                <div class="container-flex d-flex justify-content-center slider">
                    <ul class="rslides">
                        <li><img src="/img/slide1a.jpg" alt="slide 1"></li>
                        <li><img src="/img/slide2.jpg" alt="slide 2"></li>
                        <li><img src="/img/slide3.jpg" alt="slide 3"></li>
                    </ul>

                </div>



                {{-- NOTIFICATIONS --}}
                <div class="flex-center position-ref full-height">
                        <div class="container-flex mt-5">
                            {{-- <br /> --}}
                            <div class="container-fluid mt-5">
                                @if(session()->has('notification.message'))
                                    <div class="alert alert-{{ session('notification.type')}}"">
                                        {{ session('notification.message') }}
                                    </div>
                                @endif

                            </div>

                        </div>
                </div>




                {{-- LOGO --}}
                <hr>
                <div class="mt-5">
                    <div class="d-flex justify-content-center">
                        <div>
                            <img class="logo" src="/img/logo2.png" alt="">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="text-center">
                            <h1 class="mt-0"><span class="text-orange">Run</span> <span class="text-black">Soutien</span></h1>
                            <p class="text-orange h5"> <span class="text-black">Centre de</span> remise à niveau</p>
                        </div>
                    </div>

                </div>
                <hr>

                {{-- PRESENTATIONS --}}
                <div class="container mt-5 card border-0 card-body bg-black">
                    <span class="h3 text-center d-block mt-3 text-orange">Objectifs de la remise à niveau</span>
                    <p class="text-white">Nos sessions de remise à niveau concernent les adultes souhaitant préparer un concours ou se remettre à niveau dans le cadre professionnel ou personnel.<br>
                    N'hésitez pas à prendre contact avec nous pour plus d'informations.</p>
                </div>



























        @endsection
