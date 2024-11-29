
console.log("Script avviato");

const scrollTopButton = document.getElementById('scrollTopButton');

window.onscroll = function() {
    // Mostra il pulsante quando si scorre più di 50px
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        scrollTopButton.style.display = "block"; // Mostra il pulsante
    } else {
        scrollTopButton.style.display = "none"; // Nascondi il pulsante
    }
};

scrollTopButton.onclick = function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
};
