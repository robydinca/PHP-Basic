<?php
// configura para destruir la sesión y volver a la página de inicio
session_start();

// Destruir la sesión
session_destroy();


// Redirigir a la página de inicio
header("Location: autenticacion.php");

?>
