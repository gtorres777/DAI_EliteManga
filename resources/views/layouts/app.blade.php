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

    <link href="{{ asset('css/extra1.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="styleoff.css" class="">
    <link rel="stylesheet" href="http://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro-icons.min.css" class="">
    <link href="metro-icons.css" rel="stylesheet">
</head>
<body>
    <div id="app" >
        <nav class=" navbar navbar-expand-md" style="background-color:black" >
            <div class="container-fluid  row ">                
                <a class="col-4 col-sm-3 col-md-2 col-xl-2" href="{{ url('/principal') }}">
                    <img src="/images/logo(oscuro).png" alt="" width="80%">
                </a>
                                <div class="col-6 col-sm-6 col-md-6 col-xl-6">
                                        <div class="search dropdown ">
                                            <form action="{{ action('MangaController@buscar')}}" method="GET" id="results" autocomplete="off" data-toggle="dropdown" class="">
                                                
                                                <input class="form-control input col-12 col-sm-12 col-md-12 col-xl-12 bg-white" name="buscar"  type="search" placeholder="Buscar..." aria-label="Buscar..." >
                                                    
                                            
                                            </form>
                                        </div>
                                </div>
                                
                                    
                                <div class="col-1 col-sm-2 col-md-4 col-xl-4">
                                <ul class="navbar-nav">  
                                    <div class="col-12  col-sm-12 col-md-12 col-xl-12">                                      
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                        <span class="mif-list  mif-1x pr-2" style="color: white;"> </span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Authentication Links -->
                                 @isset( Auth::user()->rol )
                                        <li class="nav-item">
                                            <a class="title nav-link text-white" href="{{ route('cargarmanga') }}">{{ ('Agregar Manga') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="title nav-link text-white" href="{{ route('crearproducto') }}">{{ ('Agregar Producto') }}</a>
                                        </li>
                                @endisset
                                        <li class="nav-item">
                                        <li class="nav-item">
                                        <a class="title nav-link text-white" href="{{ route('carrito') }}">{{ __('Carrito') }}</a>
                                        </li>
                                            <a class="title nav-link text-white" href="{{ route('tienda') }}">{{ __('Tienda') }}</a>
                                        </li>
                                        <div class="search dropdown ">
                                            <form action="/directorio" method="get" id="results" autocomplete="off" data-toggle="dropdown" class="">
                                            </form>
                                        </div>                        
                                    @guest
                                        <li class="nav-item">
                                            <a class=" title nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="title nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('perfil', Auth::id()) }}">
                                                {{ __('Mi Perfil') }}<span class="caret"></span>
                                                </a>
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
                                    </div>
                                    </div> 
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </nav>     
        <main>
            @yield('content')
        </main>

</div>

    @yield('scripts')

</body>
<div class="footbar" style="background-color:black">
    <nav class="navbar navbar-expand-lg" style="background-color:black">
        <figure class="navbar-brand logo"><img src="/images/logo(oscuro).png" alt="" width="100%"  class="col-3"></figure>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftnav" aria-controls="ftnav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <h4 style="color:white">2019 tiomanga.com</h4>
        <div class="collapse navbar-collapse" id="ftnav" style="background-color:black">

            <ul class="menu-ft navbar-nav mr-auto">
            </ul>
            <ul class="social-ft navbar-nav">
                <li class="nav-item"><a class="nav-link fa-twitter fab" href="https://twitter.com/TioAnime5" rel="nofollow" target="_blank"></a></li>
                <li class="nav-item"><a class="nav-link fa-facebook-f fab" href="https://www.facebook.com/tioanimeonline/" rel="nofollow" target="_blank"></a></li>
                <li class="nav-item"><a class="nav-link fa-youtube fab" href="https://www.youtube.com/channel/UC71wO3noGfhEx8WBcy9emLw/" rel="nofollow" target="_blank"></a></li>
            </ul>
        </div>

    </nav>


</div>

</html>
