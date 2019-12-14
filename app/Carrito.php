<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Carrito extends Model
{
    //

    //Mass Assignment
    protected $fillable =['status'];

    public $table = "carritos";
    //public $primaryKey = "id";
    //public $timestamp = false;
    public $guarded = [];

    public function enCarrito(){
        return $this->hasMany('App\EnCarrito');
    }

    public function productos(){
        return $this->belongsToMany('App\Producto', 'en_carrito');
    }

    public function cantidadProducto(){
        //return $carrito = 5;
        //return $this->id;
        return $this->productos()->count();
    }

    public static function buscarOCrearPorSesionId($carrito_id){
        if($carrito_id)
            // Busca el carrito de compras con este ID
            return Carrito::buscarPorSesion($carrito_id);
            else
            // Crear un carrito de compras
            return Carrito::crearSinSesion();
    }

    public static function buscarPorSesion($carrito_id){
        return Carrito::find($carrito_id);
    }

    public static function crearSinSesion(){
        return Carrito::create([
            'status' => 'incompleto'
        ]);
    }
}
