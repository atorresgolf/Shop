<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregoColumnasTablaUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('dni',11)->nullable();
            $table->date('fechaNac')->nullable();
            $table->string('domicilio', 100)->nullable();
            $table->string('localidad', 45)->nullable();
            $table->string('provincia', 45)->nullable();
            $table->string('tipoUsuario', 45)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('dni');
            $table->dropColumn('fechaNac');
            $table->dropColumn('domicilio');
            $table->dropColumn('localidad');
            $table->dropColumn('provincia');
            $table->dropColumn('tipoUsuario');

        });
    }
}
