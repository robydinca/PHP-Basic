<?php
    if (isset($_POST['enviar'])){
        foreach($_POST as $key => $value){
            echo "$key : $value <br>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nombre" required>
        <input type="text" name="apellido1" required>
        <input type="text" name="apellido2" required>
        <input type="text" name="telefono" required>
        <input type="submit" name="enviar" value="enviar">
    </form>
</body>
</html>