@extends('layouts.app')
@section('content')

	<div class="card titulo bienvenidos">
		<div class="container">
			<h2 class="text-left d-inline-block">Perfil del autor</h2>
		</div>
	</div><br>
	<div class="container tareas tareas-admin">
		@foreach($posts as $post)
		<div class="card text-black mb-3 tarea" style="background-color:#bc658d">
			<div class="card-header">
				<h3>{{$post->user->name}}</h3>
			</div>
			<div class="card-body">
				{!!$post->post!!}
			</div>
			<div class="card-footer">
				<h6><b> Nacionalidad: </b></h6>
				<p class="card-text">{{$post->nationality}}</b>
				<h6><b> Edad: </b></h6>
				{{$post->age}}</p>
			</div>
		</div>
		@endforeach
	</div>

@endsection