@extends('layouts.admin')
@section('content')
	 
	<div class="main_regT container">
		<div class="card titulo bienvenidos">
			<div class="container">
				<h2>Ingresa tu artículo</h2>
			</div>
		</div>	  
		<!-- form -->
		<div class="form card text-black mb-3 tarea mx-auto container p-3" style="background-color:#45046a">
			<form class="text-white" method="POST" action="{{route('admintareas.store')}}" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="title">Título: </label>
					<input type="text" class="form-control" name="title">
				</div>
				<div class="form-group">
					<label for="author">Autor: </label>
					<input type="text" class="form-control" name="author">
				</div>
				<div class="form-group">
					<label for="description">Sinopsis: </label>
					<textarea class="form-control" rows="3" name="description"></textarea>
				</div>
				<div class="form-group">
					<label for="article">Artículo: </label>
					<textarea class="form-control" rows="7" name="article"></textarea>
				</div>
				<div class="form-group">
					<label for="filetype">Categoría</label>
					<input type="text" class="form-control" name="filetype">
				</div>
				<!-- <div class="form-group">
					<label>Fecha de Entrega</label><br>
					<label for="date">Día: </label>
					<input type="date" name="date" value="2020-04-13"
					min="2020-04-13" max="2020-06-13">
				</div>
				<div class="form-group">
					<label for="time">Hora: </label>
					<input type="time" name="time" value="00:00:00">
				</div>
				<div class="form-group">
					<label for="file">Archivo Opcional</label>
					<input type="file" name="file" enctype>
				</div> -->
				<br>
				<button type="submit" class="btn bg-white">Guardar</button>
			</form>
		</div>	
	</div>	
@endsection