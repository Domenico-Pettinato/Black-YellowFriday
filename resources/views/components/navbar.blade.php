<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black border-bottom border-danger">
    <div class="container">
        <a class="navbar-brand fw-bold text-danger" href="{{ route('welcome') }}">🔥 Black Friday</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('products.create') }}">Inserisci Prodotto</a></li>
                <li class="nav-item"><a class="nav-link" href="#offers">Visualizza Offerte</a></li>
                <li class="nav-item"><a class="nav-link" href="#reviews">Recensioni</a></li>
            </ul>
        </div>
    </div>
</nav>