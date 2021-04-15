<?php
/**
 * Controles en formularios (2) 11-2 - controles-formularios-2-11-2.php
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
    Cuadrado con bordes redondeados (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Cuadrado con bordes redondeados (Resultado)</h1>

<?php
if (empty($_GET['lado']) & empty($_GET['esquina'])) {
  echo "<p style='color:#FF0000'>Debes de introducir valores a la esquina y al lado</p>";
}
elseif (empty($_GET['esquina'])) {
  echo "<p style='color:#FF0000'>Debes de introducir valor a la esquina</p>";
}
elseif (empty($_GET['lado'])) {
  echo "<p style='color:#FF0000'>Debes de introducir valor al lado</p>";
}
elseif (isset($_GET['lado']) & isset($_GET['esquina'])) {
  echo '<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
width="'.$_GET['lado'].'" height="'.$_GET['lado'].'" viewBox="0 0 120 100">
<rect x="10" y="10" width="100" height="80" rx="'.$_GET['esquina'].'" ry="'.$_GET['esquina'].'"
   fill="RoyalBlue" />
</svg>';
}


?>


  <p><a href="controles-formularios-2-11-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
