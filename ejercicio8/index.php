<?php
include "persona.php";

$persona1 = new Persona("Robert", "Dinca", 20);
$persona2 = new Persona("Ana", "García", 17);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $persona1->nombreCompleto() ?> es mayor de edad: <?= $persona1->mayorEdad() ? "Sí" : "No" ?>
    <br>
    <?= $persona2->nombreCompleto() ?> es mayor de edad: <?= $persona2->mayorEdad() ? "Sí" : "No" ?>
    
</body>
</html>