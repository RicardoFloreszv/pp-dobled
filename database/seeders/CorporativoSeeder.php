<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CorporativoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('corporativos')->insert([
            'nombre_corporativo' => 'Agua',
            'direccion' => 'colonia agua #50',
            'logo' => 'logoagua.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('corporativos')->insert([
            'nombre_corporativo' => 'Fuego',
            'direccion' => 'colonia fuego #20',
            'logo' => 'logofuego.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('corporativos')->insert([
            'nombre_corporativo' => 'Aire',
            'direccion' => 'colonia aire #80',
            'logo' => 'logoaire.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('corporativos')->insert([
            'nombre_corporativo' => 'Tierra',
            'direccion' => 'colonia tierra #90',
            'logo' => 'logotierra.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
    }
}
