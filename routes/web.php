<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('grades/{id}','Homecontroller@grades');
Route::get('articulo/{id}','Homecontroller@articulos');
Route::get('perfiles/{name}','Homecontroller@perfiles');
Route::get('resenas','Homecontroller@resenas');
Route::get('noticias','Homecontroller@noticias');

Route::middleware(['admin'])->group(function(){
	Route::resource('admintareas','TareaController');
	Route::resource('posts','PostController');
});


Route::resource('entrega','EntregaController');
Route::post('ckeditor/image_upload', 'PostController@upload')->name('upload');


// Route::get('suma', function(){
// 	return 5+2;
// });

// Route::get('saludo/{id?}', function($id=null){
// 	return "Hola usuario: ".$id;
// });

// Route::get('bienvenido', 'EjemploController@index')

// class EjemploController extends Controller