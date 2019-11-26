<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(SeederBD::class);

        //para hacer un insert
       /* DB::table('marcas')->insert(
            [
                'nombre'=>'Taylor Made'
            ]
            );
        DB::table('marcas')->insert(
            [

                'nombre' => 'Callaway'
            ]
        );
        DB::table('marcas')->insert(
            [

                'nombre' => 'Titleist'
            ]
        );
       */
    }
}
