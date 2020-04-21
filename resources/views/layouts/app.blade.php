<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SPR | POSTMAN </title>
    <link rel="shortcut icon" href="\images\icon.ico">


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/colors.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color:#ffffff">
    <div id="app">
        <nav class="navbar navbar-expand-sm colorspr">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo_spr.png') }}" width="110" height="60" alt=""> <span class="text-white">Sistema Publico de Radiodifusión del Estado Mexicano</span>
                </a>

                <div class="collapse navbar-collapse" id="navbarstyle">
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav pull-right">
                        <!-- Authentication Links -->
                        @guest

                        <button type="button" class="btn btn-light btn-sm nav-item">
                            <a class="nav-link " href="{{ route('login') }}"><span class="text-dark">{{ __('Entrar') }}</span></a>
                        </button>
                        <button type="button" class="btn btn-light btn-sm nav-item" style="margin-left:20px">
                            <a class="nav-link " href="{{ route('register') }}"><span class="text-dark">{{ __('Registrar') }}</span></a>
                        </button>                        
                        @else
                        @if( Auth::user()->email_verified_at != null )
                        @endif
                        <li class="nav-item dropdown">

                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} {{ Auth::user()->ap_paterno }} <span class="caret"></span>
                                </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="mt-5">
            @yield('content')
        </main>
    </div>
</body>

<footer class="container-fluid footer">
        <div class="row pre-footer">
            <div class="col-sm">
                <p class="ml-5 mt-3 ">2020 | <strong> Sistema Publico de Radiodifusión del Estado Méxicano </strong>
                </p>
            </div>
        </div>
    </div>
    <div class="row colorspr">
        <div class="col-sm">
            <p class="ml-5 mt-3 text-white">spr.gob.mx
            </p>
        </div>
    </div>
</footer>
</html>
