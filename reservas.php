<?php
session_start();
if (!isset($_SESSION['usuario'])) header("Location: login.php");
include 'php/conexion.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reservas</title>
</head>
<body>
    <h2>Reservar Servicio</h2>
    <form action="php/reservar.php" method="POST">
        <select name="servicio_id">
            <?php
            $servicios = $conexion->query("SELECT * FROM servicios");
            while ($s = $servicios->fetch_assoc()) {
                echo "<option value='{$s['id']}'>{$s['nombre']}</option>";
            }
            ?>
        </select><br>
        <input type="date" name="fecha" required><br>
        <input type="time" name="hora" required><br>
        <button type="submit">Reservar</button>
    </form>
    <a href="php/logout.php">Cerrar sesión</a>
</body>
</html>
