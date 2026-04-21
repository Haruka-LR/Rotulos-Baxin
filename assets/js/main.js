// --- LÓGICA DEL MENÚ MÓVIL ---
const mobileMenu = document.querySelector('#mobile-menu');
const navLinks = document.querySelector('.nav-links');

if (mobileMenu) {
    mobileMenu.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
}

// Cerrar menú al hacer clic en un enlace
document.querySelectorAll('.nav-links a').forEach(n => n.addEventListener('click', () => {
    if (navLinks) navLinks.classList.remove('active');
}));

// --- LÓGICA DE LA GALERÍA ---
const galeriaItems = document.querySelectorAll('.galeria-item');
const nextBtn = document.querySelector('.galeria-next');
const prevBtn = document.querySelector('.galeria-prev');
let currentIdx = 0;

// Solo ejecutamos si los botones de la galería existen en la página
if (nextBtn && prevBtn && galeriaItems.length > 0) {
    
    function showImage(index) {
        galeriaItems.forEach(item => item.classList.remove('active'));
        galeriaItems[index].classList.add('active');
    }

    nextBtn.addEventListener('click', () => {
        currentIdx = (currentIdx + 1) % galeriaItems.length;
        showImage(currentIdx);
    });

    prevBtn.addEventListener('click', () => {
        currentIdx = (currentIdx - 1 + galeriaItems.length) % galeriaItems.length;
        showImage(currentIdx);
    });
}
