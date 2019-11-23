<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;


class productosController extends Controller
{
    //
    public function listado()
    {
        $productos = Producto::all();

        // dd($productos);
        $vac = compact('productos');
        return view("productos", $vac);

    }
}
