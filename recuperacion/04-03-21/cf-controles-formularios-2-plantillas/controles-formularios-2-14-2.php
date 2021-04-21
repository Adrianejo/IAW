<?php
/**
 * Controles en formularios (2) 14-2 - controles-formularios-2-14-2.php
 *
 * @author Escriba aquí su nombre
 *
 */
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Datos personales 5 (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Datos personales 5 (Resultado)</h1>

<?php
if (empty($_GET['nombre'])) {
  echo "<p style='color:#FF0000'>Debes de introducir un nombre</p>";
}
elseif (isset($_GET['nombre'])) {
  $_SESSION['nombre'] = $_GET['nombre'];
  echo "El nombre es : ".$_SESSION['nombre']. " </br>";
}

if (empty($_GET['apellidos'])) {
  echo "<p style='color:#FF0000'>Debes de introducir un apellido</p>";
}
elseif (isset($_GET['apellidos'])) {
  $_SESSION['apellidos'] = $_GET['apellidos'];
  echo "El apellido es : ".$_SESSION['apellidos']. " </br>";
}

if (empty($_GET['edad'])) {
  echo "<p style='color:#FF0000'>Debes de seleccionar una edad</p>";
}
elseif (isset($_GET['edad'])) {
  $_SESSION['edad'] = $_GET['edad'];
  echo "Su rango de edad esta : ".$_SESSION['edad']. " </br>";
}

if (empty($_GET['peso'])) {
  echo "<p style='color:#FF0000'>Debes de introducir un peso</p>";
}
elseif (isset($_GET['peso'])) {
  $_SESSION['peso'] = $_GET['peso'];
  echo "Su peso es de : ".$_SESSION['peso']. " </br>";
}

if (empty($_GET['genero'])) {
  echo "<p style='color:#FF0000'>Debes de seleccionar una genero</p>";
}
elseif (isset($_GET['genero'])) {
  $_SESSION['genero'] = $_GET['genero'];
  echo "Su genero es : ".$_SESSION['genero']. " </br>";
}

if (empty($_GET['estadoCivil'])) {
  echo "<p style='color:#FF0000'>Debes de seleccionar un estado civil</p>";
}
elseif (isset($_GET['estadoCivil'])) {
  $_SESSION['estadoCivil'] = $_GET['estadoCivil'];
  echo "Su estado civil es : ".$_SESSION['estadoCivil']. " </br>";
}
?>

  <p><a href="controles-formularios-2-14-1.php">Volver al formulario.</a></p>
  <p><a href="resumen.php">Resumen.</a></p>
  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
