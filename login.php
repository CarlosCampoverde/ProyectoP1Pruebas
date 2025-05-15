<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form action="php/login.php" method="POST">
        <input type="email" name="email" placeholder="Correo" required><br>
        <input type="password" name="password" placeholder="Contraseña" required><br>
        <button type="submit">Ingresar</button>
    </form>
    <a href="registro.php">Registrarse</a>
</body>
</html>
