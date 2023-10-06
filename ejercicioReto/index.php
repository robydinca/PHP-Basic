<?php
    if (isset($_POST['guardar'])) {
        $nombreArchivo = htmlspecialchars($_POST['nombreArchivo']);
        $datos = $_POST ['datos'];
        
        if ($fp = fopen($nombreArchivo, "w")){
            fwrite($fp, $datos);
            fclose($fp);
        } else {
            $mensaje = "No se ha podido crear el archivo";
        }
    }

    if (isset($_POST['abrir'])) {
        $nombreArchivo = htmlspecialchars($_POST['nombreArchivo']);
        if (file_exists($nombreArchivo)) {
            $fp = fopen($nombreArchivo, "r");
            $datos = fread($fp, filesize($nombreArchivo));
            fclose($fp);
        } else {
            $mensaje = "El archivo no existe";
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor</title>
    <script>
        function validar(formulario){
            if(formulario.nombreArchivo.value == ""){
                alert("Escribe el nombre del archivo, por favor");
                formulario.nombreArchivo.focus();
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <form action="" method="post" onsubmit="return validar(this);">
        <label for="text">Nombre del archivo</label>
        <input type="text" name="nombreArchivo" id="text" value="<?php echo $nombreArchivo?>">
        <textarea name="datos" id="" cols="60" rows="30">
            <?php
                if (isset($datos)) {
                    echo $datos;
                }
            ?>
        </textarea>
        <input type="submit" name="guardar" value="guarda">
        <form action="" method="post">
            <input type="submit" name="abrir" value="abre">
        </form>
    </form>


    <?php
        if (isset($mensaje)) {
            echo $mensaje;
        }
    ?>

</body>
</html>