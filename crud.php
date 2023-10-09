<?php
// Configura las credenciales de conexión a la base de datos
$hostname = "localhost"; // Cambia a la dirección del servidor de tu base de datos
$username = "aleandro"; // Cambia a tu nombre de usuario de MySQL
$password = "123a"; // Cambia a tu contraseña de MySQL
$database = "ventas.sql"; // Cambia al nombre de tu base de datos

// Conexión a la base de datos
$conexion = new mysqli($hostname, $username, $password, $database);

// Verifica la conexión
if ($conexion->connect_error) {
    die("Error en la conexión a la base de datos: " . $conexion->connect_error);
}

// Manejo de operaciones CRUD (Crear, Leer, Actualizar, Eliminar) aquí...

$conexion->close();
?>
