console.log("cargando carousel.");
document.addEventListener('DOMContentLoaded', () => {
    const galeria = document.querySelector('.galeria');
    const carousel = galeria.querySelector('.carousel-container');
    const leftBtn = galeria.querySelector('.carousel-btn.left');
    const rightBtn = galeria.querySelector('.carousel-btn.right');

    let currentIndex = 0;
    const totalSlides = carousel.children.length;

    function updateCarousel() {
        const offset = -currentIndex * 100;
        carousel.style.transform = `translateX(${offset}%)`;
    }

    leftBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateCarousel();
    });

    rightBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateCarousel();
    });
});