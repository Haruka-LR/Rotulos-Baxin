<?php include 'includes/header.php'; ?>

<main>
<section class="hero-container container">
    <div class="slider-wrapper">
        <div class="slider" id="main-slider">
            <div class="slide active" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/img/banner-1.1.jpeg');">
                <div class="slide-content">
                    <h1>Rótulación de Negocios</h1>
                    <p>Tu marca con la mejor calidad de Veracruz.</p>
                </div>
            </div>
            <div class="slide" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/img/6.jpeg');">
                <div class="slide-content">
                    <h1>Letreros Luminosos</h1>
                    <p>Haz que tu negocio destaque incluso en la oscuridad.</p>
                </div>
            </div>
            <div class="slide" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/img/banner-3.1.jpeg');">
                <div class="slide-content">
                    <h1>Vinilos Decorativos</h1>
                    <p>Diseños elegantes para interiores y oficinas.</p>
                </div>
            </div>
        </div>

        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </div>
</section>

<section id="nosotros" class="about-section container reveal">
    <div class="about-grid">
        <div class="about-text">
            <span class="subtitle">Nuestra Historia</span>
            <h2>Pasión por la <span class="highlight">Rotulación</span></h2>
            <p>En <strong>Rótulos Baxin</strong>, transformamos ideas en soluciones visuales de alto impacto. Con años de experiencia en <strong>Veracruz</strong>, nos hemos especializado en dar vida a la imagen de negocios locales y nacionales.</p>
            <p>Nuestra misión es combinar la tradición del rotulado con las técnicas más modernas de diseño y materiales de larga durabilidad.</p>
            
            <div class="stats">
                <div class="stat-item">
                    <span class="stat-number">+30</span>
                    <span class="stat-desc">Años de Exp.</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">100%</span>
                    <span class="stat-desc">Calidad</span>
                </div>
            </div>
        </div>

        <div class="about-visual">
            <div class="image-border">
                <img src="assets/img/logo.jpeg" alt="Logotipo Rótulos Baxin">
            </div>
        </div>
    </div>
