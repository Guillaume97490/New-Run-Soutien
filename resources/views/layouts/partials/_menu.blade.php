<nav class="navbar fixed-top navbar-expand-lg navbar navbar-dark bg-black">

    <a class="navbar-brand" href="/"><img style="max-width:50px;border:solid 1px white;" src="/img/logo2.jpg" alt="logo"> Run Soutien</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                {{-- <a class="nav-link {{ set_active_route('welcome')}}" href="{{ route('welcome') }}">Accueil</a> --}}
            </li>

            @guest
                <li class="nav-item">
                    {{-- <a class="nav-link {{ set_active_route('listsessions')}}" href="{{ route('listsessions') }}">Liste des sessions</a> --}}
                </li>
            @endguest




            {{-- Si l'utilisateur est connecté --}}
            @auth

            {{-- Si l'utilisateur est Responsable --}}
                @if (Auth::user()->hasRole(['Responsable']))


                    <li class="nav-item">
                        <a class="nav-link {{ set_active_route('listusers.index')}}" href="{{ route('listusers.index') }}">Les utilisateurs</a>
                    </li>

                    <li class="nav-item">
                        {{-- <a class="nav-link {{ set_active_route('listcoursadmin')}}" href="{{ route('listcoursadmin') }}">Les cours</a> --}}
                    </li>


                    <li class="nav-item">
                        {{-- <a class="nav-link {{ set_active_route('listsessionsadmin')}}" href="{{ route('listsessionsadmin') }}">Les sessions</a> --}}
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ set_active_route('listusers.create')}}" href="{{ route('listusers.create') }}">Ajouter un professeur</a>
                    </li>
                @endif


            {{-- Si l'utilisateur est Professeur --}}
                @if (Auth::user()->hasRole(['Professeur']))

                    <li class="nav-item">
                        {{-- <a class="nav-link {{ set_active_route('listsessions')}}" href="{{ route('listsessions') }}">Liste des sessions</a> --}}
                    </li>

                    <li class="nav-item">
                        {{-- <a class="nav-link {{ set_active_route('listmescours')}}" href="{{ route('listmescours') }}">Mes cours</a> --}}
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link {{ set_active_route('listmessessions')}}" href="{{ route('listmessessions') }}">Mes sessions</a> --}}
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ set_active_route('panier')}}" href="{{ route('panier') }}">Panier</a>
                    </li> --}}

                @endif



            {{-- Si l'utilisateur est Particulier --}}
                @if (Auth::user()->hasRole(['Particulier']))


                <li class="nav-item">
                    {{-- <a class="nav-link {{ set_active_route('listsessions')}}" href="{{ route('listsessions') }}">Liste des sessions</a> --}}
                </li>

                <li class="nav-item">
                    {{-- <a class="nav-link {{ set_active_route('list-mes-inscription')}}" href="{{ route('list-mes-inscription') }}">Mes inscriptions</a> --}}
                </li>



                    {{-- <li class="nav-item">
                        <a class="nav-link {{ set_active_route('panier')}}" href="{{ route('panier') }}">Panier</a>
                    </li> --}}

                @endif



            @endauth


        </ul>







        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('S\'enregistrer') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->nom }} <span class="caret"></span>
                    {{ Auth::user()->prenom }} <span class="caret"></span>

                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                        {{ __('Se déconnecter') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
</nav>
