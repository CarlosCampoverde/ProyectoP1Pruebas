<?php
session_start();
include 'conexion.php';

$email = $_POST['email'];
$password = $_POST['password'];

$result = $conexion->query("SELECT * FROM usuarios WHERE email='$email'");

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        $_SESSION['usuario'] = $user;
        if ($user['rol'] == 'admin') {
            header("Location: ../admin.php");
        } else {
            header("Location: ../reservas.php");
        }
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Usuario no encontrado.";
}
?>
