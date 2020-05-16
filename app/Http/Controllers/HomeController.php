<?php

namespace App\Http\Controllers;
use App\Tarea;
use App\Entrega;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id=Auth::user()->id;
        $entregas=Entrega::where('user_id', $id)->get();
        $tareas=Tarea::all();
        $bandera=0;
        return view('home', ['tarea'=>$tareas, 'entregas'=>$entregas, 'bandera'=>$bandera]);
    }

    public function grades($id){
        $entregas=Entrega::all();
        $user=User::findOrFail($id);
        return view('grades',['entregas'=>$entregas, 'user'=>$user]);
    }

    public function resenas()
    {
        $id=Auth::user()->id;
        $entregas=Entrega::where('user_id', $id)->get();
        $tareas=Tarea::all();
        $bandera=0;
        return view('resenas', ['tarea'=>$tareas, 'entregas'=>$entregas, 'bandera'=>$bandera]);
    }

    public function noticias()
    {
        $id=Auth::user()->id;
        $entregas=Entrega::where('user_id', $id)->get();
        $tareas=Tarea::all();
        $bandera=0;
        return view('noticias', ['tarea'=>$tareas, 'entregas'=>$entregas, 'bandera'=>$bandera]);
    }

    public function articulos($id){
        $tareas=Tarea::findOrFail($id);
        return view('articulo',['tarea'=>$tareas]);
    }

    public function perfiles($name){
        $id=User::where('name', $name)->get();
        $posts=Post::findOrFail($id);
        return view('perfil',['posts'=>$posts]);
    }
}
