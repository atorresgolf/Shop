<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Carrito;
use Session;

class CarritoController extends Controller{
    
    public function encarrito(){

        $carrito_id = Session()->get('carrito_id');

        $carrito = Carrito::buscarOCrearPorSesionId($carrito_id);

        $productos = $carrito->productos()->get();
        
        $total = $carrito->total();

        //$encarrito = $carrito->enCarrito()->get();

        return view("carrito", ["productos" => $productos, "total" => $total]);
        
    }
    public function destroy($producto_id)
    {
        Carrito::destroy($producto_id);
        return redirect('carrito');
    }
    
}
