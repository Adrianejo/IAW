<?php
/**
 * Controles en formularios (1) 8-2 - controles-formularios-1-8-2.php
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
    Colores 3 (Resultado).
    Controles en formularios (1). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
<?php

if (isset($_GET['fondo']) & isset($_GET['letra'])) {
  
  echo "<body style='".$_GET['letra']."; ".$_GET['fondo']."'>";
}
elseif(isset($_GET['fondo'])) {
  echo "<body style= ".$_GET['fondo'].">";
}

elseif(isset($_GET['letra'])) {
  echo "<body style=".$_GET['letra'].">";
}

if(!isset($_GET['fondo']) & !isset($_GET['letra'])) {
  
  echo "<body>";
}

?>
</head>

<body>
  <h1>Colores 2 (Resultado)</h1>

  <p>Se han cambiado los colores elegidos.</p>

  <p><a href="controles-formularios-1-8-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
