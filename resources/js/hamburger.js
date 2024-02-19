document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('hamburger');
    hamburger.addEventListener('click', function() {
        this.classList.toggle('active');
    });
});
