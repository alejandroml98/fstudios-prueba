<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert([
            'nombre_rol' => 'Admin',
            'created_at'=> now(),
            'updated_at' => now(),                        
        ]);           
        DB::table('rols')->insert([
            'nombre_rol' => 'Usuario',                        
            'created_at'=> now(),
            'updated_at' => now(),
        ]);

    }
}
