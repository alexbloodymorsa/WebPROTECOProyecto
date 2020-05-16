@extends('layouts.app')
@section('content')

		<div class="card titulo bienvenidos">
			<div class="container">
				<h2>{{$tarea->title}}</h2>
			</div>
		</div> 
		<div class="card-body">
		  <h6><b> Sinopsis: </b></h6>
		  <p class="card-text">{{$tarea->description}}</b>
		  <h6><b> Por: </b></h6>
		  {{$tarea->author}}
		<br><br>{{$tarea->article}}</p>

		</div>
	</div>

@endsection