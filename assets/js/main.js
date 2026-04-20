// Selección de elementos
const mobileMenu = document.querySelector('#mobile-menu');
const navLinks = document.querySelector('.nav-links'); // Cambiado a .nav-links

if (mobileMenu) {
    mobileMenu.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
}

// Cerrar menú al hacer clic en un enlace
document.querySelectorAll('.nav-links a').forEach(n => n.addEventListener('click', () => {
    navLinks.classList.remove('active');
}));
