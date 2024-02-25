
var mySwiper = new Swiper('.swiper', {
    slidesPerView: 1.2,
    spaceBetween: 4, // Ajusta este valor según necesites
    direction: 'horizontal',
    loop: false,
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    hide: true, // Esto hace que el scrollbar se oculte automáticamente
    draggable: true, // Hace el scrollbar arrastrable
    snapOnRelease: true, // Hace que el scrollbar se desplace a la diapositiva más cercana cuando se suelta
    },
  });



  var mySwiper = new Swiper('.swiperdos', {
    direction: 'horizontal',
    slidesPerView: 1,
    spaceBetween: 4,
    
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    
  });
