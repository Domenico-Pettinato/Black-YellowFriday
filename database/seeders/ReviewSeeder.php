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

            // Genera una recensioni a caso per ciascun prodotto
            for ($i = 0; $i < 1; $i++); {

                $randomProduct = $products->random();

                $reviews = [
                    "Il Panettone Classico Artigianale è una vera delizia! La sua morbidezza e la ricchezza del sapore sono davvero uniche. Ogni fetta è un'esplosione di profumi grazie alla lunga lievitazione naturale. L’impasto è perfettamente bilanciato, con canditi e uvetta che non sovrastano mai il gusto del panettone. Ideale per il pranzo di Natale, è un dolce che fa subito festa",
                    "Un panettone che conquista al primo assaggio! La crema al pistacchio, ricca e vellutata, si abbina magnificamente alla consistenza soffice del panettone. La presenza di pezzi croccanti di pistacchio all’interno aggiunge una nota interessante e gustosa. Un dolce innovativo che non manca di eleganza e sapore!",
                    "Se siete amanti del cioccolato fondente, questo panettone è una scoperta imperdibile. La parte interna è ricca di gocce di cioccolato che si sciolgono dolcemente ad ogni morso, mentre l’impasto rimane morbido e leggero. La nota amara del cioccolato si fonde perfettamente con la dolcezza dell’impasto, creando un equilibrio perfetto.",
                    "Un vero tripudio di gusto! La combinazione di nocciole croccanti e cioccolato al latte rende questo panettone davvero speciale. La soffice consistenza dell’impasto e la dolcezza delicata del cioccolato al latte si completano perfettamente. Ogni morso è un’esplosione di bontà, ideale per chi cerca un dolce più goloso e meno impegnativo.",
                    "Un panettone fresco e raffinato, con il delicato sapore della pera che si sposa alla perfezione con il cioccolato bianco. Il frutto dona una leggera acidità che bilancia la dolcezza del cioccolato, creando un contrasto piacevole al palato. L’impasto è soffice e ben lievitato, un’ottima variante per chi cerca qualcosa di più originale.",
                    "Un panettone senza glutine che non ha nulla da invidiare a quelli tradizionali! La consistenza è sorprendentemente soffice, e il sapore ricco, con una leggera nota di vaniglia che emerge delicatamente. I canditi sono ben distribuiti senza sovrastare l’impasto, rendendo ogni fetta una piacevole scoperta. Ottimo per chi ha intolleranze, ma anche per chi cerca un’alternativa più leggera.",
                    "Un panettone che unisce la dolcezza delle albicocche e la croccantezza delle mandorle, creando un equilibrio perfetto tra morbidezza e croccantezza. La frutta secca e i canditi di albicocca si fondono armoniosamente con la sofficità dell’impasto, regalando un gusto avvolgente e aromatico. Perfetto per chi ama i dolci fruttati e leggermente croccanti.",
                    "Un panettone davvero speciale, con un tocco di freschezza dato dal limoncello che si avverte delicatamente in ogni morso. La nota agrumata e la sua fragranza rendono questo panettone unico nel suo genere, ideale per chi ama i sapori freschi e aromatici. Perfetto per concludere un pranzo natalizio con un gusto inusuale e sorprendente!",
                    "Un panettone che gioca con sapori speziati e agrumati, grazie alla presenza dello zenzero e dell’arancia. Il gusto piccante e leggermente piccante dello zenzero si bilancia splendidamente con l’aroma fresco e dolce dell’arancia. L’impasto è soffice e profumato, perfetto per chi cerca un dolce con un tocco di esotico, ma che rimane comunque elegante e raffinato."
                ];

                Review::create([
                    'product_id' => $randomProduct->id,
                    'product_name' => $randomProduct->name,
                    'author' => $faker->name(),
                    'content' => $reviews[array_rand($reviews)],
                    'rating' => rand(1, 5),
                ]);
            }
        }
    }
}
