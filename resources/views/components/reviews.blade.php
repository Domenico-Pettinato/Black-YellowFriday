<!-- Reviews -->
<section id="reviews" class="py-5 bg-dark text-light">
    <div class="container">
        <h2 class="text-center text-danger mb-5">⭐ Recensioni dei Clienti ⭐</h2>
        <div class="row">
            @foreach ($products as $product)
                @foreach ($product->reviews as $review)
                <div class="col-md-6 mb-4">
                    <div class="bg-black p-4 shadow rounded">
                        <h5 class="fw-bold text-danger">{{ $review->author }}</h5>
                        <p class="mb-1"> Recensione per {{ $product->name }}: {{ $review->content }}</p>
                        <p class="text-warning">Valutazione: {{ str_repeat('⭐', $review->rating) }}</p>
                    </div>
                </div>
                @endforeach
            @endforeach
        </div>
    </div>
</section>
