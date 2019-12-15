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
        $productos = Producto::all();

        // dd($productos);
        $vac = compact('productos');
        return view("productos", $vac);

    }

    public function products(Request $req)
    {
        $productos = Producto::all();

          // dd($productos);
        $vac = compact('productos');
        return view("product", $vac);
    }

    public function prodcat(Request $req)
    {
        $productos = Producto::all();

        // dd($productos);
        $vac = compact('productos');
        return view("prod", $vac);//la mando a vista con cat
    }
    public function hierro(Request $req)
    {
        $productos = Producto::all();

        // dd($productos);
        $vac = compact('productos');
        return view("hierro", $vac); //pruebo x categoria anda
    }
    public function driver(Request $req)
    {
        $productos = Producto::all();

        // dd($productos);
        $vac = compact('productos');
        return view("driver", $vac); //pruebo x categoria anda
    }
    public function putter(Request $req)
    {
        $productos = Producto::all();

        // dd($productos);
        $vac = compact('productos');
        return view("putter", $vac); //pruebo x categoria anda
    }
    public function accesorio(Request $req)
    {
        $productos = Producto::all();

        // dd($productos);
        $vac = compact('productos');
        return view("accesorio", $vac); //pruebo x categoria anda
    }
   
   /* public function store(Request $req)
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
    }*/

    public function agregar(Request $req)
    {
        $reglas = [
            'nombre' => 'string|min:0|max:100',
            'descripcion' => 'string|min:0|max:255',
            'precio' => 'string|min:|max:10',
            'stock' => 'string|min:0|max:10' ,
            //'id_marca' => 'integer|min:0',
            //'id_proveedor' => 'integer|min:0',
            'nombre_categoria' => 'string|min:3|max:100',
            'nombre_marca' => 'string|min:3|max:100',

            'poster' => 'file',
            'poster1' => 'file',
            'poster2' => 'file'
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
        
        $ruta1 = $req->file('poster1')->store('public');
        $nombreArchivo1 = basename($ruta1);

        $productoNuevo->poster1 = $nombreArchivo1;

        $ruta2 = $req->file('poster2')->store('public');
        $nombreArchivo2 = basename($ruta2);

        $productoNuevo->poster2 = $nombreArchivo2;



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


    public function update(Request $req, $id)
    {
        $producto = Producto::find($id);

        $reglas = [
            'nombre' => 'string|min:0|max:100',
            'descripcion' => 'string|min:0|max:255',
            'precio' => 'string|min:|max:10',
            'stock' => 'string|min:0|max:10',
            //'id_marca' => 'integer|min:0',
            //'id_proveedor' => 'integer|min:0',
            'nombre_categoria' => 'string|min:3|max:100',
            'nombre_marca' => 'string|min:3|max:100',

            'poster' => 'file',
            'poster1' => 'file',
            'poster2' => 'file'
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


        $producto->nombre = $req['nombre'];
        $producto->descripcion = $req['descripcion'];
        $producto->precio = $req['precio'];
        $producto->stock = $req['stock'];
        $producto->nombre_categoria = $req['nombre_categoria'];
        $producto->nombre_marca = $req['nombre_marca'];
        
        if ($req->poster) {
            $req->validate([
                'poster' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',

            ]);
            $ruta = $req->file('poster')->store('public');
            $nombreArchivo = basename($ruta);

            $producto->poster = $nombreArchivo;

        }
        if ($req->poster1) {
            $req->validate([
                'poster1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',

            ]);
            $ruta1 = $req->file('poster1')->store('public');
            $nombreArchivo1 = basename($ruta1);

            $producto->poster1 = $nombreArchivo1;
        }
        if ($req->poster2) {
            $req->validate([
                'poster2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',

            ]);
            $ruta2 = $req->file('poster2')->store('public');
            $nombreArchivo2 = basename($ruta2);

            $producto->poster2 = $nombreArchivo2;
        }

        $producto->save();

        return redirect('/productos');


    }
    
    public function borrar(Request $form)
    {
        $id = $form['id'];

        $producto = Producto::find($id);

        $producto->delete();
        return redirect('/productos');
    }
    public function detalle($id)
    {

        //$vac= compact("id");

        $producto = Producto::find($id);
        $vac = compact('producto');

        return view("detalleproductos", $vac);
    }


    public function search()
    {
        $buscar = $_GET['texto'];

        $productos = Producto::where('nombre', 'like', "%$buscar%")
            ->orwhere('descripcion', 'like', "%$buscar%")->get();

        $vac = compact('productos');

        return view('productos', $vac);
    }

}
