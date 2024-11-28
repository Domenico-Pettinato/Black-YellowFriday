<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impastando.it - Black Friday Blitz!</title>
    <!-- Includi gli asset con Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white">
    <x-navbar />
    <main>
        <div class="min-vh-100">
            <x-hero />
            {{ $slot }}
            <x-carousel />
            <x-special-offers />
            <!-- Passaggio delle categorie al componente -->
            <x-create :categories="$categories" />
            <x-reviews />
            <x-scroll-top />
        </div>
    </main>
    <x-footer />

  
</body>
</html>

