<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['rol'] != 'admin') header("Location: login.php");
include 'php/conexion.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
</head>
<body>
    <h2>Servicios</h2>
    <form action="php/agregar_servicio.php" method="POST">
        <input type="text" name="nombre" placeholder="Servicio" required>
        <textarea name="descripcion" placeholder="Descripción"></textarea>
        <input type="number" name="precio" placeholder="Precio" step="0.01">
        <button type="submit">Agregar</button>
    </form>
    <ul>
        <?php
        $servicios = $conexion->query("SELECT * FROM servicios");
        while ($s = $servicios->fetch_assoc()) {
            echo "<li>{$s['nombre']} - \${$s['precio']}
                <a href='php/eliminar_servicio.php?id={$s['id']}'>Eliminar</a></li>";
        }
        ?>
    </ul>
    <a href="php/logout.php">Cerrar sesión</a>
</body>
</html>
