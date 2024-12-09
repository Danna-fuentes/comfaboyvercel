<?php include('../templates/header.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comfaboy</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/habitaciones.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">

    <!-- Agrega este enlace para la fuente Dancing Script -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="banner">
        <h1>Habitaciones en Moniquirá</h1>
    </section>

    <a href="https://wa.me/573203472188" class="whatsapp-icon" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
    </a>

    <section class="accommodation">
        <div class="accommodation-grid">
            <!-- Card 1 -->
            <div class="card">
                <img src="../img/habitacion1.jpg" >
                <div class="card-content">
                    <h5>sadkjaskdj</h5>
                    <center><a href="inicioSesion.html" class="reservas-button">RESERVAR</a></center>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="card">
                <img src="../img/habitacion2.jpeg" >
                <div class="card-content">
                    <h3></h3>
                    <center><a href="inicioSesion.html" class="reservas-button">RESERVAR</a></center>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="card">
                <img src="../img/habitacion3.png">
                <div class="card-content">
                    <h3><CENTER>SUIT DE PAREJA</CENTER></h3>
                    <h5>Incluye cama Queen, TV, nevera, baño, ducha, tina, balcón, vista panorámica, desayuno, servicio de piscina y parqueadero.</h5>
                    <center><a href="inicioSesion.html" class="reservas-button">RESERVAR</a></center>
                </div>
            </div>
        </div>
    </section>
    <?php include('../templates/footer.php');?>
</body>
</html>
