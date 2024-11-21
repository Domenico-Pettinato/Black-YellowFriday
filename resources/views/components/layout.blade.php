<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Friday Landing</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white">
    <x-navbar />
    <main>
        <h1 class="display-1 grid grid-cols-1 gap-4 sm:grid-cols-2 md:gap-8 mt-5 text-center">Ssc Bari Post</h1>

        <!-- Barra di ricerca in stile Edge -->
        <form action="{{ route('products.store') }}" method="GET" class="d-flex justify-content-center my-3" role="search">
            <div class="input-group" style="max-width: 600px; width: 100%; position: relative;">
                <input
                    type="search"
                    name="query"
                    class="form-control"
                    placeholder="Cerca tra gli articoli..."
                    aria-label="Search"
                    style="height: 45px; font-size: 1.4rem; border-radius: 25px 25px 0 0; padding-left: 35px; border-color: #4285f4;">
                <!-- Icona della lente, posizionata dentro il campo di input -->
                <i class="bi bi-search position-absolute" style="left: 10px; top: 43%; transform: translateY(-50%); color: #aaa;"></i>
            </div>
        </form>

        <div class="min-vh-100">
            {{ $slot }}
            <x-hero />
            <x-countdown />
            <x-special-offers />
            <x-reviews />
        </div>

    </main>
    <x-footer />
</body>

</html>