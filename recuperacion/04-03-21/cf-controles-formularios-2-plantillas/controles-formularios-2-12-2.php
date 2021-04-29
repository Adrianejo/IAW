<?php
/**
 * Controles en formularios (2) 12-2 - controles-formularios-2-12-2.php
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
    Círculo o cuadrado Cuadrado (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Círculo o cuadrado (Resultado)</h1>

<?php

if (empty($_GET['lado'])) {
  echo "<p style='color:#FF0000'>Debes darle un valor al tamaño</p>";
}

if (empty($_GET['forma1']) & empty($_GET['forma2'])) {
  echo "<p style='color:#FF0000'>No has seleccionado ninguna forma</p>";
}

if (isset($_GET['forma1']) & isset($_GET['lado'])) {
  echo '<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
  width="'.$_GET['lado'].'" height="'.$_GET['lado'].'" viewBox="0 0 120 100">
  <rect x="10" y="10" width="100" height="80"
     fill="RoyalBlue" />
  </svg>';
}
elseif (isset($_GET['forma2']) & isset($_GET['lado'])) {
  echo '<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
  width="'.$_GET['lado'].'" height="'.$_GET['lado'].'" viewBox="0 0 120 120">
  <circle cx="60" cy="60" r="50"
       fill="RoyalBlue" />
  </svg>';
}

?>

  <p><a href="controles-formularios-2-12-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
