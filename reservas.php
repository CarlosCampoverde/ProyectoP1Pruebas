<?php
include 'templates/header.php';
include 'templates/nav.php';
session_start();
?>

<div class="container">
  <h2>Reservar Servicio</h2>
  <form action="php/reservar.php" method="POST">
    <label>Servicio</label>
    <input type="text" name="servicio" required>
    <label>Fecha</label>
    <input type="date" name="fecha" required>
    <label>Hora</label>
    <input type="time" name="hora" required>
    <button type="submit">Reservar</button>
  </form>

  <h2>Tus Reservas</h2>
  <table>
    <tr>
      <th>Servicio</th>
      <th>Fecha</th>
      <th>Hora</th>
      <th>Acciones</th>
    </tr>
    <?php
    include 'php/conexion.php';
    $usuario = $_SESSION['usuario'];
    $res = $conn->query("SELECT * FROM reservas WHERE usuario='$usuario'");
    while($row = $res->fetch_assoc()){
      echo "<tr>
      <td>{$row['servicio']}</td>
      <td>{$row['fecha']}</td>
      <td>{$row['hora']}</td>
      <td>
        <a href='editar_reserva.php?id={$row['id']}'>Editar</a> |
        <a href='php/eliminar_reserva.php?id={$row['id']}' onclick='return confirm(\"¿Eliminar reserva?\")'>Eliminar</a>
      </td>
    </tr>";
    }
    ?>
  </table>
</div>

<?php include 'templates/footer.php'; ?>
