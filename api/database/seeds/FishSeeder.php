<?php

use Illuminate\Database\Seeder;

class FishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('fish')->insert([
        'name' => 'Japonés o Goldfish',
        'water_type' => 'sweet',
        'description' => serialize([
          '1 Japonés Moro',
          '1 Japonés Esacma de Perla',
          '1 Japonés Sello Rojo',
          '4 Cebras Transgénica',
          '4 Guppys',
          '1 Gurami de Luz de Luna'
        ]),
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('fish')->insert([
        'name' => 'Tetras',
        'water_type' => 'sweet',
        'description' => serialize([
          '3 Tetra Fantasma Negro',
          '3 Rasbora Arlequín',
          '3 Tetra Pristela',
          '1 Gato Paleatus',
          '3 Tetra Gota de Sangre',
          '3 Sumatrano Tigre o Transgénico'
        ]),
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('fish')->insert([
        'name' => 'Tiburones',
        'water_type' => 'sweet',
        'description' => serialize([
          '1 Tiburón Arcoiris',
          '1 Tiburón Cola Roja',
          '4 Platy Coral',
          '2 Gurami Coliza Azúl',
          '3 Ángel Negro o Mármol',
          '1 Botia Payaso'
        ]),
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('fish')->insert([
        'name' => 'Mixto',
        'water_type' => 'sweet',
        'description' => serialize([
          '1 Cíclido Durazno',
          '2 Sílver Dollar',
          '2 Molly Ballón',
          '3 Tetra Monja Transgénica',
          '2 Espada Roja',
          '2 Tiburón Bala'
        ]),
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('fish')->insert([
        'name' => 'Paquete Marino I',
        'water_type' => 'salty',
        'description' => serialize([
          '2 Payaso Percula',
          '1 Damisela Azúl',
          '1 Gobio Flama',
          '1 Cardenal Bangái'
        ]),
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('fish')->insert([
        'name' => 'Paquete Marino II',
        'description' => serialize([
          '1 Cirujano Amarillo',
          '1 Payaso Tomate Grande',
          '1 Ballesta Niger'
        ]),
        'water_type' => 'salty',
        'created_at' => now(),
        'updated_at' => now()
      ]);
    }
}
