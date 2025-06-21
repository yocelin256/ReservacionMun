<?php
$host = 'localhost';
$user = 'root';
$pass = '12345'; // asegúrate de que esta sea la contraseña real de root
$db   = 'reservacion';

$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
    die('Error en la conexión: ' . $conn->connect_error);
} 
?>
