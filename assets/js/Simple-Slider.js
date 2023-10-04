document.addEventListener("DOMContentLoaded", function() {

    // Initializing the swiper plugin for the slider.
    // Read more here: http://idangero.us/swiper/api/
    
    // var mySwiper = new Swiper('.swiper-container', {
    //     loop: true,
    //     direction:"vertical",
    //     navigation: {
    //         nextEl: '.swiper-button-next',
    //         prevEl: '.swiper-button-prev'
    //     }
    // });
    const swiper = new Swiper('.swiper', {
      speed: 400,
      spaceBetween: 100,
      direction:'vertical',
      autoplay:true,
        loop:true,
        height:700,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        }
    });
    
});