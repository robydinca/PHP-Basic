<?php
if (isset($_POST['envia'])){
    $resultado = array();
    foreach ($_POST as $clave => $valor){
        if (is_numeric($valor)){
            $resultado[] = $valor;
        }
    }
}

function mayorMenorMedia($array){
    $mayor = $array[0];
    $menor = $array[0];
    $suma = 0;
    foreach ($array as $clave => $valor){
        if ($valor > $mayor){
            $mayor = $valor;
        }
        if ($valor < $menor){
            $menor = $valor;
        }
        $suma += $valor;
    }
    $media = $suma / 5;
    return array('mayor' => $mayor, 'menor' => $menor, 'media' => $media);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Devolución de arrays en funciones</h1>
    <form action="" method="post">
        <label for="a">A</label>
        <input type="number" name="a" id="a">
        <label for="b">B</label>
        <input type="number" name="b" id="b">
        <label for="c">C</label>
        <input type="number" name="c" id="c">
        <label for="d">D</label>
        <input type="number" name="d" id="d">
        <label for="e">E</label>
        <input type="number" name="e" id="e">
        <input type="submit" value="Calcular" name="envia">
    </form>

    <?php
        print_r (mayorMenorMedia($resultado)); 
    ?>


</body>
</html>