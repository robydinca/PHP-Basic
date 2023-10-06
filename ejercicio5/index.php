<?php
    if (isset($_POST['guardar'])) {
        $nombre = htmlspecialchars($_POST['nombre']);
        $direccion = htmlspecialchars($_POST['direccion']);
        $jamonyqueso = htmlspecialchars($_POST['jamonyqueso']);
        $cantidad_jamonyqueso = htmlspecialchars($_POST['cantidad_jamonyqueso']);
        $napolitana = htmlspecialchars($_POST['napolitana']);
        $cantidad_napolitana = htmlspecialchars($_POST['cantidad_napolitana']);
        $mozzarella = htmlspecialchars($_POST['mozzarella']);
        $cantidad_mozzarella = htmlspecialchars($_POST['cantidad_mozzarella']);
        
        $fp = fopen("datos.txt", "a");
        $datos = date("d/m/Y H:i:s") . ";" . $nombre . ";" . $direccion . ";" . $jamonyqueso . ";" . $cantidad_jamonyqueso . ";" . $napolitana . ";" . $cantidad_napolitana . ";" . $mozzarella . ";" . $cantidad_mozzarella . "\n";
        fwrite($fp, $datos);
        fclose($fp);

        $mensaje = "Pedido guardado";

    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Pedido</h1>
    <form  action="" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion" required>
        <br>
        <label for="jamonyqueso">Jamón y queso</label>
        <input type="checkbox" name="jamonyqueso" id="jamonyqueso" value="jamonyqueso">
        <input type="number" name="cantidad_jamonyqueso" id="cantidad_jamonyqueso" min="0" max="10">
        <br>
        <label for="napolitana">Napolitana</label>
        <input type="checkbox" name="napolitana" id="napolitana" value="napolitana">
        <input type="number" name="cantidad_napolitana" id="cantidad_napolitana" min="0" max="10">
        <br>
        <label for="mozzarella">Mozzarella</label>
        <input type="checkbox" name="mozzarella" id="mozzarella" value="mozarella">
        <input type="number" name="cantidad_mozzarella" id="cantidad_mozzarella" min="0" max="10">
        <br>
        <input type="submit" value="Confirmar" name="guardar" value="guarda">
    </form>

    <?php
        if (isset($mensaje)) {
            echo $mensaje;
        }
    ?>
</body>
</html>