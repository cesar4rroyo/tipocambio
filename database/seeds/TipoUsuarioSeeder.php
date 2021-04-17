<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipousuario')->insert([
            'descripcion' => 'Administrador Principal',
        ]);
        DB::table('tipousuario')->insert([
            'descripcion' => 'Operador',
        ]);
        DB::table('tipousuario')->insert([
            'descripcion'=>'Cliente'
        ]); 
    }
}
