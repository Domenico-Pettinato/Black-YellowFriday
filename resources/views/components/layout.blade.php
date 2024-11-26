<!-- Utilizzo questa direttiva per passare le categorie al componente create -->
@props(['categories'])

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Friday Blitz - La tua occasione irripetibile!</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white">
    <x-navbar />
    <main>
        <!-- <h1 class="display-1 grid grid-cols-1 gap-4 sm:grid-cols-2 md:gap-8 mt-5 fw-bold text-danger text-center">🔥 Black Friday</h1> -->

        <div class="min-vh-100">
            <x-hero />
            
            {{ $slot }}
            <x-carousel />
            <x-special-offers />
            <x-reviews />
            <!-- Uso il componente create e passo le categorie popolate nel database -->
            <x-create :categories="$categories" />
            <x-scroll-top />
        </div>
    </main>
    <x-footer />
    @stack('styles')
    @stack('scripts')
</body>
</html>