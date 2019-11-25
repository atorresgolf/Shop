<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Producto;
//use Auth;
//use Illuminate\Support\Facades\Validator;



class productosController extends Controller
{
    //
    public function listado(Request $req)
    {
<<<<<<< HEAD
        $productos = producto::all();
=======
        $productos = Producto::all();
>>>>>>> master

        // dd($productos);
        $vac = compact('productos');
        return view("productos", $vac);

    }
    public function store(Request $req)
    {
        $producto = new Producto();
        $producto->nombre = $req['nombre'];
        $producto->descripcion = $req['descripcion'];
        $producto->stock = $req['stock'];
        $producto->precio = $req['precio'];
        $producto->nombre_marca = $req['nombre_marca'];
        $producto->nombre_categoria = $req['nombre_categoria'];
        $ruta = $req->file('poster')->store('public');
        $nombreArchivo = basename($ruta);

        $producto->poster = $nombreArchivo;

        $producto->save();

        return redirect('/productos');
    }

    public function agregar(Request $req)
    {
        $reglas = [
            'nombre' => 'string|min:3|max:45',
            'descripcion' => 'string|min:0|max:45',
            'precio' => 'string|min:|max:45',
            'stock' => 'string|min:0|max:45' ,
            //'id_marca' => 'integer|min:0',
            //'id_proveedor' => 'integer|min:0',
            'nombre_categoria' => 'string|min:3|max:45',
            'nombre_marca' => 'string|min:3|max:45',

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

        $productoNuevo->nombre = $req['nombre'];
        $productoNuevo->descripcion = $req['descripcion'];
        $productoNuevo->precio = $req['precio'];
        $productoNuevo->stock = $req['stock'];
        $productoNuevo->nombre_categoria = $req['nombre_categoria'];
        $productoNuevo->nombre_marca = $req['nombre_marca'];


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
