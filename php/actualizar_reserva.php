<?php
include 'conexion.php';
session_start();

$id = $_POST['id'];
$servicio = $_POST['servicio'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

$conn->query("UPDATE reservas SET servicio='$servicio', fecha='$fecha', hora='$hora' WHERE id=$id");
header("Location: ../reservas.php");
?>
