<!-- Archivo: ../connection/conexion.php -->

<?php

function conexion() {
    // Conexión a la base de datos, LA CONEXION LO CONFIGURAS ASI COMO ESTA EN EL HOST

    $servername = "localhost"; // Cambia esto según tu configuración
    $username = "root";
    $password = "";
    $dbname = "tamiperu";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    return $conn;
}
?>
