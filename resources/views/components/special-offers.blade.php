<!-- Offers Section -->
<section id="offers" class="py-5">
    <div class="container">
        <h2 class="text-center text-danger mb-5">🔥 Offerte Speciali 🔥</h2>
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card border-0 shadow-lg mb-4" style="transition: transform 0.3s;">
                    <img src="{{ $product->image }}" class="card-img-top rounded" alt="{{ $product->name }}">
                    <div class="card-body bg-dark text-white text-center">
                        <h5 class="card-title text-danger fw-bold">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="fw-bold text-warning h5">{{ $product->price }}€</p>
                        <button class="btn btn-outline-light btn-sm">Acquista Ora</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>