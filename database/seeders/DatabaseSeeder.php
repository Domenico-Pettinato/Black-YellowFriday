<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Esegui il ProductSeeder
        $this->call(ProductSeeder::class);

        // Esegui il ReviewSeeder
        $this->call(ReviewSeeder::class);

        //Esegui il CategorySeeder
        $this->call(CategorySeeder::class);

    }
}
