<!-- Sto passando la variabile categories al layout -->
<x-layout :categories="$categories">
    
    <!-- Messaggio di errore -->
    @if (session('alert'))
    <div class="alert alert-danger text-center w-auto mx-auto my-3" style="max-width: 500px;">
        {{ session('alert') }}
    </div>
    @endif

    <!-- Messaggio di conferma -->
    @if (session('message'))
    <div class="d-flex justify-content-center mt-3">
        <div class="alert alert-success alert-dismissible fade show w-auto text-center" style="max-width: 500px;" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif                                

    <!-- Countdown -->
    <section class="text-center py-5 bg-black text-white">
        <div class="container">
            <h2 class="mb-4 text-danger">Tempo rimasto per approfittare delle offerte:</h2>
            <div id="countdown" class="display-6 fw-bold text-warning"></div>
        </div>
    </section>
    <script>
        const targetDate = new Date('2024-11-29T23:59:59').getTime();
        const countdown = document.getElementById('countdown');
        setInterval(() => {
            const now = new Date().getTime();
            const distance = targetDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            countdown.innerHTML = `<span class="text-danger">${days}d</span> 
                               <span class="text-warning">${hours}h</span> 
                               <span class="text-info">${minutes}m</span> 
                               <span class="text-success">${seconds}s</span>`;
        }, 1000);
    </script>
</x-layout>