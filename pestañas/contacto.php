<?php include('../templates/header.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comfaboy</title>
    <link rel="stylesheet" href="../css/contacto.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/index.css">

     <!-- Agrega este enlace para la fuente Dancing Script -->
     <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">

</head>
<section class="banner">
    <h1>Información</h1>
</section>

    <!-- Botón de WhatsApp -->
    <a href="https://wa.me/573203472188" class="whatsapp-icon" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
    </a>

    <!-- Contenedor principal -->
    <div class="container">
        <!-- Formulario de Contacto -->
        <div class="form-container">
            <h1>Información <span class="highlight">Comfaboy</span></h1>
            <hr class="divider">
            <form action="#" method="POST">
                <div class="form-group">
                    <input type="text" placeholder="Indique su Nombre *" required>
                    <input type="email" placeholder="Email de contacto*" required>
                </div>
                <div class="form-group">
                    <input type="tel" placeholder="Número de contacto">
                    <input type="text" placeholder="¿De qué ciudad nos contacta?">
                </div>
                <input type="text" placeholder="Indique el motivo de consulta">
                <textarea placeholder="Escriba su pregunta..."></textarea>
                <button type="submit" class="btn-submit">Enviar Mensaje</button>
            </form>
        </div>

        <!-- Información del Hotel -->
        <div class="info-container">
            <h2>Centro Vacacional <span class="highlight">Comfaboy</span></h2>
            <hr class="divider">
            <p>Centro vacacional Comfaboy, hoteles, cabañas y habitaciones familiares con piscina, toboganes, restaurante y variedad de servicios en Moniquirá. </p>
            <ul>
                <li><strong>Ubicación:</strong> Km 1 Vía Moniquirá - Santa Sofía</li>
                <li><strong>Contacto:</strong> 01-800-0940929  - 314 411 9261</li>
                <li><strong>Email:</strong> cvmoniquira@gmail.com</li>
            </ul>
        </div>
    </div>

    <!-- Recorrido Virtual -->
    <div class="tour-virtual-container">
        <h2>Recorrido Virtual</h2>
        <hr class="divider">
        <iframe src="https://tours.enki360grados.com/comfaboymoniquira/" 
                width="100%" 
                height="600px" 
                style="border: none; border-radius: 8px;" 
                allowfullscreen>
        </iframe>
    </div>

    <?php include('../templates/footer.php')?>
</body>
