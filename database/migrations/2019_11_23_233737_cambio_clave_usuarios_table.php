<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CambioClaveUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
       /* Schema::table('usuarios', function (Blueprint $table) {
            $table->renameColumn('clave', 'password');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::table('usuarios', function (Blueprint $table) {
            $table->renameColumn('password', 'clave');
        });*/
        //
    }
}
