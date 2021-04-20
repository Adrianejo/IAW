<?php
/**
 * Controles en formularios (2) 13-2 - controles-formularios-2-13-2.php
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
    Gradiente en cuadrado (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Gradiente en cuadrado (Resultado)</h1>

<?php
if (empty($_GET['lado'])) {
  echo "<p style='color:#FF0000'>Debes de introducir un tamaño para la figura</p>";
}
elseif (empty($_GET['inicial'])) {
  echo "<p style='color:#FF0000'>Debes de introducir el color inicial</p>";
}
elseif (empty($_GET['final'])) {
  echo "<p style='color:#FF0000'>Debes de introducir el color final</p>";
}
elseif (isset($_GET['lado']) & isset($_GET['inicial']) & isset($_GET['final'])) {
  echo '<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
width="'.$_GET['lado'].'" height="'.$_GET['lado'].'" viewBox="0 0 120 100">
<defs>
<linearGradient id="gradiente">
  <stop offset="5%" stop-color="'.$_GET['inicial'].'" />
  <stop offset="95%" stop-color="'.$_GET['final'].'" />
</linearGradient>
</defs>
<rect fill="url(#gradiente)" stroke="black" stroke-width="10" x="5" y="5" width="200" height="200" />
</svg>';
}

?>

  <p><a href="controles-formularios-2-13-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
