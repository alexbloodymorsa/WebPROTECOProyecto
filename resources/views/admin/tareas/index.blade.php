@extends('layouts.admin')
@section('content')

<div class="card titulo bienvenidos">
	<div class="container">
		<h2 class="text-left d-inline-block">Publicaciones</h2>
		<a href="{{route('admintareas.create')}}">
			<button type="button" class="btn float-right" style="background-color:#bc658d">Agregar Artículo</button>
		</a>
	</div>
</div><br>
<div class="container tareas tareas-admin">
	@foreach($tareas as $tarea)
	<div class="card text-black mb-3 tarea" style="background-color:#bc658d">
		<!-- Crear una variable para el color el color está aquí arriba. Hacer variable en el controller. -->
		<div class="card-header">
			<h2 class="card-title d-inline ">{{ $tarea->title }}</h2>
			<!-- form -->
			<!-- <form action="{{route('admintareas.destroy',$tarea->id)}}" method="POST">
				@csrf
				@method('DELETE')
				<a href="{{route('admintareas.show', $tarea->id)}}"><button type="button" class="btn btn-light float-right">Ver</button></a>
				<a href="{{route('admintareas.edit', $tarea->id)}}"><button type="button" class="btn btn-light float-right">Editar</button></a>
				<a><button type="submit" class="btn btn-light float-right">Eliminar</button></a>
			</form> -->
			<h6>Autor: <b>{{ $tarea->author }}</b></h6>
		</div>
		<div class="card-body">
			<h6><b> Sinopsis:</b></h6>
			<p class="card-text">{{ $tarea->description }}</p>
			<p><b>  Categoría: </b><span>{{ $tarea->filetype }}</span></p>
			@if(! $tarea->file==NULL)
				<p class="d-inline"><b> Archivo auxiliar: </b></p>
				<a target="_blank" href="{{ asset("tareas/$tarea->file") }}" class="text-body">{{ $tarea->file }}</a>
			@endif
		</div>
	</div>
	@endforeach
</div>
@endsection