<?php
$conexion = new mysqli("localhost", "root", "", "reservas_gimnasio");
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
