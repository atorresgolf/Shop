<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaEnCarrito extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('en_carrito', function (Blueprint $table) {

            $table->bigIncrements('id');



            $table->Integer("producto_id")->unsigned();

            $table->Integer("carrito_id")->unsigned();



            $table->foreign("producto_id")->references("id")->on("productos");

            $table->foreign("carrito_id")->references("id")->on("carritos");



            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('en_carrito');
        //
    }
}
