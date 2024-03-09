<?php
require_once "config.php";

// Conexión a la base de datos
$mysqli = new mysqli($DB_host, $DB_user, $DB_password, $DB_name, $DB_port);
if ($mysqli->connect_errno) {
  echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " .
    $mysqli->connect_error;
  exit();
}

// Si ha pulsado el botón entrar
if (isset($_POST["entrar"])) {
  // Aquí recibe los datos y comprueba si existe en la tabla de usuarios
  $user = $_POST["login"];
  $pass = $_POST["password"];

  // Evitar la inyección de SQL
  $consulta = "SELECT * FROM users WHERE login = ? AND password = ?";
  $stmt = $mysqli->prepare($consulta);
  $stmt->bind_param("ss", $user, $pass);
  $stmt->execute();
  $resultado = $stmt->get_result();

  // Si existe, crea la sesión sin nombre y crea la variable de sesión para recoger el valor del rol
  if ($resultado->num_rows == 1) {
    // Verificar si la sesión ya está iniciada
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }
    $_SESSION["rol"] = $resultado->fetch_assoc()["rol"];
    $_SESSION["login"] = $login;
    header("Location: segura.php");
    exit();
  } else {
    // Si no existe, informa a la página mediante URL
    header("Location: autenticacion.php?error=1");
    exit();
  }
}

// Cerrar la conexión después de usarla
$mysqli->close();
?>

<html>

  <body>
    <p>1.- Cree una base de datos y una tabla llamada usuarios con los campos: login(varchar 20) PK, password( varchar (512)) rol( Enum("admin","usuario"). </p>
    <p>2.- Rellene los datos de config.php con las credenciales de acceso a su base de datos</p>
    <p>3.- Abra este archivo y cree la comprobación de autenticación </p>
    <form method="POST" id="formularioAutenticacion">

      Usuario: <input type="text" name="login" />
      Contraseña: <input type="password" name="password" />
      <input type="submit" name="entrar" value="Entrar" />

    </form>

    <?php
      if (isset($_GET["error"])) {
        echo "<p>Usuario o contraseña incorrectos</p>";
      }8
    ?>

  </body>

</html>
