<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

          // Crea un'istanza di Faker in italiano
          $faker = Faker::create('it_IT');

        // Recupera tutti i prodotti
        $products = Product::all();

        // Per ogni prodotto, crea recensioni fake
        foreach ($products as $product) {

            // Genera 2 recensioni in totale a caso per ciascun prodotto
            for ($i = 0; $i < 2; $i++) {
                
                $randomProduct = $products->random();

                // Crea una recensione
                Review::create([
                    'product_id' => $randomProduct->id,
                    'product_name' => $randomProduct->name, 
                    'author' => $faker->name(), 
                    'content' => "{$faker->realText(100)}",
                    'rating' => rand(1, 5), 
                ]);
            }
        }
    }
}
