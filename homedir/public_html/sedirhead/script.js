document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');
    const dropdowns = document.querySelectorAll('.dropdown');

    // Toggle menú en móviles
    menuToggle.addEventListener('click', function() {
        navLinks.classList.toggle('active');
    });

    // Manejar cada dropdown
    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('click', function(e) {
            // Evita que se cierre el menú al hacer clic en un enlace
            e.stopPropagation();
            this.classList.toggle('active');
        });
    });
});
