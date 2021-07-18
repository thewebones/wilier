 document.addEventListener('DOMContentLoaded', () => {
     const elementosCarrusel = document.querySelectorAll('.section-slider-hover .carousel');
     M.Carousel.init(elementosCarrusel, {
         duration: 200,
         dist: 0,
         shift: 0,
         padding: 50,
         noWrap: false,
         numVisible: 5,
     });
 });
 