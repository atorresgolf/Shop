<?php

namespace App\Http\Controllers;
use\App\categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    //
    
    public function listado()
    {
        return view('prod');
    }
    public function detalle($id)
    {

        //$vac= compact("id");

        $categoria= categoria::find($id);
        $vac = compact('categoria');

        return view("product", $vac);//funciona
    }
}
