<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
    <link href="{{ asset('css/extras.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="styleoff.css" class="">
    <link rel="stylesheet" href="http://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro-icons.min.css" class="">
    <link href="metro-icons.css" rel="stylesheet">
</head>
<body>
    <div id="app" >
        <nav class=" navbar navbar-expand-md bg-white " >
            <div class="container-fluid  row ">                
                    <a class=" " href="{{ url('/principal') }}">
                        <img src="/images/logo.png" alt="" width="100%"  class="col-3">
                        </a>
               
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        <!-- Authentication Links -->
                        <div class="search dropdown ">
                            <form action="/directorio" method="get" id="results" autocomplete="off" data-toggle="dropdown" class="">
                                <span class="form-icon  mif-search mif-2x ">
                                    <input class="form-control input" name="q" id="search-anime" type="search" placeholder="Buscar..." aria-label="Buscar..." >
                                    
                                </span>
                            </form>
                        </div>                        
                        @guest
                            <li class="nav-item">
                                <a class=" title nav-link text-dark " href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="title nav-link text-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
