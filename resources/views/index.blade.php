<x-layout>
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