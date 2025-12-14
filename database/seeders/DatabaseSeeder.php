<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // Esto llamará a tu CategoriesSeeder y luego a tu GamesSeeder
        $this->call([
            CategoriesSeeder::class,
            GamesSeeder::class,
        ]);
    }
}
