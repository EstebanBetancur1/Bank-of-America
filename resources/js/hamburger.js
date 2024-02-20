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

