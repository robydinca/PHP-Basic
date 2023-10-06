<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Usando el bucle foreach mostrar las claves y los valores de las variables superglobales $_SERVER y $_ENV si el resultado es un array imprimirlo con print_r() -->  
    <?php

    echo "<h1>Variable superglobal \$_SERVER</h1>";
    echo "<ul>";
    foreach($_SERVER as $clave => $valor){
        if(is_array($valor)){
            echo "<li>clave:$clave valor:";
            print_r($valor);
            echo "</li>";
        }else{
            echo "<li>clave:$clave valor:$valor</li>";
        }
    }
    echo "</ul>";

    echo "<h1>Variable superglobal \$_ENV</h1>";
    echo "<ul>";
    foreach($_ENV as $clave => $valor){
        if(is_array($valor)){
            echo "<li>clave:$clave valor:";
            print_r($valor);
            echo "</li>";
        }else{
            echo "<li>clave:$clave valor:$valor</li>";
        }
    }


    ?>
</body>
</html>