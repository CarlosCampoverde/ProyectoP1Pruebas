<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form action="php/registrar.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required><br>
        <input type="email" name="email" placeholder="Correo" required><br>
        <input type="password" name="password" placeholder="Contraseña" required><br>
        <button type="submit">Registrarse</button>
    </form>
    <a href="login.php">¿Ya tienes cuenta? Inicia sesión</a>
</body>
</html>
