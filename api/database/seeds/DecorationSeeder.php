<?php

use Illuminate\Database\Seeder;

class DecorationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('decorations')->insert([
        'name' => 'Paquete 1',
        'water_type' => 'sweet',
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('decorations')->insert([
        'name' => 'Paquete 2',
        'water_type' => 'sweet',
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('decorations')->insert([
        'name' => 'Paquete 3',
        'water_type' => 'sweet',
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('decorations')->insert([
        'name' => 'Decoración',
        'water_type' => 'salty',
        'created_at' => now(),
        'updated_at' => now()
      ]);
    }
}
