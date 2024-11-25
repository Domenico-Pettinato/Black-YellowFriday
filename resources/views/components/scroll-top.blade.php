<!-- resources/views/components/scroll-top.blade.php -->
<button id="scrollTopButton" class="btn">
    <i class="bi bi-arrow-up"></i> <!-- Icona di Bootstrap per la freccia verso l'alto -->
</button>

@push('styles')
<style>
    /* Posizione del pulsante */
    #scrollTopButton {
        position: fixed;
        bottom: 20px; /* Posizionamento dal basso */
        right: 20px;  /* Posizionamento dalla destra */
        display: none; /* Nascosto inizialmente */
        z-index: 1000; /* Assicurarsi che il pulsante sia sopra gli altri elementi */
        padding: 15px; /* Padding per il pulsante */
        border: none;
        border-radius: 100%; /* Forma circolare */
        background-color: #ff4500; /* Colore rosso fuoco */
        color: white;
        font-size: 40px; /* Dimensione dell'icona */
        cursor: pointer;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Aggiunta ombra per effetto 3D */
        transition: transform 0.3s, background-color 0.3s; /* Aggiunta transizione */
    }

    /* Effetto hover sul pulsante */
    #scrollTopButton:hover {
        transform: scale(1.1); /* Ingrandisce il pulsante al passaggio del mouse */
        background-color: #e63900; /* Colore rosso scuro */
    }

    /* Modifica della dimensione dell'icona */
    #scrollTopButton i {
        font-size: 40px; /* Dimensione dell'icona */
    }
</style>
@endpush

@push('scripts')
<script>
    // Selezioniamo il pulsante tramite il suo id
    const scrollTopButton = document.getElementById('scrollTopButton');
    
    // Funzione per mostrare il pulsante quando si scorre
    window.onscroll = function() {
        // Mostra il pulsante quando la pagina è scrollata di più di 300px
        if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
            scrollTopButton.style.display = "block"; // Mostra il pulsante
        } else {
            scrollTopButton.style.display = "none"; // Nascondi il pulsante
        }
    };

    // Funzione per scrollare verso l'alto quando il pulsante viene cliccato
    scrollTopButton.onclick = function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };
</script>
@endpush




