<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Carrito;
use App\EnCarrito;

class EnCarritoController extends Controller
{
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carrito_id = Session()->get('carrito_id');

        $carrito = Carrito::buscarOCrearPorSesionId($carrito_id);

        //dd($request->all());

        $response = EnCarrito::create([
            
            "carrito_id" => $carrito->id,
            "producto_id" => $request->producto_id
        ]);
        if($response){
            return redirect('driver');
        }else{
            return back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($producto_id)
    {
        EnCarrito::destroy($producto_id);
        return redirect('carrito');
    }
}
