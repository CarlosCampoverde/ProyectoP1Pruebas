<?php
include 'php/conexion.php';
session_start();
$id = $_GET['id'];
$res = $conn->query("SELECT * FROM reservas WHERE id=$id");
$row = $res->fetch_assoc();
?>

<?php include 'templates/header.php'; ?>
<?php include 'templates/nav.php'; ?>

<div class="container">
  <h2>Editar Reserva</h2>
  <form action="php/actualizar_reserva.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label>Servicio</label>
    <input type="text" name="servicio" value="<?php echo $row['servicio']; ?>" required>
    <label>Fecha</label>
    <input type="date" name="fecha" value="<?php echo $row['fecha']; ?>" required>
    <label>Hora</label>
    <input type="time" name="hora" value="<?php echo $row['hora']; ?>" required>
    <button type="submit">Actualizar</button>
  </form>
</div>

<?php include 'templates/footer.php'; ?>
