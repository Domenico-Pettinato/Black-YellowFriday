<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Smartphone', 'description' => 'A modern smartphone', 'price' => 699.99],
            ['name' => 'Tablet', 'description' => 'A lightweight tablet', 'price' => 499.99],
            ['name' => 'Laptop', 'description' => 'A powerful laptop', 'price' => 999.99],
            ['name' => 'Smartwatch', 'description' => 'A stylish smartwatch', 'price' => 199.99],
            ['name' => 'Camera', 'description' => 'A high-quality camera', 'price' => 799.99],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}