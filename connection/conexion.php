<!-- Archivo: ../connection/conexion.php -->

<?php

function conexion() {
    // Conexión a la base de datos
/*     $servername = "localhost"; // Cambia esto según tu configuración
    $username = "ghxumdmy_tamiperu";
    $password = "ghxumdmy_tamiperu";
    $dbname = "ghxumdmy_tamiperu"; */

    // Conexión a la base de datos
    $servername = "localhost"; // Cambia esto según tu configuración
    $username = "root";
    $password = "";
    $dbname = "ghxumdmy_tamiperu";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    return $conn;
}
?>
