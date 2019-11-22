<?php

use Illuminate\Database\Seeder;

class TanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tanks')->insert([
        'name' => 'MT-50',
        'capacity' => 80,
        'width' => 45,
        'height' => 50,
        'depth' => 50,
        'fish_sweet' => 14,
        'fish_salty' => 3,
        'medium_ornaments' => 1,
        'color' => "Negro o Plata",
        'cabinet' => false,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('tanks')->insert([
        'name' => 'EA-80',
        'capacity' => 148,
        'width' => 80,
        'height' => 50,
        'depth' => 40,
        'fish_sweet' => 16,
        'fish_salty' => 5,
        'medium_ornaments' => 1,
        'color' => "Negro Mate",
        'cabinet' => true,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('tanks')->insert([
        'name' => 'EA-100',
        'capacity' => 187,
        'width' => 100,
        'height' => 56,
        'depth' => 40,
        'fish_sweet' => 18,
        'fish_salty' => 6,
        'medium_ornaments' => 2,
        'color' => "Negro Mate",
        'cabinet' => true,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('tanks')->insert([
        'name' => 'EA-120',
        'capacity' => 246,
        'width' => 120,
        'height' => 60,
        'depth' => 40,
        'fish_sweet' => 25,
        'fish_salty' => 8,
        'medium_ornaments' => 1,
        'big_ornaments' => 1,
        'color' => "Negro Mate",
        'cabinet' => true,
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('tanks')->insert([
        'name' => 'EA-150',
        'capacity' => 472,
        'width' => 150,
        'height' => 68,
        'depth' => 53,
        'fish_sweet' => 40,
        'fish_salty' => 10,
        'medium_ornaments' => 1,
        'big_ornaments' => 2,
        'color' => "Negro Mate",
        'cabinet' => true,
        'created_at' => now(),
        'updated_at' => now()
      ]);
    }
}
