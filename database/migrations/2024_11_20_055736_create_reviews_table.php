<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id'); // ID del prodotto collegato
            $table->string('product_name'); // Nome del prodotto
            $table->string('author'); // Nome dell'autore
            $table->text('content'); // Testo della recensione
            $table->unsignedTinyInteger('rating'); // Voto (da 1 a 5)
            $table->timestamps();

            // Chiave esterna per collegare le recensioni ai prodotti
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};

