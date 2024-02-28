import './bootstrap';



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



  document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('hamburger');
    hamburger.addEventListener('click', function() {
        this.classList.toggle('active');
    });
});


document.addEventListener('DOMContentLoaded', function() {
    // Selecciona el botón que se usará para desplegar el menú
    var menuToggle = document.querySelector('.menu-toggle');
    
    // Selecciona el menú que deseas desplegar
    var navigation = document.querySelector('.navigation');
    
    // Escucha el evento de clic en el botón de despliegue
    menuToggle.addEventListener('click', function() {
        // Alterna la clase 'open' en el menú
        navigation.classList.toggle('open');
    });
});

//

document.addEventListener('DOMContentLoaded', (event) => {
  // Al cargar la página, establece la pestaña activa basada en localStorage
  const savedTab = localStorage.getItem('activeTab');
  if (savedTab) {
    const tabToActivate = document.querySelector(`#${savedTab}`);
    if (tabToActivate) {
      setActiveTab(tabToActivate);
    }
  }

  // Función para establecer la pestaña activa
  function setActiveTab(tabElement) {
    // Primero, elimina la clase activa de todas las pestañas
    document.querySelectorAll('.tab').forEach(tab => {
      tab.classList.remove('border-b','border-red-600', 'text-red-600');
    });

    // Luego, añade la clase activa a la pestaña clickeada
    tabElement.classList.add('border-b','border-red-600', 'text-red-600');
  }

  // Añade un escuchador de eventos a todas las pestañas
  document.querySelectorAll('.tab').forEach(tab => {
    tab.addEventListener('click', function() {
      // Guarda la pestaña activa en localStorage
      localStorage.setItem('activeTab', tab.getAttribute('id'));
      setActiveTab(tab);
    });
  });
});
