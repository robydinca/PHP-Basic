<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Realizar usando bucles definidos e indefinidos el código necesario para ...
    Crear en un array indexado de 0 a 10 otro array con los valores de la tabla de multiplicar.
    Una vez creado el array.  Usando el bucle foreach de php mostrar el resultado creando una tabla HTML para cada número de 0 a 10.
    -->
    <h1>Tablas de multiplicar del 1 al 10</h1>
    <?php

    $tablaMultiplicar = array();

    for($i=0; $i<=10; $i++){
        for($j=0; $j<=10; $j++){
            $tablaMultiplicar[$i][$j] = $i * $j;
        }
    }

    foreach($tablaMultiplicar as $clave1 => $valor1){
        echo "<table>";
        echo "<tr><td>Tabla del $clave1</td></tr>";
        foreach($valor1 as $clave2 => $valor2){
            echo "<tr><td>$clave1 x $clave2 = $valor2</td></tr>";
        }
        echo "</table>";
        unset($tablaMultiplicar);
    }

    ?>
</body>
</html>