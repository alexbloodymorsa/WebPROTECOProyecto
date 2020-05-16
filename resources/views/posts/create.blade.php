@extends('layouts.admin')
@section('content')
<div class="main_regT container">
	<div class="card titulo bienvenidos">
		<div class="container">
			<h2>Perfil del autor</h2>
		</div>
	</div>	
		<!-- form -->
	<div class="form card text-black mb-3 tarea mx-auto container p-3" style="background-color:#45046a">
		<form class="text-white" method="POST" enctype="multipart/form-data" action="{{route('posts.store')}}">
			@csrf
			<div class="form-group">
					<label for="nationality">Nacionalidad: </label>
					<input type="text" class="form-control" name="nationality">
				</div>
				<div class="form-group">
					<label for="age">Edad: </label>
					<input type="integer" class="form-control" name="age">
				</div>
			<textarea name="post" id="post"></textarea>
			<button type="submit" class="btn">Guardar</button>
		</form>
	</div>	
</div>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'post', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection