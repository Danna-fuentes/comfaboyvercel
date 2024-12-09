<?php include('../templates/header.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comfaboy</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/cabaña.css">
</head>
<body>
    <section class="banner">
        <h1>Cabañas en Moniquirá</h1>
    </section>

    <a href="https://wa.me/573203472188" class="whatsapp-icon" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
    </a>

    <section class="accommodation">
        <div class="accommodation-grid">
            <!-- Tarjeta 1 -->
            <div class="card">
                <img src="../img/cabana1.jpeg" alt="Cabaña 1">
                <div class="card-content">
                    <h3>Cabaña Familiar</h3>
                    <p>Incluye dos habitaciones, cocina equipada, baño privado, y terraza.</p>
                    <center><a href="inicioSesion.html" class="reservas-button">RESERVAR</a></center>
                </div>
            </div>
            <!-- Tarjeta 2 -->
            <div class="card">
                <img src="../img/cabana2.jpeg" alt="Cabaña 2">
                <div class="card-content">
                    <h3>Cabaña Individual</h3>
                    <p>Perfecta para viajeros solitarios. Incluye una cama doble y baño privado.</p>
                    <center><a href="inicioSesion.html" class="reservas-button">RESERVAR</a></center>
                </div>
            </div>
            <!-- Tarjeta 3 -->
            <div class="card">
                <img src="../img/cabana3.jpeg" alt="Cabaña 3">
                <div class="card-content">
                    <h3>Suite de Pareja</h3>
                    <p>Incluye cama Queen, TV, nevera, tina, balcón con vista panorámica.</p>
                    <center><a href="inicioSesion.html" class="reservas-button">RESERVAR</a></center>
                </div>
            </div>
        </div>
    </section>
    <?php include('../templates/footer.php'); ?>
</body>
</html>
