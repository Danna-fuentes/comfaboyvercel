<?php include('templates/header.php');?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comfaboy</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">

     <!-- Agrega este enlace para la fuente Dancing Script -->
     <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
   
    <section class="hero">
        <div class="hero-content">
            <h1>COMFABOY</h1>
            <h2>CENTRO VACACIONAL MONIQUIRÁ</h2>
            <p>Disfruta de lo mejor de Moniquirá en Boyacá - Colombia, alojándote en nuestro Centro Vacacional.</p>
            <div class="hero-buttons">
                <a href="servicios.php" class="btn btn-secondary">VER SERVICIOS</a>
            </div>
        </div>
    </section>

    <section class="accommodation">
        <h2>Habitaciones, Cabañas & Apartamentos</h2>
        <div class="accommodation-grid">
            <!-- Card 1 -->
            <div class="card">
                <img src="../img/habitacion1.jpg" alt="Habitación sencilla">
                <div class="card-content">
                    <h3>Habitaciones sencillas, familiares o complementarias.</h3>
                    <p><span class="highlight">Reserva ya</span> / Noche</p>
                    <p class="rating">★★★★★</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="card">
                <img src="img/cabana1.jpeg" alt="Cabañas">
                <div class="card-content">
                    <h3>Cabañas dotadas para 4, 6, 8 o 12 personas</h3>
                    <p><span class="highlight">Reserva ya</span> / Noche</p>
                    <p class="rating">★★★★★</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="card">
                <img src="img/apartamento3.jpeg" alt="Apartamento">
                <div class="card-content">
                    <h3>Alojamiento en apartamentos, dotados y confiables.</h3>
                    <p><span class="highlight">Reserva ya</span> / Noche</p>
                    <p class="rating">★★★★★</p>
                </div>
            </div>
        </div>
    </section>
    <?php include('templates/footer.php'); ?>

</body>
