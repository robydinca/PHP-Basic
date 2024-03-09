<?php
// Configuración para permitir solo el acceso al rol 'admin'
session_start();

if (!isset($_SESSION["rol"]) || $_SESSION["rol"] !== "admin") {
    header("Location: autenticacion.php");
    exit(); // Asegura que el script se detenga después de redirigir
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Administrador</title>
</head>
<body>
    <p>Esta página la ves porque te has autenticado en el sistema como administrador.</p>
    <a href="salir.php">Cerrar sesión</a>
</body>
</html>
