import '/src/css/main.css';

//Alpine Js

import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
Alpine.start()


// Slick Carousel 

$('.news-slider-container').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3
  });
