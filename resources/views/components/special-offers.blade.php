<section id="offers" class=" mt-5 py-5 bg-dark text-light">
    <div class="container">
        <h2 class="text-center text-danger mb-5">🔥 Offerte Speciali 🔥</h2>
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card border-0 bg-black p-2 shadow rounded" style="transition: transform 0.3s;">
                    <!-- Immagine del prodotto -->
                    <img src="/storage/{{ $product->image }}" class="card-img-top rounded-top" alt="Imagine del prodotto">

                    <div class="card-body bg-dark text-white text-center">
                        <!-- Nome del prodotto -->
                        <h5 class="card-title text-danger fw-bold">{{ $product->name }}</h5>

                        <!-- Descrizione del prodotto -->
                        <p class="card-text">
                            {{ $product->description }}
                        </p>

                        <!-- Prezzo del prodotto -->
                        <p class="fw-bold text-warning h5">
                            {{ number_format($product->price ?? 0, 2) }}€
                        </p>

                        <!-- Bottone -->
                        <button class="btn btn-outline-light btn-sm">
                            Acquista Ora
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>