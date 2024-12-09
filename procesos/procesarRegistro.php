<?php
include('../config.php'); // Incluye la configuración de la base de datos

// Verifica que todos los datos requeridos están presentes
if (isset($_POST['primer_nombre'], $_POST['segundo_nombre'], $_POST['primer_apellido'], $_POST['segundo_apellido'], $_POST['documento'], $_POST['telefono'], $_POST['email'], $_POST['contrasena'])) {
    $primer_nombre = $_POST['primer_nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $primer_apellido = $_POST['primer_apellido'];
    $segundo_apellido = $_POST['segundo_apellido'];
    $documento = $_POST['documento'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT); // Hash de la contraseña

    // Insertar el nuevo usuario en la base de datos
    $sql = "INSERT INTO usuario (PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Documento, Telefono, Email, Contrasena) 
            VALUES ('$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$documento', '$telefono', '$email', '$contrasena')";

    if ($conexion->query($sql) === TRUE) {
        header("Location: ../pestañas/inicioSesion.html"); // Redirige al inicio de sesión
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
} else {
    echo "Por favor, completa todos los campos.";
}

$conexion->close();
?>
