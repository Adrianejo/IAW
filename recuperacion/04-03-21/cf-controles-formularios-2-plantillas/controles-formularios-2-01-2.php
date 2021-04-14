<?php
/**
 * Controles en formularios (2) 1-2 - controles-formularios-2-01-2.php
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
    Datos personales 1 (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Datos personales 1 (Resultado)</h1>

<?php
if (isset($_GET['nombre'])) {
  echo "El nombre es: ".$_GET['nombre']. " </br>";
}
else {
  echo "<p style='color:#FF0000'>Debes poner algo en este campo</p>";
}
if (isset($_GET['apellidos'])) {
  echo "El apellido es: ".$_GET['apellidos']. " </br>";
}
else {
  echo "<p style='color:#FF0000'>Debes poner algo en este campo</p>";
}


?>

  <p><a href="controles-formularios-2-01-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
