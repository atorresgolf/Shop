<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Carrito;


class CarritoProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('*',function($view){
    
            $carrito_id = Session()->get('carrito_id');

            //$carrito = Carrito::buscarOCrearPorSesionId(null);
            $carrito = Carrito::buscarOCrearPorSesionId($carrito_id);

            //\Session::put("carrito_id", $carrito->id);
            Session()->put('carrito_id', $carrito->id);
            //Session()->Flash('carrito', $carrito);
            $view->with('carrito', $carrito);

        });
    }
}
