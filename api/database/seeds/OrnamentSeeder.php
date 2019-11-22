<?php

use Illuminate\Database\Seeder;

class OrnamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('ornaments')->insert([
        'name' => 'Helicoptero Hundido',
        'size' => 0,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('ornaments')->insert([
        'name' => 'Casa Bob Esponja',
        'size' => 0,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('ornaments')->insert([
        'name' => 'Faro de Luz',
        'size' => 1,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('ornaments')->insert([
        'name' => 'Casa Calamardo',
        'size' => 1,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('ornaments')->insert([
        'name' => 'Barco Pirata',
        'size' => 2,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('ornaments')->insert([
        'name' => 'Pinguino Feliz',
        'size' => 2,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('ornaments')->insert([
        'name' => 'Musgo',
        'size' => 0,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('ornaments')->insert([
        'name' => 'Cofre',
        'size' => 1,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('ornaments')->insert([
        'name' => 'Pez Globo',
        'size' => 2,
        'created_at' => now(),
        'updated_at' => now()
      ]);
    }
}
