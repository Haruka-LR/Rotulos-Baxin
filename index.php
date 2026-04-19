<?php include 'includes/header.php'; ?>

<main>
<section class="hero-container container">
    <div class="slider-wrapper">
        <div class="slider" id="main-slider">
            <div class="slide active" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/img/banner-1.jpeg');">
                <div class="slide-content">
                    <h1>Rótulación Vehicular</h1>
                    <p>Tu marca en movimiento con la mejor calidad de Tizayuca.</p>
                </div>
            </div>
            <div class="slide" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/img/banner-2.jpeg');">
                <div class="slide-content">
                    <h1>Letreros Luminosos</h1>
                    <p>Haz que tu negocio destaque incluso en la oscuridad.</p>
                </div>
            </div>
            <div class="slide" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/img/banner-3.jpeg');">
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
            <p>En <strong>Rótulos Baxin</strong>, transformamos ideas en soluciones visuales de alto impacto. Con años de experiencia en Veracruz, nos hemos especializado en dar vida a la imagen de negocios locales y nacionales.</p>
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

    <section class="servicios container">
        <h2 class="section-title">Nuestros Servicios</h2>
        <div class="cards-grid">
            <div class="card reveal delay-1">
                <div class="card-image">
                    <img src="assets/img/1.jpeg" alt="ROTULACION  EN PINTURA (TRADICIONAL)">
                </div>
                <div class="card-content">
                    <h3>RÓTULACION  EN PINTURA (TRADICIONAL)</h3>
                    <p>Publicidad en Movimiento para tu negocio.</p>
                    <a href="#" class="btn-card">Saber Más</a>
                </div>
        </div>
        <div class="card reveal delay-2">
            <div class="card-image">
                <img src="assets/img/2.jpeg" alt="Rotulacion ...">
            </div>
            <div class="card-content">
                <h3>PINTURA Y ROTULOS</h3>
                <p>Publicidad en Movimiento para tu negocio.</p>
                <a href="#" class="btn-card">Saber Más</a>
            </div>
        </div>
        <div class="card reveal delay-3">
            <div class="card-image">
                <img src="assets/img/3.jpeg" alt="Rotulacion ...">
            </div>
            <div class="card-content">
                <h3>RÓTULOS EN CORTE VINIL(POR COMPUTADORA)</h3>
                <p>Publicidad en Movimiento para tu negocio.</p>
                <a href="#" class="btn-card">Saber Más</a>
            </div>
        </div>
                <div class="card reveal delay-4">
            <div class="card-image">
                <img src="assets/img/4.jpeg" alt="Rotulacion ...">
            </div>
            <div class="card-content">
                <h3>IMPRESION DIGITAL Y LONAS</h3>
                <p>Publicidad en Movimiento para tu negocio.</p>
                <a href="#" class="btn-card">Saber Más</a>
            </div>
        </div>
        <div class="card reveal delay-5">
            <div class="card-image">
                <img src="assets/img/5.jpeg" alt="Rotulacion ...">
            </div>
            <div class="card-content">
                <h3>ANUNCIOS EN 3D </h3>
                <p>Publicidad en Movimiento para tu negocio.</p>
                <a href="#" class="btn-card">Saber Más</a>
            </div>
        </div>

        <div class="card reveal delay-6">
            <div class="card-image">
                <img src="assets/img/6.jpeg" alt="Rotulacion ...">
            </div>
            <div class="card-content">
                <h3>CAJAS DE LUZ</h3>
                <p>Publicidad en Movimiento para tu negocio.</p>
                <a href="#" class="btn-card">Saber Más</a>
            </div>
        </div>
        <div class="card reveal delay-7">
            <div class="card-image">
                <img src="assets/img/6.jpeg" alt="Rotulacion ...">
            </div>
            <div class="card-content">
                <h3>BASTIDORES </h3>
                <p>Publicidad en Movimiento para tu negocio.</p>
                <a href="#" class="btn-card">Saber Más</a>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
