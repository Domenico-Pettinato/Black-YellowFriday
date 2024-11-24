<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Elettronica', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Abbigliamento', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Casa e Cucina', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sport', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
