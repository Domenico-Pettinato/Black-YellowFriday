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
            ['name' => 'Panettone', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pandoro', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cucina', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pasticceria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Biscotti', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pasta', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
