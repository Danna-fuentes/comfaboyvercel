<?php
session_start();
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Consulta SQL para verificar si el usuario existe (haciendo la comparación del email en minúsculas)
        $sql = "SELECT * FROM usuario WHERE LOWER(Email) = LOWER('$email')";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
            // Recupera la información del usuario
            $user = $result->fetch_assoc();

            // Verifica si la contraseña ingresada coincide con el hash almacenado en la base de datos
            if (password_verify($password, $user['Contrasena'])) {
                // Si la contraseña es correcta, inicia la sesión
                $_SESSION['IdUsuario'] = $user['IdUsuario'];
                $_SESSION['NombreUsuario'] = $user['PrimerNombre'];
                header("Location: dashboard.php"); // Redirige al Dashboard
                exit();
            } else {
                // Si la contraseña no es correcta
                echo "Contraseña incorrecta.";
            }
        } else {
            // Si no se encuentra el email en la base de datos
            echo "No se encontró una cuenta con ese email.";
        }
    } else {
        // Si no se completan los campos
        echo "Por favor, complete todos los campos.";
    }
}

$conexion->close();
?>

