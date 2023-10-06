<?php
//muestre todos los pedidos que contiene  el archivo de pedido de pizzas anteriormente creado “datos.txt”.
//Debe mostrar cada pedido como una fila de una tabla, y cada campo del pedido en una celda distinta.

    $fp = fopen("datos.txt", "r");
    $datos = fread($fp, filesize("datos.txt"));
    $arrayDatos = explode(";", $datos);
    fclose($fp);

    for ($i=0; $i < count($arrayDatos); $i++) {
        
        }


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
            <th>Cantidad Jamón y queso</th>
            <th>Napolitana</th>
            <th>Cantidad Napolitana</th>
            <th>Mozzarella</th>
            <th>Cantidad Mozzarella</th>
        </tr>
        <?php 
           //bucle que recorre el array y cada 9 elementos crea un tr
            for ($i=0; $i < count($arrayDatos); $i++) { 
                if ($i % 9 == 0) {
                    echo "<tr>";
                }
                echo "<td>" . $arrayDatos[$i] . "</td>";
                if ($i % 9 == 8) {
                    echo "</tr>";
                }
            }

        ?>
    </table>
</body>
</html>