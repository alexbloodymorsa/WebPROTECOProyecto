@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <link href="https://fonts.googleapis.com/css?family=Oxygen|Rufina&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="main_sesion">
            <div class="card titulo bienvenidos">
                <div class="container haztucuenta">
                    <h3 >Inicio de sesión</h3>
                </div>
            </div>      
            <!-- form -->
            <div class="card text-black mb-3 tarea mx-auto form" style="background-color:#45046a">
              <form class="text-white" method="POST" action="{{route('login')}}">
                @csrf
                <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
              <label for="password">Contraseña</label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember"><small>Recordar mis datos</small></label>
        </div> 
        <button type="submit" class="btn btn-primary">
            {{ __('Iniciar sesión') }}
        </button>
        <br>
        <br>
        @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('¿Olvidaste tu contraseña?') }}
        </a>
        @endif
    </form>
</div>      
</div>
</main>

</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
@endsection
