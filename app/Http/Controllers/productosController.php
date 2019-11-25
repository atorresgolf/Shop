<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;


class productosController extends Controller
{
    //
    public function listado(Request $req)
    {
        $productos = producto::all();

        // dd($productos);
        $vac = compact('productos');
        return view("productos", $vac);

    }
    public function agregar(Request $req)
    {
        $reglas = [
            'nombre' => 'string|min:3|unique:movies,title',
            'descripcion' => 'string|min:0|max:',
            'precio' => 'integer|min:0',
            'stock' => 'integer|min:0' ,
            'id_marca' => 'integer|min:0',
            'id_proveedor' => 'integer|min:0',
            'nombre_categoria' => 'string|min:3',
            'nombre_marca' => 'string|min:3',

            'poster' => 'file'
        ];
        $mensajes = [
            'string' => 'El campo :attribute debe ser un texto',
            'min' => 'El campo :attribute tiene un minimo de :min',
            'max' => 'El campo :attribute tiene un maximo de :max',
            'date' => 'El campo :attribute debe ser fecha',
            'numeric' => 'El campo :attribute debe ser un numero',
            'integer' => 'El campo :attribute debe ser un numero entero',
            'unique' => 'El campo :attribute se encuentra repetido'
        ];

        $this->validate($req, $reglas, $mensajes);

        $productoNuevo = new Producto();
        //guardamos archivo
        $ruta = $req->file('poster')->store('public');
        $nombreArchivo = basename($ruta);

        $productoNuevo->poster = $nombreArchivo;

        $productoNuevo->title = $req['title'];
        $productoNuevo->awards = $req['awards'];
        $productoNuevo->rating = $req['rating'];
        $productoNuevo->release_date = $req['release_date'];

        //grabar
        $productoNuevo->save();

        return redirect('/productos');
    }

    public function borrar(Request $form)
    {
        $id = $form['id'];

        $producto = Producto::find($id);

        $producto->delete();
        return redirect('/productos');
    }

}
