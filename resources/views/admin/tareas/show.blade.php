@extends('layouts.admin')
@section('content')
<!-- Hacer de tara -->
<div class="card titulo bienvenidos">
	
</div><br>
<div class="container tareas tareas-admin">
	<div class="card text-black mb-3 tarea amarillo" >
		<div class="card-header">
			<h2 class="card-title d-inline ">{{$tarea->title}}</h2> 
			<!-- Es hacer lo de arriba cambiar variables y así -->
			<!-- form -->
			<form action="{{route('admintareas.destroy',$tarea->id)}}" method="POST">
				@csrf
				@method('DELETE')
				<a href="{{route('admintareas.edit', $tarea->id)}}"><button type="button" class="btn btn-light float-right">Editar</button></a>
				<a><button type="submit" class="btn btn-light float-right">Eliminar</button></a>
			</form>
			<h6>Fecha de Entrega: <b>{{ $tarea->date }}</b> a las: <b>{{ $tarea->time }}</b></h6>
		</div>
		<div class="card-body">
			<h6><b> Descripción:</b></h6>
			<p class="card-text">{{ $tarea->description }}</b><span>
			</span></p>
			<p><b>  Tipo de archivo permitido: </b><span>{{ $tarea->filetype }}</span></p>
			@if(! $tarea->file==NULL)
				<p class="d-inline"><b> Archivo auxiliar: </b></p>
				<a target="_blank" href="{{ asset("tareas/$tarea->file") }}" class="text-body">{{ $tarea->file }}</a>
			@endif
		</div>
	</div>
</div>

<br>
		<div class="container"> 
			<h3 class="text-left pb-2 pb-md-3">Entregas</h3>
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">Usuario</th>
						<th scope="col">Archivo</th>
						<th scope="col">Calificación</th>
					</tr>
				</thead>
				<tbody>
					@foreach($entregas as $entrega)
					@if($entrega->tarea_id==$tarea->id)
					<tr>
						<th scope="row">{{ $entrega->user->name}}</th>
						<td><a target="_blank" href="{{asset("entregas/$entrega->file")}}">{{$entrega->file}}</a></td>
						<td>
							<form action="{{route('entrega.update', $entrega->id)}}" method="POST">
							@method('PATCH')
							@csrf
								<input type="number" min="0" max="10" name="grade" value="{{$entrega->grade}}" 
								>
								<button type="submit" class="btn btn-primary btn-sm">Guardar</button>
							</form>
						</td>
					</tr>
					@endif
					@endforeach
				</tbody>
			</table>
		</div>

@endsection 