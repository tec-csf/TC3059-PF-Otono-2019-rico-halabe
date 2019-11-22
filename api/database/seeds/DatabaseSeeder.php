<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
        TanksSeeder::class,
        BasicMaterialsSeeder::class,
        DecorationSeeder::class,
        OrnamentSeeder::class,
        TankOrnamentSeeder::class,
        FishSeeder::class,
        PackageSeeder::class,
        PricesSeeder::class,
        UsersSeeder::class
      ]);
    }
}
