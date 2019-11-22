<?php

use Illuminate\Database\Seeder;

class PricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('prices')->insert([
        'liters' => 80,
        'water_type' => 'sweet',
        'sale' => 11999,
        'maintenance' => 950,
        'rent' => 1950,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('prices')->insert([
        'liters' => 80,
        'water_type' => 'salty',
        'sale' => 14680,
        'maintenance' => 1100,
        'rent' => 2490,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('prices')->insert([
        'liters' => 148,
        'water_type' => 'sweet',
        'sale' => 14499,
        'maintenance' => 1149,
        'rent' => 2480,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('prices')->insert([
        'liters' => 148,
        'water_type' => 'salty',
        'sale' => 22000,
        'maintenance' => 1290,
        'rent' => 3950,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('prices')->insert([
        'liters' => 187,
        'water_type' => 'sweet',
        'sale' => 15590,
        'maintenance' => 1290,
        'rent' => 2680,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('prices')->insert([
        'liters' => 187,
        'water_type' => 'salty',
        'sale' => 24999,
        'maintenance' => 1390,
        'rent' => 4499,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('prices')->insert([
        'liters' => 246,
        'water_type' => 'sweet',
        'sale' => 19360,
        'maintenance' => 1390,
        'rent' => 3250,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('prices')->insert([
        'liters' => 246,
        'water_type' => 'salty',
        'sale' => 30860,
        'maintenance' => 1690,
        'rent' => 4999,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('prices')->insert([
        'liters' => 472,
        'water_type' => 'sweet',
        'sale' => 32450,
        'maintenance' => 1790,
        'rent' => 4350,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('prices')->insert([
        'liters' => 472,
        'water_type' => 'salty',
        'sale' => 47350,
        'maintenance' => 2190,
        'rent' => 6499,
        'created_at' => now(),
        'updated_at' => now()
      ]);
    }
}
