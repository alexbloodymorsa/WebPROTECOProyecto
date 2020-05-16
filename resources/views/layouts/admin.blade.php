
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Admin Blog</title>
	<link rel="stylesheet" href="{{asset('css/styles.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/mediaqueries.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Oxygen|Rufina&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<!-- nav-->
		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#9a1f40">
			<!-- <a class="navbar-brand" href="#"><img src="{{asset('img/icons/codeblanco.png')}}" alt=""></a> -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="{{route('admintareas.index')}}">Publicaciones</a>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link" href="#">Usuarios</a>
					</li> -->
					<li class="nav-item">
						<a class="nav-link" href="{{route('posts.index')}}">Autores</a>
					</li>
					<li class="nav-item dropleft">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							{{Auth::user()->name}}
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{url('/')}}">Vista normal</a>
							<!-- <a class="dropdown-item" href="#">Mi Perfil</a> -->
							 <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"> Cerrar sesión </a>  
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
						</div>
					</li>
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
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</html>