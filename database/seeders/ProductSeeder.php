<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Crea un'istanza di Faker in italiano
        $faker = Faker::create('it_IT');

        $products = [
            ['name' => 'Panettone', 'description' => "{$faker->realText(100)}", 'price' => 19.99],
            ['name' => 'Pandoro', 'description' => "{$faker->realText(100)}", 'price' => 9.99],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
