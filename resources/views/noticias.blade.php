@extends('layouts.app')
@section('content')

		<div class="card titulo bienvenidos">
			<div class="container">
				<h2>Noticias</h2>
			</div>
		</div> 
		<div class="container tareas">
			<br>
		    <!-- card bien -->
		    @foreach($tarea as $tarea)
		    <div class="d-none">{{$bandera=0}}</div>
		      @foreach($entregas as $entrega)
		        @if($entrega->tarea_id==$tarea->id)
		        <p class="d-none">{{$bandera=1}}</p>
		        @endif
		      @endforeach
		    @if($tarea->filetype=='Noticia')
		    <div class="card text-black mb-6 tarea" style="background-color:#bc658d">
		      <div class="card-header">
		        <div class="container-fluid">
		          <div class="row">
		            <div class="col-12 col-sm-6 text-center">
		              <h3 class="card-title">{{$tarea->title}}</h3>
		            </div>
		            <div class="col-12 col-sm-3 text-left">
		              <h6>Noticia</h6>
		             </div>
		            <div class="col-12 col-sm-3 text-left text-md-right">
		              <a href="{{url('articulo/'.$tarea->id)}}">
		                <button type="button" class="btn bg-light">
		                  Ver completo
		                </button>
		              </a>
		              <a href="{{url('perfiles/'.$tarea->author)}}">
		                <button type="button" class="btn bg-light">
		                  Ver autor
		                </button>
		              </a>
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="card-body">
		        <h6><b> Sinopsis: </b></h6>
		        <p class="card-text">{{$tarea->description}}</b>
		        <h6><b> Autor: </b></h6>
		        {{$tarea->author}}</p>
		      </div>
		    </div>
		    <br>
		    <br>
		    @endif
		    @endforeach
	</div>

	<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="7" data-width=""></div>

@endsection