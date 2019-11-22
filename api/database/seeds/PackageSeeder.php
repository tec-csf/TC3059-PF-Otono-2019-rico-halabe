<?php

use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('packages')->insert([
        'name' => 'Paquete de Sala de Espera con Japonés o Goldfish',
        'description' => serialize([
          '1 Japonés Moro',
          '1 Japonés Esacma de Perla',
          '1 Japonés Sello Rojo',
          '4 Cebras Transgénica',
          '4 Guppys',
          '1 Gurami de Luz de Luna'
        ]),
        'tank_id' => 1,
        'water_type' => 'sweet',
        'floor_id' => 4,
        'decoration_id' => 3,
        'ornament_id_1' => 8,
        'fish_id' => 1,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete para Casa con Tetras',
        'description' => serialize([
          '3 Tetra Fantasma Negro',
          '3 Rasbora Arlequín',
          '3 Tetra Pristela',
          '1 Gato Paleatus',
          '3 Tetra Gota de Sangre',
          '3 Sumatrano Tigre o Transgénico'
        ]),
        'tank_id' => 1,
        'water_type' => 'sweet',
        'floor_id' => 6,
        'decoration_id' => 1,
        'ornament_id_1' => 9,
        'fish_id' => 2,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete Oficina con Tiburones',
        'description' => serialize([
          '1 Tiburón Arcoiris',
          '1 Tiburón Cola Roja',
          '4 Platy Coral',
          '2 Gurami Coliza Azúl',
          '3 Ángel Negro o Mármol',
          '1 Botia Payaso'
        ]),
        'tank_id' => 1,
        'water_type' => 'sweet',
        'floor_id' => 6,
        'decoration_id' => 3,
        'ornament_id_1' => 8,
        'fish_id' => 3,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete Niños Mixto',
        'description' => serialize([
          '1 Cíclido Durazno',
          '2 Sílver Dollar',
          '2 Molly Ballón',
          '3 Tetra Monja Transgénica',
          '2 Espada Roja',
          '2 Tiburón Bala'
        ]),
        'tank_id' => 1,
        'water_type' => 'sweet',
        'floor_id' => 5,
        'decoration_id' => 2,
        'ornament_id_1' => 6,
        'fish_id' => 4,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete de Agua Salada #1',
        'description' => serialize([
          '2 Payaso Percula',
          '1 Damisela Azúl',
          '1 Gobio Flama',
          '1 Cardenal Bangái'
        ]),
        'tank_id' => 1,
        'water_type' => 'salty',
        'floor_id' => 3,
        'decoration_id' => 4,
        'ornament_id_1' => 7,
        'fish_id' => 5,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete de Agua Salada #2',
        'description' => serialize([
          '1 Cirujano Amarillo',
          '1 Payaso Tomate Grande',
          '1 Ballesta Niger'
        ]),
        'tank_id' => 1,
        'water_type' => 'salty',
        'floor_id' => 3,
        'decoration_id' => 4,
        'ornament_id_1' => 8,
        'fish_id' => 6,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete de Sala de Espera con Japonés o Goldfish',
        'description' => serialize([
          '2 Japonés Moro',
          '2 Japonés Esacma de Perla',
          '2 Japonés Sello Rojo',
          '4 Cebras Transgénica',
          '4 Guppys',
          '1 Gurami de Luz de Luna'
        ]),
        'tank_id' => 2,
        'water_type' => 'sweet',
        'floor_id' => 4,
        'decoration_id' => 2,
        'ornament_id_1' => 8,
        'fish_id' => 1,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete para Casa con Tetras',
        'description' => serialize([
          '3 Tetra Fantasma Negro',
          '3 Rasbora Arlequín',
          '3 Tetra Pristela',
          '1 Gato Paleatus',
          '4 Tetra Gota de Sangre',
          '4 Sumatrano Tigre o Transgénico'
        ]),
        'tank_id' => 2,
        'water_type' => 'sweet',
        'floor_id' => 6,
        'decoration_id' => 3,
        'ornament_id_1' => 4,
        'fish_id' => 2,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete Oficina con Tiburones',
        'description' => serialize([
          '1 Tiburón Arcoiris',
          '1 Tiburón Cola Roja',
          '5 Platy Coral',
          '3 Gurami Coliza Azúl',
          '4 Ángel Negro o Mármol',
          '1 Botia Payaso'
        ]),
        'tank_id' => 2,
        'water_type' => 'sweet',
        'floor_id' => 6,
        'decoration_id' => 1,
        'ornament_id_1' => 3,
        'fish_id' => 3,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete Niños Mixto',
        'description' => serialize([
          '2 Cíclido Durazno',
          '2 Sílver Dollar',
          '3 Molly Ballón',
          '4 Tetra Monja Transgénica',
          '2 Espada Roja',
          '2 Tiburón Bala'
        ]),
        'tank_id' => 2,
        'water_type' => 'sweet',
        'floor_id' => 5,
        'decoration_id' => 3,
        'ornament_id_1' => 2,
        'fish_id' => 4,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete de Agua Salada #1',
        'description' => serialize([
          '2 Payaso Percula',
          '1 Damisela Azúl',
          '1 Gobio Flama',
          '2 Cardenal Bangái'
        ]),
        'tank_id' => 2,
        'water_type' => 'salty',
        'floor_id' => 3,
        'decoration_id' => 4,
        'ornament_id_1' => 4,
        'fish_id' => 5,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete de Agua Salada #2',
        'description' => serialize([
          '1 Cirujano Amarillo',
          '1 Payaso Tomate Grande',
          '1 Ballesta Niger',
          '1 Ballesta Picasso'
        ]),
        'tank_id' => 2,
        'water_type' => 'salty',
        'floor_id' => 3,
        'decoration_id' => 4,
        'ornament_id_1' => 8,
        'fish_id' => 6,
        'created_at' => now(),
        'updated_at' => now()
      ]);


      DB::table('packages')->insert([
        'name' => 'Paquete de Sala de Espera con Japonés o Goldfish',
        'description' => serialize([
          '2 Japonés Moro',
          '2 Japonés Esacma de Perla',
          '3 Japonés Sello Rojo',
          '6 Cebras Transgénica',
          '4 Guppys',
          '2 Gurami de Luz de Luna'
        ]),
        'tank_id' => 3,
        'water_type' => 'sweet',
        'floor_id' => 4,
        'decoration_id' => 1,
        'ornament_id_1' => 8,
        // 'ornament_id_2' => 2,
        'fish_id' => 1,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete para Casa con Tetras',
        'description' => serialize([
          '5 Tetra Fantasma Negro',
          '5 Rasbora Arlequín',
          '3 Tetra Pristela',
          '1 Coliza de Fuego',
          '1 Coliza Azúl',
          '1 Gato Paleatus',
          '4 Tetra Gota de Sangre',
          '5 Sumatrano Tigre o Transgénico'
        ]),
        'tank_id' => 3,
        'water_type' => 'sweet',
        'floor_id' => 6,
        'decoration_id' => 3,
        'ornament_id_1' => 4,
        // 'ornament_id_2' => 4,
        'fish_id' => 2,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete Oficina con Tiburones',
        'description' => serialize([
          '1 Tiburón Arcoiris',
          '1 Tiburón Cola Roja',
          '5 Platy Coral',
          '1 Tiburón Albino Arcoiris',
          '4 Gurami Coliza Azúl',
          '5 Ángel Negro o Mármol',
          '2 Botia Payaso'
        ]),
        'tank_id' => 3,
        'water_type' => 'sweet',
        'floor_id' => 6,
        'decoration_id' => 2,
        'ornament_id_1' => 3,
        // 'ornament_id_2' => 1,
        'fish_id' => 3,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete Niños Mixto',
        'description' => serialize([
          '2 Cíclido Durazno',
          '2 Sílver Dollar',
          '3 Molly Ballón',
          '5 Tetra Monja Transgénica',
          '3 Espada Roja',
          '4 Tiburón Bala'
        ]),
        'tank_id' => 3,
        'water_type' => 'sweet',
        'floor_id' => 5,
        'decoration_id' => 2,
        'ornament_id_1' => 2,
        // 'ornament_id_2' => 4,
        'fish_id' => 4,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete de Agua Salada #1',
        'description' => serialize([
          '2 Payaso Percula',
          '1 Damisela Azúl',
          '1 Gobio Flama',
          '2 Cardenal Bangái',
          '1 Cirujano de Velo'
        ]),
        'tank_id' => 3,
        'water_type' => 'salty',
        'floor_id' => 3,
        'decoration_id' => 4,
        'ornament_id_1' => 4,
        // 'ornament_id_2' => 8,
        'fish_id' => 5,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete de Agua Salada #2',
        'description' => serialize([
          '1 Cirujano Amarillo',
          '1 Payaso Tomate Grande',
          '1 Ballesta Niger',
          '1 Ballesta Picasso',
          '1 Cirujano de Velo'
        ]),
        'tank_id' => 3,
        'water_type' => 'salty',
        'floor_id' => 3,
        'decoration_id' => 4,
        'ornament_id_1' => 8,
        // 'ornament_id_2' => 7,
        'fish_id' => 6,
        'created_at' => now(),
        'updated_at' => now()
      ]);


      DB::table('packages')->insert([
        'name' => 'Paquete de Sala de Espera con Japonés o Goldfish',
        'description' => serialize([
          '2 Japonés Moro',
          '2 Japonés Esacma de Perla',
          '3 Japonés Sello Rojo',
          '2 Carpa Koy',
          '6 Cebras Transgénica',
          '6 Guppys',
          '2 Gurami de Luz de Luna',
          '2 Tiburón Bala'
        ]),
        'tank_id' => 4,
        'water_type' => 'sweet',
        'floor_id' => 4,
        'decoration_id' => 3,
        'ornament_id_1' => 3,
        // 'ornament_id_2' => 6,
        'fish_id' => 1,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete para Casa con Tetras',
        'description' => serialize([
          '5 Tetra Fantasma Negro',
          '5 Rasbora Arlequín',
          '5 Tetra Pristela',
          '2 Coliza de Fuego',
          '2 Coliza Azúl',
          '1 Gato Paleatus',
          '5 Tetra Gota de Sangre',
          '5 Sumatrano Tigre o Transgénico',
          '2 Tiburón Bala'
        ]),
        'tank_id' => 4,
        'water_type' => 'sweet',
        'floor_id' => 6,
        'decoration_id' => 2,
        'ornament_id_1' => 3,
        // 'ornament_id_2' => 5,
        'fish_id' => 2,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete Oficina con Tiburones',
        'description' => serialize([
          '2 Tiburón Arcoiris',
          '2 Tiburón Cola Roja',
          '5 Platy Coral',
          '2 Tiburón Albino Arcoiris',
          '2 Coliza Azúl',
          '2 Coliza de Fuego',
          '6 Ángel Negro o Mármol',
          '2 Tiburón Pangasio',
          '2 Botia Payaso'
        ]),
        'tank_id' => 4,
        'water_type' => 'sweet',
        'floor_id' => 6,
        'decoration_id' => 1,
        'ornament_id_1' => 5,
        // 'ornament_id_2' => 6,
        'fish_id' => 3,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete Niños Mixto',
        'description' => serialize([
          '2 Cíclido Durazno',
          '3 Sílver Dollar',
          '5 Molly Ballón',
          '6 Tetra Monja Transgénica',
          '5 Espada Roja',
          '4 Tiburón Bala'
        ]),
        'tank_id' => 4,
        'water_type' => 'sweet',
        'floor_id' => 5,
        'decoration_id' => 3,
        'ornament_id_1' => 2,
        // 'ornament_id_2' => 5,
        'fish_id' => 4,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete de Agua Salada #1',
        'description' => serialize([
          '2 Payaso Percula',
          '1 Damisela Azúl',
          '1 Gobio Flama',
          '2 Cardenal Bangái',
          '1 Cirujano de Velo',
          '1 Cara de Zorro'
        ]),
        'tank_id' => 4,
        'water_type' => 'salty',
        'floor_id' => 3,
        'decoration_id' => 4,
        'ornament_id_1' => 5,
        // 'ornament_id_2' => 9,
        'fish_id' => 5,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete de Agua Salada #2',
        'description' => serialize([
          '1 Cirujano Amarillo',
          '1 Payaso Tomate Grande',
          '1 Ballesta Niger',
          '1 Ballesta Picasso',
          '1 Cirujano de Velo',
          '1 Payaso Marrón Grande'
        ]),
        'tank_id' => 4,
        'water_type' => 'salty',
        'floor_id' => 3,
        'decoration_id' => 4,
        'ornament_id_1' => 1,
        // 'ornament_id_2' => 9,
        'fish_id' => 6,
        'created_at' => now(),
        'updated_at' => now()
      ]);


      DB::table('packages')->insert([
        'name' => 'Paquete de Sala de Espera con Japonés o Goldfish',
        'description' => serialize([
          '2 Japonés Moro',
          '2 Japonés Esacma de Perla',
          '3 Japonés Sello Rojo',
          '2 Carpa Koy',
          '6 Cebras Transgénica',
          '6 Guppys',
          '2 Gurami de Luz de Luna',
          '2 Tiburón Bala'
        ]),
        'tank_id' => 5,
        'water_type' => 'sweet',
        'floor_id' => 4,
        'decoration_id' => 3,
        'ornament_id_1' => 3,
        // 'ornament_id_2' => 3,
        // 'ornament_id_3' => 5,
        'fish_id' => 1,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete para Casa con Tetras',
        'description' => serialize([
          '5 Tetra Fantasma Negro',
          '5 Rasbora Arlequín',
          '5 Tetra Pristela',
          '2 Coliza de Fuego',
          '2 Coliza Azúl',
          '1 Gato Paleatus',
          '5 Tetra Gota de Sangre',
          '5 Sumatrano Tigre o Transgénico',
          '2 Tiburón Bala'
        ]),
        'tank_id' => 5,
        'water_type' => 'sweet',
        'floor_id' => 6,
        'decoration_id' => 2,
        'ornament_id_1' => 1,
        // 'ornament_id_2' => 3,
        // 'ornament_id_3' => 6,
        'fish_id' => 2,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete Oficina con Tiburones',
        'description' => serialize([
          '2 Tiburón Arcoiris',
          '2 Tiburón Cola Roja',
          '5 Platy Coral',
          '2 Tiburón Albino Arcoiris',
          '2 Coliza Azúl',
          '2 Coliza de Fuego',
          '6 Ángel Negro o Mármol',
          '2 Tiburón Pangasio',
          '2 Botia Payaso'
        ]),
        'tank_id' => 5,
        'water_type' => 'sweet',
        'floor_id' => 6,
        'decoration_id' => 1,
        'ornament_id_1' => 5,
        // 'ornament_id_2' => 4,
        // 'ornament_id_3' => 5,
        'fish_id' => 3,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete Niños Mixto',
        'description' => serialize([
          '2 Cíclido Durazno',
          '3 Sílver Dollar',
          '5 Molly Ballón',
          '6 Tetra Monja Transgénica',
          '5 Espada Roja',
          '4 Tiburón Bala'
        ]),
        'tank_id' => 5,
        'water_type' => 'sweet',
        'floor_id' => 5,
        'decoration_id' => 3,
        'ornament_id_1' => 2,
        // 'ornament_id_2' => 1,
        // 'ornament_id_3' => 5,
        'fish_id' => 4,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete de Agua Salada #1',
        'description' => serialize([
          '2 Payaso Percula',
          '1 Damisela Azúl',
          '1 Gobio Flama',
          '2 Cardenal Bangái',
          '1 Cirujano de Velo',
          '1 Cara de Zorro'
        ]),
        'tank_id' => 5,
        'water_type' => 'salty',
        'floor_id' => 3,
        'decoration_id' => 4,
        'ornament_id_1' => 1,
        // 'ornament_id_2' => 8,
        // 'ornament_id_3' => 9,
        'fish_id' => 5,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('packages')->insert([
        'name' => 'Paquete de Agua Salada #2',
        'description' => serialize([
          '1 Cirujano Amarillo',
          '1 Payaso Tomate Grande',
          '1 Ballesta Niger',
          '1 Ballesta Picasso',
          '1 Cirujano de Velo',
          '1 Payaso Marrón Grande'
        ]),
        'tank_id' => 5,
        'water_type' => 'salty',
        'floor_id' => 3,
        'decoration_id' => 4,
        'ornament_id_1' => 5,
        // 'ornament_id_2' => 9,
        // 'ornament_id_3' => 7 ,
        'fish_id' => 6,
        'created_at' => now(),
        'updated_at' => now()
      ]);
    }
}
