<?php
include 'conexion.php';
$id = $_GET['id'];

$sql = "DELETE FROM servicios WHERE id = '$id'";

if ($conexion->query($sql)) {
    header("Location: ../admin.php");
} else {
    echo "Error: " . $conexion->error;
}
?>
