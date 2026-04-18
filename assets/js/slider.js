let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
let autoSlideInterval;

function showSlide(index) {
    // Quitar clase activa de todos
    slides.forEach(slide => slide.classList.remove('active'));
    
    // Validar límites
    if (index >= slides.length) currentSlide = 0;
    else if (index < 0) currentSlide = slides.length - 1;
    else currentSlide = index;

    slides[currentSlide].classList.add('active');
}

function changeSlide(direction) {
    showSlide(currentSlide + direction);
    resetTimer(); // Reinicia los 5 segundos si el usuario toca la flecha
}

function startTimer() {
    autoSlideInterval = setInterval(() => {
        changeSlide(1);
    }, 3000); // 3 segundos
}

function resetTimer() {
    clearInterval(autoSlideInterval);
    startTimer();
}

// Iniciar al cargar
startTimer();
