@extends('layouts.app')

@section('content')
<div class="card titulo bienvenidos">
    <div class="container">
        <h1 class="d-none d-sm-block">Blog Musical</h1>
    </div>
</div>

<div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner carr">
    <div class="carousel-item active">
      <img src="{{asset('img/users/nina_simone.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/users/ariel_pink.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/users/spinetta.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
<br><br>

<div class="container tareas">
    <h4 class="p-2 d-none d-sm-block">Publicaciones:</h4>
    <!-- card bien -->
    @foreach($tarea as $tarea)
    <div class="d-none">{{$bandera=0}}</div>
      @foreach($entregas as $entrega)
        @if($entrega->tarea_id==$tarea->id)
        <p class="d-none">{{$bandera=1}}</p>
        @endif
      @endforeach
    @if($bandera==0)
    <div class="card text-black mb-3 tarea" style="background-color:#bc658d">
      <div class="card-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-sm-6 text-left">
              <h3 class="card-title">{{$tarea->title}}</h3>
            </div>
            <div class="col-12 col-sm-3 text-left">
              <h6>Categoría: <b>{{$tarea->filetype}}</b>
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
    @endif
    @endforeach
    <br>
    <blockquote class="twitter-tweet"><p lang="en" dir="ltr">Tune in to <a href="https://twitter.com/boilerroomtv?ref_src=twsrc%5Etfw">@BoilerRoomTV</a> tomorrow to hear selections from <a href="https://twitter.com/Damonalbarn?ref_src=twsrc%5Etfw">@DamonAlbarn</a>’s new project <a href="https://t.co/bdoWfysiuQ">https://t.co/bdoWfysiuQ</a></p>&mdash; Pitchfork (@pitchfork) <a href="https://twitter.com/pitchfork/status/1261683597452423168?ref_src=twsrc%5Etfw">May 16, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
    <br>
    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FPitchfork%2Fposts%2F10158230367061000&width=500" width="500" height="492" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
</div>
@endsection
