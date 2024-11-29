console.log("Script Cart avviato");

document.addEventListener('DOMContentLoaded', function() {
    const buyButtons = document.querySelectorAll('.buyButton'); // Seleziona tutti i pulsanti con classe "buyButton"
    const cartItemCountElement = document.getElementById('cartItemCount');
    let cartItemCount = 0;

    buyButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Incrementa il contatore
            cartItemCount++;
            cartItemCountElement.textContent = cartItemCount;

            // Mostra il pop-up
            showCartPopUp();

            // Log del prodotto aggiunto al carrello
            const productCard = this.closest('.card'); // Trova la card del prodotto
            const productName = productCard.querySelector('.card-title').textContent;
            console.log(`Aggiunto al carrello: ${productName}`);
        });
    });

    function showCartPopUp() {
        const popUp = document.createElement('div');
        popUp.textContent = "Aggiunto al carrello!";
        popUp.classList.add('cart-pop-up');
        document.body.appendChild(popUp);

        // Rimuovi il pop-up dopo un po'
        setTimeout(() => {
            popUp.remove();
        }, 2000); // Rimuovi il pop-up dopo 2 secondi
    }
});

