<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impastando.it - Black Friday Blitz!</title>
    <!-- Includi gli asset con Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles') <!-- Per eventuali stili aggiuntivi -->
</head>

<body class="bg-black text-white">
    <x-navbar />
    <main>
        <div class="min-vh-100">
            <x-hero />
            {{ $slot }}
            <x-special-offers />
            <x-create :categories="$categories" />
            <x-reviews />
        </div>
    </main>
    <x-footer />
    <x-scroll-top /> <!-- "Torna su" -->
    @stack('scripts') <!-- Per eventuali script aggiuntivi -->
</body>
</html>


