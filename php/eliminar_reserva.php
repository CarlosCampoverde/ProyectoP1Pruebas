<?php
include 'conexion.php';
session_start();
$id = $_GET['id'];
$conn->query("DELETE FROM reservas WHERE id=$id");
header("Location: ../reservas.php");
?>
