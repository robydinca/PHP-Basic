<?php
$mensaje = "";

if (isset($_POST['enviar'])) {
    $archivo = $_FILES['archivo']['name'];
    $temp = $_FILES['archivo']['tmp_name'];
    $tipo = $_FILES['archivo']['type'];
    $tamano = $_FILES['archivo']['size'];
    $destino = "./imagenes/" . $archivo;

    // Verificar el tipo y el tamaño del archivo
    if (($tipo == "image/jpeg" || $tipo == "image/png") && $tamano <= 1024 * 1024) {
        if (move_uploaded_file($_FILES['archivo']['tmp_name'], $destino)) {
            $mensaje = "El archivo ha sido cargado correctamente.";
        } else {
            $mensaje = "Ocurrió algún error al subir el fichero. No pudo guardarse.";
        }
    } else {
        $mensaje = "La extensión o el tamaño de los archivos no es correcta. Se permiten archivos .png o .jpg y se permiten archivos de 1 MB máximo.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir y Mostrar Imágenes</title>
    <style>
        form * { display: block; margin-bottom: 10px; }
        img { width: 100px; height: 100px; }
    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <b>Enviar imagen: </b>
        <input name="archivo" type="file">
        <input type="submit" value="enviar" name="enviar">
    </form>

    <?php echo $mensaje; ?>

    <table border="1">
        <?php
        $directorio = opendir("imagenes");
        $i = 0;
        while ($imagen = readdir($directorio)) {
            if ($imagen != "." && $imagen != "..") {
                if ($i % 3 == 0) {
                    echo "<tr>";
                }
                echo "<td><a href='imagenes/$imagen'><img src='imagenes/$imagen' alt='$imagen'></a></td>";
                if ($i % 3 == 2) {
                    echo "</tr>";
                }
                $i++;
            }
        }
        ?>
    </table>
</body>
</html>