</section>

    <section class="container page-nosotros">
        <section class="about-card-large reveal">
        <div class="card-header">
            <h1>Sobre Rótulos Baxin</h1>
            <p class="tagline">Calidad que se nota, durabilidad que convence.</p>
        </div>
        
        <div class="card-body">
            <div class="info-block">
                <h3>Nuestra Misión</h3>
                <p>Brindar soluciones de imagen publicitaria de alta calidad a través de técnicas de rotulación innovadoras, ayudando a nuestros clientes a destacar sus negocios en Veracruz.</p>
            </div>

            <div class="info-grid">
                <div class="info-item">
                    <i class="fas fa-check-circle"></i>
                    <h4>Experiencia</h4>
                    <p>Más de 30 años en el mercado respaldan cada trazo y cada instalación.</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-tools"></i>
                    <h4>Tecnología</h4>
                    <p>Utilizamos materiales de primera y herramientas modernas para acabados perfectos.</p>
                </div>
            </div>

            <div class="full-description">
                <h3>¿Quiénes somos?</h3>
                <p>Rótulos Baxin nació como un taller familiar y ha crecido gracias a la confianza de nuestros clientes. Nos apasiona la rotulación vehicular, los letreros luminosos y todo lo que implique transformar un espacio comercial en un imán para los ojos.</p>
            </div>
        </div>
        </section>
    </section>

    <section id="galeria" class="galeria-section">
    <div class="container">
        <div class="section-header">
            <h2 class="galeria-title">Galería</h2>
            <p class="galeria-subtitle">Nuestros trabajos y especialidades</p>
        </div>

        <div class="galeria-container">
            <div class="galeria-slider">
                <div class="galeria-item active">
                    <img src="assets/img/Galeria-1.jpeg" alt="Rotulación ">
                </div>
                <div class="galeria-item">
                    <img src="assets/img/Galeria-2.jpeg" alt="Letrero ">
                </div>
                <div class="galeria-item">
                    <img src="assets/img/Galeria-3.jpeg" alt="">
                </div>
                                <div class="galeria-item">
                    <img src="assets/img/Galeria-4.jpeg" alt="">
                </div>
                                <div class="galeria-item">
                    <img src="assets/img/Galeria-5.jpeg" alt="">
                </div>
                                <div class="galeria-item">
                    <img src="assets/img/Galeria-6.jpeg" alt="">
                </div>
                                <div class="galeria-item">
                    <img src="assets/img/Galeria-7.jpeg" alt="">
                </div>
                                <div class="galeria-item">
                    <img src="assets/img/Galeria-8.jpeg" alt="">
                </div>
                                <div class="galeria-item">
                    <img src="assets/img/Galeria-9.jpeg" alt="">
                </div>
                                <div class="galeria-item">
                    <img src="assets/img/Galeria-10.jpeg" alt="">
                </div>
                                <div class="galeria-item">
                    <img src="assets/img/Galeria-11.jpeg" alt="">
                </div>
                                <div class="galeria-item">
                    <img src="assets/img/Galeria-12.jpeg" alt="">
                </div>
                                <div class="galeria-item">
                    <img src="assets/img/Galeria-13.jpeg" alt="">
                </div>
                                <div class="galeria-item">
                    <img src="assets/img/Galeria-14.jpeg" alt="">
                </div>
                                <div class="galeria-item">
                    <img src="assets/img/Galeria-15.jpeg" alt="">
                </div>

            </div>
            
            <button class="galeria-prev"><i class="fas fa-chevron-left"></i></button>
            <button class="galeria-next"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</section>

    <section class="servicios container">
        <h2 class="section-title">Nuestros Servicios</h2>
        <div class="cards-grid">
            <div class="card reveal delay-1">
                <div class="card-image">
                    <img src="assets/img/1.jpeg" alt="ROTULACION  EN PINTURA (TRADICIONAL)">
                </div>
                <div class="card-content">
                    <h3>RÓTULACION  EN PINTURA (TRADICIONAL)</h3>
                    <p>Arte a mano alzada con acabados de alta resistencia y durabilidad para fachadas y bardas.</p>
                    <a href="https://wa.me/525624564960?text=Hola,%20me%20interesa%20saber%20m%C3%A1s%20sobre%20sus%20servicios%20de%20rotulaci%C3%B3n" 
                    class="btn-card" target="_blank">Saber más
                    </a>
                </div>
        </div>
        <div class="card reveal delay-2">
            <div class="card-image">
                <img src="assets/img/2.jpeg" alt="Rotulacion ...">
            </div>
            <div class="card-content">
                <h3>PINTURA Y ROTULOS</h3>
                <p>Servicios integrales de pintura comercial y rotulado profesional para renovar la imagen de tu local.</p>
                <a href="https://wa.me/525624564960?text=Hola,%20me%20interesa%20saber%20m%C3%A1s%20sobre%20sus%20servicios%20de%20rotulaci%C3%B3n" 
                    class="btn-card" target="_blank">Saber más
                    </a>
            </div>
        </div>
        <div class="card reveal delay-3">
            <div class="card-image">
                <img src="assets/img/3.jpeg" alt="Rotulacion ...">
            </div>
            <div class="card-content">
                <h3>RÓTULOS EN CORTE VINIL(POR COMPUTADORA)</h3>
                <p>Cortes de alta precisión para logotipos, señalética y decoración de cristales con acabados limpios.</p>
                <a href="https://wa.me/525624564960?text=Hola,%20me%20interesa%20saber%20m%C3%A1s%20sobre%20sus%20servicios%20de%20rotulaci%C3%B3n" 
                    class="btn-card" target="_blank">Saber más
                    </a>
            </div>
        </div>
                <div class="card reveal delay-4">
            <div class="card-image">
                <img src="assets/img/4.jpeg" alt="Rotulacion ...">
            </div>
            <div class="card-content">
                <h3>IMPRESION DIGITAL Y LONAS</h3>
                <p>Impresión de gran formato con colores vibrantes para banners, lonas publicitarias y anuncios externos.</p>
                <a href="https://wa.me/525624564960?text=Hola,%20me%20interesa%20saber%20m%C3%A1s%20sobre%20sus%20servicios%20de%20rotulaci%C3%B3n" 
                    class="btn-card" target="_blank">Saber más
                    </a>
            </div>
        </div>
        <div class="card reveal delay-5">
            <div class="card-image">
                <img src="assets/img/5.jpeg" alt="Rotulacion ...">
            </div>
            <div class="card-content">
                <h3>ANUNCIOS EN 3D </h3>
                <p>Letras en relieve y logos volumétricos que dan una apariencia elegante y profesional a tu negocio.</p>
                <a href="https://wa.me/525624564960?text=Hola,%20me%20interesa%20saber%20m%C3%A1s%20sobre%20sus%20servicios%20de%20rotulaci%C3%B3n" 
                    class="btn-card" target="_blank">Saber más
                    </a>
            </div>
        </div>

        <div class="card reveal delay-6">
            <div class="card-image">
                <img src="assets/img/6.jpeg" alt="Rotulacion ...">
            </div>
            <div class="card-content">
                <h3>CAJAS DE LUZ</h3>
                <p>Anuncios luminosos diseñados para que tu marca destaque y sea visible tanto de día como de noche.</p>
                <a href="https://wa.me/525624564960?text=Hola,%20me%20interesa%20saber%20m%C3%A1s%20sobre%20sus%20servicios%20de%20rotulaci%C3%B3n" 
                    class="btn-card" target="_blank">Saber más
                    </a>
            </div>
        </div>
        <div class="card reveal delay-7">
            <div class="card-image">
                <img src="assets/img/7.jpeg" alt="Rotulacion ...">
            </div>
            <div class="card-content">
                <h3>BASTIDORES </h3>
                <p>Estructuras metálicas resistentes para montar lonas y publicidad exterior de gran tamaño.</p>
                <a href="https://wa.me/525624564960?text=Hola,%20me%20interesa%20saber%20m%C3%A1s%20sobre%20sus%20servicios%20de%20rotulaci%C3%B3n" 
                class="btn-card" target="_blank">Saber más
                </a>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
