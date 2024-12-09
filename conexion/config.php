<?php 
$servidor = 'localhost'; 
$usuario = 'root'; 
$contraseña = ''; 
$basededatos = 'proyectocomfaboy'; 

$conexion = new mysql($servidor, $usuario, $contraseña, $basededatos);

// Verifica la conexión
if ($conexion->connect_error) {
    die("No se puede conectar a la base de datos: " . $conexion->connect_error);
}
?>
