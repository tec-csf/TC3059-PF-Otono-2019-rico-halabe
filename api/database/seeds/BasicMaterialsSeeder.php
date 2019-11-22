<?php

use Illuminate\Database\Seeder;

class BasicMaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('basic_materials')->insert([
        'name' => 'Agua Dulce',
        'water_type' => 'sweet',
        'material' => 'water',
        'description' => 'Pequeño Ecosistema creado para albergar peces que normalmente encontraríamos en ríos, lagos y lagunas de todo el mundo.
Consta de lo siguiente:
Acuario con sistema de filtración.
Mueble o gabinete para acuario.
Sustrato o grava natural.
Decoración (artificial o natural).
Tapa con iluminación.
Peces Tropicales.',
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('basic_materials')->insert([
        'name' => 'Agua Salada',
        'water_type' => 'salty',
        'material' => 'water',
        'description' => 'Este Ecosistema por su complejidad Biológica puede albergar una cantidad menor de peces a diferencia del de agua dulce; pero se ve compensado por la belleza de los mismos.
Consta de lo siguiente:
Acuario con sistema de Filtración.
Mueble o gabinete para acuario.
Aragonita como sustrato.
Piedra base como decoración y base biológica.
Sistemas de filtración especiales para mantener un acuario sano y sin problemas.
Tapa con iluminación.
Peces Marinos.',
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('basic_materials')->insert([
        'name' => 'Aragonita',
        'water_type' => 'salty',
        'material' => 'floor',
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('basic_materials')->insert([
        'name' => 'Sello de Colores',
        'water_type' => 'sweet',
        'material' => 'floor',
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('basic_materials')->insert([
        'name' => 'Cacahuate',
        'water_type' => 'sweet',
        'material' => 'floor',
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('basic_materials')->insert([
        'name' => 'Grano de Oro',
        'water_type' => 'sweet',
        'material' => 'floor',
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('basic_materials')->insert([
        'name' => 'Gravilla',
        'water_type' => 'sweet',
        'material' => 'floor',
        'created_at' => now(),
        'updated_at' => now()
      ]);
    }
}
