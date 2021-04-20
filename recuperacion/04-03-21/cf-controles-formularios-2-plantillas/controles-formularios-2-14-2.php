<?php
/**
 * Controles en formularios (2) 14-2 - controles-formularios-2-14-2.php
 *
 * @author Escriba aquí su nombre
 *
 */
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
  echo "El nombre es : ".$_GET['nombre']. " </br>";
}

if (empty($_GET['apellidos'])) {
  echo "<p style='color:#FF0000'>Debes de introducir un apellido</p>";
}
elseif (isset($_GET['apellidos'])) {
  echo "El apellido es : ".$_GET['apellidos']. " </br>";
}

if (empty($_GET['edad'])) {
  echo "<p style='color:#FF0000'>Debes de seleccionar una edad</p>";
}
elseif (isset($_GET['edad'])) {
  echo "Su rango de edad esta : ".$_GET['edad']. " </br>";
}

if (empty($_GET['peso'])) {
  echo "<p style='color:#FF0000'>Debes de introducir un peso</p>";
}
elseif (isset($_GET['peso'])) {
  echo "Su peso es de : ".$_GET['peso']. " </br>";
}

if (empty($_GET['genero'])) {
  echo "<p style='color:#FF0000'>Debes de seleccionar una genero</p>";
}
elseif (isset($_GET['genero'])) {
  echo "Su genero es : ".$_GET['genero']. " </br>";
}

if (empty($_GET['estadoCivil'])) {
  echo "<p style='color:#FF0000'>Debes de seleccionar un estado civil</p>";
}
elseif (isset($_GET['estadoCivil'])) {
  echo "Su estado civil es : ".$_GET['estadoCivil']. " </br>";
}

if (empty($_GET['estadoCivil'])) {
  echo "<p style='color:#FF0000'>Debes de seleccionar un estado civil</p>";
}
elseif (isset($_GET['estadoCivil'])) {
  echo "Su estado civil es : ".$_GET['estadoCivil']. " </br>";
}
?>

  <p><a href="controles-formularios-2-14-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
