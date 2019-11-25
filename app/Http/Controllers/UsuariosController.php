<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuariosController extends Controller
{
    //
public function usuario()
{
        $usuario = Auth::user();
        $vars = compact('usuario');

        return view('usuario', $vars);
}

}
