<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/mediaqueries.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Oxygen|Rufina&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <!-- nav-->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#9a1f40">
            <!-- <a class="navbar-brand" href="#"><img src="{{asset('img/icons/musica.png')}}" alt=""></a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <!-- Si el usuario no está autenticado -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registro</a>
                    </li>
                    <!-- Si el usuario está autenticado -->
                    @else
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{url('grades/'.Auth::user()->id)}}">Calificaciones</a>
                    </li> -->
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('resenas/')}}">Reseñas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('noticias/')}}">Noticias</a>
                    </li>
                    <li class="nav-item dropleft">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- Esto es para mostrar el nombre del usuario en lugar del dropdown -->
                            {{Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <!-- Auth es para un usuario que ya está autenticado -->
                            @if(Auth::user()->admin)
                            <a class="dropdown-item" href="{{route('admintareas.index')}}">Admin</a>
                            @endif
                            <!-- <a class="dropdown-item" href="#">Mi Perfil</a> -->
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"> Cerrar sesión </a>  
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main> 
    <footer style="background-color:#9a1f40">
        <div class="container text-white text-center pt-2">
            <p class="text-white">alex.barreiro.v@gmail.com</p>        
        </div>
    </footer>
</body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v7.0"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</html>