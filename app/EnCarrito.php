<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnCarrito extends Model
{
    //
    protected $fillable = [];

    public $table = "en_carrito";
    public $primaryKey = "id";
    //public $timestamp = false;
    public $guarded = [];
}
