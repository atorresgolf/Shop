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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'IndexController@index')->name('index');
Route::get('/header', 'IndexController@header')->name('header');

Route::get('/productos', 'ProductosController@listado');

