<?php
// Configura para que entre todo usuario autenticado
session_start();

if (!isset($_SESSION["rol"]) || empty($_SESSION["rol"])) {
    header("Location: autenticacion.php");
} else {
    // Verifica que el valor de $_SESSION["rol"] sea válido
    $rolValido = ($_SESSION["rol"] == "admin");

    if ($rolValido) {
        header("Location: seguraAdmin.php");
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Segura</title>
</head>
<body>
    <p>Esta página la ves porque te has autenticado en el sistema.</p>
    <a href="salir.php">Cerrar sesión</a>
</body>
</html>
