<<<<<<< HEAD
/* document.addEventListener('DOMContentLoaded', () => {
    const elementosCarrusel = document.querySelectorAll('.carousel');
=======
document.addEventListener('DOMContentLoaded', () => {
    const elementosCarrusel = document.querySelectorAll('.section-slider-medio .carousel');
>>>>>>> cb17d8ca637712795ba576f6955369c594e4bfc9
    M.Carousel.init(elementosCarrusel, {
        duration: 200,
        dist: -50,
        shift: -70,
        padding: 300,
        numVisible: 5,
        indicators: true,
    });
});
function moveNextCarousel() {
    var elems = document.querySelector('.carousel');
    var moveRight = M.Carousel.getInstance(elems);
    moveRight.next(1);
}
function movePrevCarousel() {
    var elems = document.querySelector('.carousel');
    var moveLeft = M.Carousel.getInstance(elems);
    moveLeft.prev(1);
<<<<<<< HEAD
} */
=======
}

>>>>>>> cb17d8ca637712795ba576f6955369c594e4bfc9
