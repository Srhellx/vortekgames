<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'RPG', 'description' => 'Rol y progresión de personaje'],
            ['name' => 'Estrategia', 'description' => 'Estrategia en tiempo real'],
            ['name' => 'Híbrido', 'description' => 'Combinación de varios géneros'],
            ['name' => 'Acción', 'description' => 'Juegos dinámicos con enfoque en combate y reflejos'],
            ['name' => 'Aventura', 'description' => 'Exploración y narrativa interactiva'],
            ['name' => 'Deportes', 'description' => 'Simulación o competencia deportiva'],
            ['name' => 'Horror', 'description' => 'Juegos de miedo y suspenso'],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->updateOrInsert(
                ['name' => $category['name']], // Si ya existe el nombre, actualiza
                [
                    'description' => $category['description'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
