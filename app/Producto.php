<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    public $guarded = [];
    // public $timestamps = false;

    public function marca()
    {
        return $this->belongsTo('App\Marca', 'id_marca');
    }
    public function categoria()
    {
        return $this->belongsTo('App\Categoria', 'id_categoria');
    }
    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor', 'id_proveedor');
    }
}
