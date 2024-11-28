console.log("Script avviato");

document.addEventListener("DOMContentLoaded", () => {
    console.log("Animations.js caricato correttamente!");
});

document.addEventListener("DOMContentLoaded", () => {
    const animatedElements = document.querySelectorAll('.fade-in, .slide-up, .zoom-in');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });

    animatedElements.forEach(element => {
        observer.observe(element);
        console.log(element);
    });


    
});
