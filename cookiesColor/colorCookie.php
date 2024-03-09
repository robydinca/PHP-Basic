<?php 
  if (isset($_POST['color'])) {
    setcookie('color', $_POST['color'], time() + 60 * 60 * 24 * 30);
    header('Location: colorCookie.php');
  }

  if (isset($_POST['limpia'])) {
    setcookie('color', '', time() - 60 * 60 * 24 * 30);
    header('Location: colorCookie.php');
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    if (isset($_COOKIE['color'])) {
      echo "<body style='background-color: ".$_COOKIE['color']."'>";
    } else {
      echo "<body>";
    }
  ?>

  <h1>Color obtenido de las cookies</h1>
  <form action="" method="post">
    <label for="color">Color de fondo</label>
    <input type="color" name="color" id="color">
    <input type="submit" value="Enviar">
    <input type="submit" value="Limpiar" name="limpia">
  </form>


</body>
</html>