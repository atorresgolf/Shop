<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearFkMarcasCategoriasProveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('productos',function(Blueprint $table){
            $table->foreign('id_marca')->references('id')->on('marcas');
            $table->foreign('id_proveedor')->references('id')->on('proveedor');
            $table->foreign('id_categoria')->references('id')->on('categorias');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
        //
    }
}
