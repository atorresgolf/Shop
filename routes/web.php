<?php

//use Symfony\Component\Routing\Route;

use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;
Auth::routes();
Auth::routes(['register' => false]);
Auth::routes();
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/index', function () {
    return view('index');
});

Route::get('/drivers', function () {
    return view('drivers');
});

Route::get('/hierros', function () {
    return view('hierros');
});

Route::get('/putters', function () {
    return view('putters');
});

Route::get('/accesorios', function () {
    return view('accesorios');
});

Route::get('/academia', function () {
    return view('academia');
});
Route::get("/usuario", "UsuariosController@usuario")->middleware('auth');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'IndexController@index')->name('index');
Route::get('/header', 'IndexController@header')->name('header');

Route::get('/productos', 'ProductosController@listado');

Route::get('/agregarproducto', function () {
    return view('agregarproducto');
});

Route::post('/agregarproductos', 'ProductosController@agregar');
Route::get('/agregarproductos', function () {
    return view('agregarproductos');
});
Route::post('/agregarproductos1', 'ProductosController@agregar');
Route::get('/agregarproductos1', function () {
    return view('agregarproductos1');
});

Route::post('/agregarproducto', 'ProductosController@agregar');

Route::post('/borrarProducto', 'ProductosController@borrar');
Route::get('/producto/{id}', 'ProductosController@detalle'); //consulta detalle
