<?php
    $fp = fopen("datos.txt", "r");
    $datos = fread($fp, filesize("datos.txt"));
    $arrayDatos = explode(";", $datos);
    fclose($fp);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Pedidos</title>
</head>
<body>
    <table border="1px">
        <tr>
            <th>Fecha</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Jamón y queso</th>
            <th>Cantidad</th>
            <th>Napolitana</th>
            <th>Cantidad</th>
            <th>Mozzarella</th>
            <th>Cantidad</th>
        </tr>
        <?php
        for ($i=0; $i < count($arrayDatos)-1; $i++) { 
            if ($i % 9 == 0) {
                echo "<tr>";
            }
            echo "<td>" . $arrayDatos[$i] . "</td>";
            if ($i % 9 == 8) {
                echo "</tr>";
            }
        }
        ?>
    </body>
</html>