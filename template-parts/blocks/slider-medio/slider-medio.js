document.addEventListener('DOMContentLoaded', () => {
    const elementosCarrusel = document.querySelectorAll('.section-slider-medio .carousel');
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
}

