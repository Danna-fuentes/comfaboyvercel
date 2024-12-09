<?php include('../templates/header.php') ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comfaboy</title>
    <link rel="stylesheet" href="../css/servicios.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>

<section class="banner">
    <h1>Nuestros Servicios</h1>
</section>

<!-- Services Section -->
<section class="services">
    <div class="service-item">
        <i class="fas fa-wifi"></i>
        <h3>Zona WIFI</h3>
        <p>Conexión gratuita para todos nuestros huéspedes.</p>
    </div>
    <div class="service-item">
        <i class="fas fa-swimmer"></i>
        <h3>Piscina para Niños y Adultos</h3>
        <p>Disfruta de nuestras piscinas diseñadas para todas las edades.</p>
    </div>
    <div class="service-item">
        <i class="fas fa-parking"></i>
        <h3>Parqueadero Gratis</h3>
        <p>Zona de parqueo gratuito para visitantes y huéspedes.</p>
    </div>
    <div class="service-item">
        <i class="fas fa-gamepad"></i>
        <h3>Zona de Juegos</h3>
        <p>Espacios para diversión, con juegos para todas las edades.</p>
    </div>
    <div class="service-item">
        <i class="fas fa-hot-tub"></i>
        <h3>Zona Húmeda</h3>
        <p>Relájate en nuestro sauna y spa especialmente diseñados para ti.</p>
    </div>
    <div class="service-item">
        <i class="fas fa-utensils"></i>
        <h3>Servicio a Restaurante</h3>
        <p>Disfruta de lo mejor de la gastronomía en nuestro restaurante.</p>
    </div>
</section>

<!-- Carousel Section -->
<section class="carousel-container">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="../img/fondo2.jpg" alt="Imagen 1"></div>
            <div class="swiper-slide"><img src="../img/fondo3.jpg" alt="Imagen 2"></div>
            <div class="swiper-slide"><img src="../img/fondo4.jpg" alt="Imagen 3"></div>
            <div class="swiper-slide"><img src="../img/fondo5.jpg" alt="Imagen 4"></div>
            <div class="swiper-slide"><img src="../img/fondo6.jpg" alt="Imagen 5"></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="../js/carrusel.js"></script>

<?php include('../templates/footer.php') ?>
</body>

