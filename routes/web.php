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
    return view('index');
});

route::get('/carrito', 'CarritoController@encarrito');

Route::resource('productos','productosController');
/*-----RUTAS PARA SOLAMENTE USAR DEL MODELO EnCarritoController, store y destroy-----*/
Route::resource('EnCarrito', 'EnCarritoController', [
    'only' => ['store', 'destroy']
]);

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

//Route::get('/agregarproducto', function () {
//    return view('agregarproducto');
//});

//Route::post('/agregarproductos', 'ProductosController@agregar');
//Route::get('/agregarproductos', function () {
//   return view('agregarproductos');
//});

//Route::post('/agregarproducto', 'ProductosController@agregar');

Route::delete('/borrarProducto/{id}', 'productosController@borrar');
//Route::post('/borrarProducto', 'ProductosController@borrar');
Route::delete('/borrarProducto{id}', 'ProductosController@borrar');
Route::get('/producto/{id}', 'ProductosController@detalle'); //consulta detalle

route::get('productos', 'productosController@listado');

Route::get('tabla', function () {
    return view('plantilla_tablas');
});


Route::get('detalle', function () {
    return view('detalleproductos');
});

Route::get('preguntasfrecuentes', function () {
    return view('preguntasfrecuentes');
});

Route::get('contacto', function () {
    return view('contacto');
});









Route::get("/usuario/{id}", "UsuariosController@perfil");
Route::get("/perfilusuario", "UsuariosController@perfilusuario");

//Route::get("/usuario/{id}/edit", "UsuariosController@edit");
Route::post("/perfilusuario", "UsuariosController@update");

Route::get('profile', 'UserController@profile');//funciona para subir foto perfil
Route::post('profile', 'UserController@update_avatar'); //funciona cambiar foto


Route::get('prod', 'productosController@prodcat');// funciona general



Route::get('/categoria/{id}', 'categoriasController@detalle');//funciona para redireccionar
//hierro, driver, putter

Route::get('prodhierro', 'productosController@prodhierro');// funciona general

Route::get('/hierro', 'productosController@hierro');//funciona

Route::get('/driver', 'productosController@driver');//funciona
Route::get('/putter', 'productosController@putter');//funciona
Route::get('/accesorio', 'productosController@accesorio'); //funciona

//Route::get('index', 'CarritoController@index'); //ruta con carrito


//Route::get("/altaproductos", function(){
 //   return view('altaProductos');
//});
//Route::get("/usuario/{id}/edit", "UsuariosController@edit");
//Route::post("/altaproductos", "productosController@agregar");

Route::post('/agregarproductos1', 'ProductosController@agregar'); //funciona
Route::get('/agregarproductos1', function () {
    return view('agregarproductos1');
}); //funciona

//Route::get('/modifProducto', 'productosController@modificar'); //funciona
//Route::post('/modifProducto', 'productosController@update'); //funciona

Route::get('/bajaProducto', 'productosController@baja'); //funciona

//Route::get('/modifProducto/{id}', function(){
//  return view ('modifProducto');
//});
Route::get('modifProducto/{id}', 'productosController@edit');

Route::put('modifProducto/{id}', 'productosController@update');
Route::get('/lista', function () {
    $productos = \App\Producto::orderBy('nombre')->get();
    return $productos;
});


//route::get('index', 'CarritoController@carrito');

Route::get('/driver', 'productosController@driver');//funciona


//Route::get('/detalleP/{id}', 'productosController@detalleP');//viene de listado
//Route::post('/borrarProducto', 'productosController@borrar');

//Route::get('/listado', 'productosController@listado');//basico direcciona a detalle.blade
//Route::post('/borrarProducto', 'productosController@borrar');
//Route::get('/detalle/{id}', 'productosController@detalle');

//Route::get('modificar/{id}', 'productosController@edit');//prueba funcion devuelve productos

//Route::put('/modificar/{id}', 'productosController@modif');//prueba funcion devuelve productos
