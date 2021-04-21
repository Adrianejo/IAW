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
    Resuemen Sessions.
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Datos personales 5 (Resultado)</h1>
  
<?php
  if (isset($_SESSION['nombre'])) {
  echo "El nombre es: ".$_SESSION['nombre']. " </br>";
  }
  if (isset($_SESSION['apellidos'])) {
  echo "El apellido es: ".$_SESSION['apellidos']. " </br>";
  }
  if (isset($_SESSION['edad'])) {
  echo "la edad es: ".$_SESSION['edad']. " </br>";
  }
  if (isset($_SESSION['peso'])) {
  echo "El peso es: ".$_SESSION['peso']. " </br>";
  }
  if (isset($_SESSION['genero'])) {
  echo "El genero es: ".$_SESSION['genero']. " </br>";
  }
  if (isset($_SESSION['estadoCivil'])) {
  echo "Su estado civil es: ".$_SESSION['estadoCivil']. " </br>";
}
?>
<p><a href="controles-formularios-2-14-1.php">Volver al formulario.</a></p>
  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>