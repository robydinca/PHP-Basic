<?php
include_once './externo.php';
if (isset($_POST['envia'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $resultado = potencia($a, $b);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 bis</title>
</head>
<body>
    <h1>CALCULADORA POTENCIA</h1>
    <form action="" method="post">
        <label for="a">A</label>
        <input type="number" name="a" id="a">
        <label for="b">B</label>
        <input type="number" name="b" id="b">
        <input type="submit" value="Calcular" name="envia">
    </form>

    <?php
    if (isset($resultado)){
        echo "<p>El resultado es $resultado</p>";
    }
    ?>
</body>
</html>