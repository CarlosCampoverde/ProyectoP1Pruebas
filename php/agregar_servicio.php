<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];

$sql = "INSERT INTO servicios (nombre, descripcion, precio) VALUES ('$nombre', '$descripcion', '$precio')";

if ($conexion->query($sql)) {
    header("Location: ../admin.php");
} else {
    echo "Error: " . $conexion->error;
}
?>
