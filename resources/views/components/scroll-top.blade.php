<button id="scrollTopButton" class="btn">
    <i class="bi bi-arrow-up"></i> <!-- Icona di Bootstrap per la freccia verso l'alto -->
</button>

@push('styles')
<style>
    /* Posizione del pulsante */
    #scrollTopButton {
        position: fixed;
        bottom: 25px;
        right: 25px;
        display: none;
        z-index: 1000;
        padding: 15px;
        /* border: 3px solid white; */
        border-radius: 100%;
        /* background-color: #e63900; */
        color: white;
        font-size: 20px;
        cursor: pointer;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: transform 0.5s, background-color 0.5s;
    }


    /* Effetto hover sul pulsante */
    #scrollTopButton:hover {
        transform: scale(1.1);
        /* Ingrandisce il pulsante al passaggio del mouse */
        background-color: #e63900;
        /* Colore rosso scuro */
    }

    /* Modifica della dimensione dell'icona */
    #scrollTopButton i {
        font-size: 20px;
        /* Dimensione dell'icona */
    }
</style>
@endpush

@push('scripts')
<script>
    // Selezioniamo il pulsante tramite il suo id
    const scrollTopButton = document.getElementById('scrollTopButton');

    // Funzione per mostrare il pulsante quando si scorre
    window.onscroll = function() {
        // Mostra il pulsante quando la pagina è scrollata di più di 50px
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            scrollTopButton.style.display = "block"; // Mostra il pulsante
        } else {
            scrollTopButton.style.display = "none"; // Nascondi il pulsante
        }
    };

    // Funzione per scrollare verso l'alto quando il pulsante viene cliccato
    scrollTopButton.onclick = function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    };
</script>
@endpush