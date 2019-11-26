<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    public $guarded = [];
    public $table = 'proveedor';

    public function productos()
    {
        return $this->hasMany('App\Producto', 'id_proveedor');
    }
    //
}
