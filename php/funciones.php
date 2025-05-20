<?php
session_start();

function validarSesion() {
  if (!isset($_SESSION['usuario'])) {
    header("Location: ../login.php");
    exit;
  }
}

function sanitizar($cadena) {
  return htmlspecialchars(trim($cadena));
}

function escribirLog($accion) {
  $linea = "[" . date("Y-m-d H:i:s") . "] " . $accion . PHP_EOL;
  file_put_contents(RUTA_LOGS, $linea, FILE_APPEND);
}
?>
