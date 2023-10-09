<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
<!-- un formulario que permita subir archivos de tipo imagen. (jpg o png) con  tamaño máximo de 1 MB a la carpeta imagenes.  -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <input type="submit" value="Subir imagen" name="submit">
    </form>
    <!-- En la misma página, mostrar todas las imágenes en una tabla  de tres columnas siendo a su vez enlaces a los archivos subidos. (ajustar el ancho y el alto mediante propiedades css para que quepan). -->
    <?php 
    ?>
</body>
</html>