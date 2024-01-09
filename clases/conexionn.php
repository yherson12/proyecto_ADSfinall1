<?php


$servername = "localhost";
$username = "root";
$password = "123456789";
$database = "ventas";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa";

// Aquí puedes realizar tus operaciones con la base de datos

// Cerrar la conexión
$conn->close();
?>
